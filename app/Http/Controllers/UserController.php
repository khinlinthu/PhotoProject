<?php

namespace App\Http\Controllers;


use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
       $users = User::all();
        return view('user.index', compact('users'));
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function create()
    {
        return view('frontend.auth.member');
    }

    public function playerCreate()
    {
        return view('frontend.auth.player');
    }

    public function store(Request $request)
    {
         //dd($request);

        $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:10|unique:users,phone',
            "photo" => "required|mimes:jpeg,bmp,png",
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);
        //inserting user
        if ($request->password == $request->cpassword) {


            if($request->file()) 
            {
                // 624872374523_a.jpg
                $fileName = time().'_'.$request->photo->getClientOriginalName();

                    // brandimg/624872374523_a.jpg
                $filePath = $request->file('photo')->storeAs('memberimg', $fileName, 'public');

                $path = '/storage/'.$filePath;
            }

            // dd($path);
            $user = new User;
            $user->name = $request->name;
            $user->photo = $path;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(10);
            
            $user->save();

            $user->assignRole("member");

            return redirect()->route('user.signin')->with('success', 'Member Registration has been successful! Please login.');
        } else {
            return redirect()->back()->with("error", "Password didn't match");
        }
    }

    public function playerstore(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:10 |unique:users,phone',
            "photo" => "required|mimes:jpeg,bmp,png",
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);
        //inserting user
        if ($request->password == $request->cpassword) {


            if($request->file()) 
            {
                // 624872374523_a.jpg
                $fileName = time().'_'.$request->photo->getClientOriginalName();

                    // brandimg/624872374523_a.jpg
                $filePath = $request->file('photo')->storeAs('playerimg', $fileName, 'public');

                $path = '/storage/'.$filePath;
            }

            // dd($path);
            $user = new User;
            $user->name = $request->name;
            $user->photo = $path;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(10);
            
            $user->save();

            $user->assignRole("player");

            return redirect()->route('user.signin')->with('success', 'Player Registration has been successful! Please login.');
        } else {
            return redirect()->back()->with("error", "Password didn't match");
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required',
            'email' => 'required',
            "photo" => "sometimes|required|mimes:jpg,bmp,png",
            "oldphoto" => "required"
        ]);

        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('editimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }else{
            $path = $request->oldphoto;
        }
       
        $user = User::find($id);
        $user->name = $request->name;
        $user->photo = $path;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile')->with('success', 'Your changes has been saved!');
      
    }

     public function show($id)
    {
        $user = User::find($id);
        dd($user);
        return view('user.show', compact('user'));
    }

    public function role($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('user.role', compact('user', 'roles'));
    }

    public function roleUpdate(Request $request, $id)
    {
        DB::table('model_has_roles')->where('model_id', $id)->update(['role_id' => $request->role]);
        return redirect()->back()->with('success', 'Role has been successfully updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete(); 
        return redirect()->route('user.index');
    }

}
