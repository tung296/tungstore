<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CkeditorController extends Controller
{
    public function upload_ckeditor(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $originName = str_replace('.','',$originName);
            $fileName = pathinfo($originName,PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            if($extention=='jpg'||$extention=='png'||$extention=='jpge'){
                $fileName = time().'_'.$request->file('upload')->getClientOriginalName();
    
                $request->file('upload')->move(storage_path('app/public/'),$fileName);
    
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    
                $url = asset('storage/'.$fileName);
                $msg = 'Upload image success';
                $reponse = "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg');</script>";
            }else{
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $msg = 'Invalid image';
                $reponse = "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '', '$msg');</script>";
            }
            @header('Content-Type: text/html; charset=UTF-8');
            echo $reponse;
        }
    }
    public function upload_browser(Request $request){
        $paths = glob(storage_path('app/public/*'));
        $fileNames = array();
        foreach($paths as $path){
            array_push($fileNames,basename($path));
        }
        // dd($fileNames);
        return view('ckeditor.upload_browser',compact('fileNames'));
    }
    public function del_ckeditor($fileName){
        if(!Storage::exists($fileName)){
            unlink(storage_path('app/public/'.$fileName));
            // dd( Storage::delete('ckeditor/'.$fileName));
            // Storage::delete('ckeditor/'.$fileName);
        }
    }
}
