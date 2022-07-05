@extends('template')
@section('content')
<div class="container my-5 shadow">
<h1>Dashboard</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td>
        <h2>Sample Title</h2>
      </td>
      <td>
      </td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
@endSection