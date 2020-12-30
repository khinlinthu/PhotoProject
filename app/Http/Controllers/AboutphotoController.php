<?php

namespace App\Http\Controllers;

use App\Aboutphoto;
use Illuminate\Http\Request;
use App\PhotoContest;

class AboutphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $aboutphotos = Aboutphoto::all();
        return view('aboutphoto.index',compact('aboutphotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photocontest = PhotoContest::all();
        $aboutphoto = Aboutphoto::all();
        return view('aboutphoto.create',compact('photocontest','aboutphoto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
        $request-> validate([
            "name" => "required",
            "photo" => "required|mimes:jpg,bmp,png", // a.jpg
            "description" => "required",
            "note" => "required",
            "photocontest" => "required"
        ]);

        // If include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('aboutphotoimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        // store
        $aboutphoto = new Aboutphoto;
        $aboutphoto->name = $request->name;
        $aboutphoto->photo = $path;
        $aboutphoto->description = $request->description;
        $aboutphoto->note = $request->note;
        $aboutphoto->photo_contest_id = $request->photocontest;
        $aboutphoto->save();

        // redirect
        return redirect()->route('aboutphoto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aboutphoto  $aboutphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutphoto $aboutphoto)
    {
        return view('aboutphoto.show',compact('aboutphoto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aboutphoto  $aboutphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutphoto $aboutphoto)
    {
        // $aboutphoto = Aboutphoto::all();
        $photocontest = PhotoContest::all();
        // dd($photocontest);
        return view('aboutphoto.edit',compact('photocontest', 'aboutphoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aboutphoto  $aboutphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutphoto $aboutphoto)
    {
        // dd($request);

        // Validation
        $request-> validate([
            "name" => "required",
            "photo" => "sometimes|required|mimes:jpg,bmp,png", // a.jpg
            "description" => "required",
            "note" => "required",
            "photocontest" => "required"
        ]);

        // If include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('aboutphotoimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }else{
            $path = $request->oldphoto;
        }

        // update
        $aboutphoto->name = $request->name;
        $aboutphoto->photo = $path;
        $aboutphoto->description = $request->description;
        $aboutphoto->note = $request->note;
        $aboutphoto->photo_contest_id = $request->photocontest;
        $aboutphoto->save();
        // dd($aboutphoto);

        // redirect
        return redirect()->route('aboutphoto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aboutphoto  $aboutphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutphoto $aboutphoto)
    {
        $aboutphoto->delete();
        return redirect()->route('aboutphoto.index');
    }
}
