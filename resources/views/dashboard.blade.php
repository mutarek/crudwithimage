@extends('template')
@section('content')
<div class="container my-5 shadow">
<h1>Dashboard</h1>
@if(Session::has('msg'))
<p class="text-info">{{Session::get('msg')}}</p>
@endif
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alldata as $singledata)
    <tr>
      <td><h1 class="text-danger">{{$singledata->id}}</h1></td>
      <td>
        <h4>{{$singledata->title}}</h4>
      </td>
      <td>
        <img src="{{asset($singledata->image)}}" alt="" width="100px" height="80px">
      </td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endSection