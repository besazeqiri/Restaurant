@extends('layouts.master')
@section('content')

<div class="container">
<h1 class="mt-5">Edit Food</h1>

<form method="post" action="{{ route('foods.update',$foods->id)}}">
    @csrf
    <div class="row">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control  mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('title') is-invalid @enderror" value="{{ $foods->title }}" placeholder="Enter title">
    @error('title')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Price</label>
    <input type="text"  name="price" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('price') is-invalid @enderror" value="{{ $foods->price }}" placeholder="Enter price">
    @error('price')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="image" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('image') is-invalid @enderror" value="{{ $foods->image }}" placeholder="">
    @error('image')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="description" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp"
    class="@error('description') is-invalid @enderror"  value="{{ $foods->description }}" placeholder="Enter description">
    @error('description')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
  <input type="submit" class="btn btn-primary btn-md mt-4" value="Submit">
  
</form>
</div>
@endsection