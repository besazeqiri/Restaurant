@extends('layouts.master')
@section('content')

<div class="container">
<h1 class="mt-5">Create Reservation</h1>

<form method="post" action="{{route ('reservation.store')}}">
    @csrf
    <div class="row">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control  mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('name') is-invalid @enderror" placeholder="Enter name">
    @error('name')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"  name="email" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('email') is-invalid @enderror" placeholder="Enter email">
    @error('email')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp"
    class="@error('phone') is-invalid @enderror" placeholder="Enter phone">
    @error('phone')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Guest</label>
    <input type="text" name="guest" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('guest') is-invalid @enderror" placeholder="Enter number of guest">
    @error('guest')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" name="date" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp"
    class="@error('date') is-invalid @enderror" placeholder="Enter date">
    @error('date')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Time</label>
    <input type="text" name="time" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('time') is-invalid @enderror" placeholder="Enter time">
    @error('time')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Message</label>
    <input type="text" name="message" class="form-control mt-2 w-50" id="exampleInputEmail1" aria-describedby="emailHelp" 
    class="@error('message') is-invalid @enderror"  placeholder="Enter message">
    @error('message')
    <div class=" w-50 mt-2 alert alert-danger">{{ $message }}</div>
@enderror
  </div>

</div>
  <button type="submit" class="btn btn-primary btn-md mt-4">Submit</button>
</form>
</div>
@endsection