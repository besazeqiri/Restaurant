@extends('layouts.master')
@section('content')

<div class="container">
<h1 class="mt-5">Edit User</h1>

<form method="post" action="{{ route('users.update',$users->id)}}">
    @csrf
    <div class="row">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control  mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('name') is-invalid @enderror" value="{{ $users->name }}" placeholder="Enter name">

    @error('name')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"  name="email" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('email') is-invalid @enderror" value="{{ $users->email }}" placeholder="Enter email">

    
    @error('email')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" readonly
    class="@error('email') is-invalid @enderror"  value="{{ $users->password }}" placeholder="Enter password">

    @error('password')
    <div class=" w-75 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
  <input type="submit" class="btn btn-primary btn-md mt-4" value="Submit">
  
</form>
</div>
@endsection