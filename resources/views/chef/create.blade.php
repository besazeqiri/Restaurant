@extends('layouts.master')
@section('content')
<div class="container">
<h1 class="mt-5">Create Chef</h1>

<form method="post" action="{{ route ('chefs.store')}}">
    @csrf
    <div class="row">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control  mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp"
    class="@error('name') is-invalid @enderror" placeholder="Enter Name">
    @error('name')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Speciality</label>
    <input type="text"  name="speciality" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('speciality') is-invalid @enderror" placeholder="Enter Speciality">
    @error('speciality')
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
</div>
  <button type="submit" class="btn btn-primary btn-md mt-4 pr-4">Submit</button>
  </form>
</div>
@endsection