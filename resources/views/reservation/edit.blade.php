@extends('layouts.master')
@section('content')

<div class="container">
<h1 class="mt-5">Edit Reservation</h1>

<form method="post" action="{{ route('reservation.update',$reservations->id)}}">
    @csrf
    <div class="row">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control  mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->name }}" placeholder="Enter name">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"  name="email" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->email }}" placeholder="Enter email">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->phone }}" placeholder="Enter phone">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Guest</label>
    <input type="text" name="guest" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->guest }}" placeholder="Enter guest">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" name="date" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->date }}" placeholder="Enter date">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Time</label>
    <input type="text" name="time" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->time }}" placeholder="Enter time">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Message</label>
    <input type="text" name="message" class="form-control mt-2 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $reservations->message }}" placeholder="Enter message">
  </div>

</div>
  <button type="submit" class="btn btn-primary btn-md mt-4">Submit</button>
  
</form>
</div>
@endsection