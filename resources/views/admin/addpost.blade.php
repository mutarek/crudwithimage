@extends('template')
@section('content')
<div class="container">

<div class="row">
    <div class="col-6">
        <h1>Image</h1>
    </div>
    <div class="col-6 card p-5 m-3">
    <form action="" method="post" enctype="">
    <!-- Name input -->
    <div class="form-outline mb-3">
        <input name="title" type="text" id="form4Example1" class="form-control" />
        <label class="form-label" for="form4Example1">Title</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-3">
        <input type="file" id="form4Example2" class="form-control" />
        <label class="form-label" for="form4Example2">Post Image</label>
    </div>
    <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
    </form>
    </div>
    </div>
    </div>
@endSection