<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('dashboard');
    }
    function addpost()
    {
        return view('admin/addpost');
    }
    function savedata(Request $request)
    {
        $rules = [
            'title' => 'required|unique:posts|max:255',
            'filetoupload'=> 'required|filetoupload|mimes:jpeg,png,jpg,gif|max:2048'
         ];
        $message = [
            'title.required'=>'Please Type your Name',
            'filetoupload.required'=>'Please Insert an Image',
         ];
         $this->validate($request,$rules,$message);
    }
}
