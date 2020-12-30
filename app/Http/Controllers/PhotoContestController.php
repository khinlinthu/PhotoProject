<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoContest;

class PhotoContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photocontests = PhotoContest::all();
        return view('photocontest.index',compact('photocontests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photocontest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request); //check output =die()

        //validation
        $request->validate([
            "name" => "required ",
            "photo" => "required | mimes:jpg,bmp,png", //a.jpg
        ]);

        //if include file,upload

        if($request->file()){
            //73492426342_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            
            $filePath = $request->file('photo')->storeAs('photocontestimg',$fileName,'public');

            $path ='/storage/'.$filePath;
        } //not always need

        //store
        $photocontest = new PhotoContest;
        $photocontest->name = $request->name;
        $photocontest->photo = $path;
        $photocontest->save();

        //redirect
        return redirect()->route('photocontest.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photocontest = PhotoContest::find($id);
         return view('photocontest.show',compact('photocontest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photocontest = PhotoContest::find($id);
         return view('photocontest.edit',compact('photocontest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        // Validation
        $request->validate([
            "name" => "required",
            "photo" => "sometimes|required|mimes:jpg,bmp,png", // a.jpg
            "oldphoto" => "required"
        ]);

        // if include file, upload
        if($request->file()) {
            // delete old photo

            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            $filePath = $request->file('photo')->storeAs('photocontestimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }else{
            $path = $request->oldphoto;
        }

        // update
        $photocontest = PhotoContest::find($id);
        $photocontest->name = $request->name;
        $photocontest->photo = $path;
        $photocontest->save();

        // redirect
        return redirect()->route('photocontest.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photocontest = PhotoContest::find($id);
        $photocontest->delete();
        return redirect()->route('photocontest.index');
    }
}
