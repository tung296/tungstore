<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getmedia(){
        $paths = glob(storage_path('app/public/*'));
        $fileNames = array();
        foreach($paths as $path){
            array_push($fileNames,basename($path));
        }
        // $fileNames = array_reverse($fileNames);
        return json_encode($fileNames);
    }
    public function index()
    {
        $paths = glob(storage_path('app/public/*'));
        $fileNames = array();
        foreach($paths as $path){
            array_push($fileNames,basename($path));
        }
        $fileNames = array_reverse($fileNames);
        return view('media.index',compact('fileNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            //code...
            $this->validate($request, [
                'image' => 'mimes:jpeg,jpg,png|required',
            ]);

                $file = $request->image;
                $image_name = time().'_'.$file->getClientOriginalName();
                $file->move(storage_path('app/public/'), $image_name);
    
                // return "success";
            return redirect()->route('media.index')->with('success','Upload success');
        } catch (\Throwable $th) {
            //throw $th;
            // return "error";

            return redirect()->route('media.index')->with('error','Upload error');

        }
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fileName)
    {
        if(!Storage::exists($fileName)){
            unlink(storage_path('app/public/'.$fileName));
            // dd( Storage::delete('ckeditor/'.$fileName));
            // Storage::delete('ckeditor/'.$fileName);
            return "success";
        }else{
            return "error";
        }

    }
}
