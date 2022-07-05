@extends('template')
@section('content')
<div class="container my-5 shadow">

<div class="row">
    <div class="col">
        <h1>Add A Post</h1>
        <!-- <img src="https://dhakacity.com.bd/wp-content/uploads/2022/06/One-day-magic-paradise-park.jpg.webp" alt="" srcset="" height="200"> -->
    </div>
    <div class="col card p-5 m-3">
    <form action="{{url('/savedata')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="form-outline mb-3">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        <input name="title" type="text" id="form4Example1" class="form-control" />
        <label class="form-label" for="form4Example1">Title</label>
    </div>
    <div class="form-outline mb-3">
             @error('filetoupload')
            <span class="text-danger">{{$message}}</span>
            @enderror
        <input name="filetoupload" type="file" id="form4Example2" class="form-control" />
        <label class="form-label" for="form4Example2">Post Image</label>
    </div>
    <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
    </form>
    </div>
    </div>
    </div>
@endSection