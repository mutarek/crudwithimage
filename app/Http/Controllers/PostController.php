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
    function savePost(Request $request)
    {
        
    }
}
