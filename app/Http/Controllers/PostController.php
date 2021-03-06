<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    function index()
    {
        $alldata = Post::paginate(50);
        return view('dashboard',compact('alldata'));
    }
    function addpost()
    {
        return view('admin/addpost');
    }
    function savedata(Request $request)
    {
        $rules = [
            'title' => 'required|unique:posts|max:255',
            'filetoupload'=> 'required'
         ];
        $message = [
            'title.required'=>'Please Type your Name',
            'filetoupload.required'=>'Please Insert an Image',
         ];
         $this->validate($request,$rules,$message);
         $img = $request->file('filetoupload');
         $customimg = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
         $imageurl = 'upload/'.$customimg;
         $img->move(public_path('upload'),$customimg);

         Post::insert([
            'title' => $request->title, 
            'image'=>$imageurl
         ]);
        Session::flash('msg','Data Inserted Successfully');
        return redirect()->to(url('/'));
    }
    function editpost($id)
    {
       $editablepost=  Post::where('id',$id)->first();

       return view('editpost',compact('editablepost'));
    }

    function updatepost(Request $request)
    {
        if($request->file('filetoupload'))
        {
            $img = $request->file('filetoupload');
            $customimg = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $imageurl = 'upload/'.$customimg;
            $img->move(public_path('upload'),$customimg);
            $id = $request->id;
            Post::where('id',$id)->update([
                'title' => $request->title, 
                 'image'=>$imageurl
            ]);
            Session::flash('msg','Data Updated Successfully');
            return redirect()->to(url('/'));
        }
        else
        {
            $id = $request->id;
            Post::where('id',$id)->update([
                'title' => $request->title,
            ]);
            Session::flash('msg','Data Updated Successfully');
            return redirect()->to(url('/'));
        }
    }
    function deletepost($id)
    {
        Post::findOrFail($id)->delete();
        Session::flash('msg','Data deleted Successfully');
        return redirect()->to(url('/'));
    }

}
