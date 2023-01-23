<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class FileUploadController extends Controller
{
    public function index(){
      $images=Image::all();
      return view('file_upload')->with('images',$images);
    }

    public function action(Request $request){
      $request -> validate([
        'upload_file' => 'required'
      ]);
      
      // $request -> upload_file->storeAs('upfiles','myfileNewName.' .$request->upload_file->extension());
      // echo 'upload success';
      $dir='upfiles';
      $file_name=$request->file('upload_file')->getClientOriginalName();
      $request->file('upload_file')->storeAs($dir,$file_name  .$request->upload_file->extension());

      $image = new Image();
      $image->name=$file_name;
      $image->path='storage/'.$dir . '/' . $file_name;
      $image->save();
      
      $images=Image::all();
      return view ('file_upload')->with('images',$images);
    }
    
    public function edit(Request $content_id){
      // $request -> validate([
      //   'upload_file' => 'required'
      // ]);
      $this->output->writeln($content_id);
      $contents_edit_query = Content::select('*');
      $contents_edit_query->where('id', $content_id);
      // $request -> upload_file->storeAs('upfiles','myfileNewName.' .$request->upload_file->extension());
      // echo 'upload success';
      $dir='upfiles';
      $file_name=$request->file('upload_file')->getClientOriginalName();
      $request->file('upload_file')->storeAs($dir,$file_name  .$request->upload_file->extension());

      $image = new Image();
      $image->name=$file_name;
      $image->path='storage/'.$dir . '/' . $file_name;
      $image->save();
      
      $images=Image::all();
      return view ('file_upload')->with('images',$images);
    }
}
