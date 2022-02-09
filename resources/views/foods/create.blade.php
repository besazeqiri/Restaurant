@extends('layouts.master')
@section('content')

<div class="container">
  <h1 class="mt-5">Create Food</h1>

<form method="post" action="{{ route ('foods.store')}}">
    @csrf
    <div class="row">

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control  mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('title') is-invalid @enderror"  placeholder="Enter title">
    @error('title')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror

  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Price</label>
    <input type="text"  name="price" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp"
    class="@error('price') is-invalid @enderror" placeholder="Enter Price">

    @error('price')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="image" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('image') is-invalid @enderror" placeholder="">
    @error('image')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

<div class="form-group mt-2">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="description" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('description') is-invalid @enderror" placeholder="Enter Description">
    @error('description')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

<div class="form-group mt-4">
    <select class="form-select form-select-md w-75"  name="chef_id" id="chef_id" >
            <option selected>Chose Chef</option>
  
            @foreach($chefs as $chef)
            <option value="{{ $chef->id }}">{{ $chef->name }}</option>
            @endforeach
          </select>
        </div>
        </div>

 <button type="submit" class="btn btn-primary btn-md mt-4">Submit</button>

</form>
</div>
</div>
@endsection