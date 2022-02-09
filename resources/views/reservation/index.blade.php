@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-5 mb-3">Reservation</h1>
                        
                        
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Reservation
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Guest</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Message</th>
                                            <th>Make a reservation</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Guest</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Message</th>
                                            <th>Make a reservation</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{$reservation->name}}</td>
                                            <td>{{$reservation->email}}</td>
                                            <td>{{$reservation->phone}}</td>
                                            <td>{{$reservation->guest}}</td>
                                            <td>{{$reservation->date}}</td>
                                            <td>{{$reservation->time}}</td>
                                            <td>{{$reservation->message}}</td>                                         
                                            <td>{{$reservation->user->name}}</td>
                                     <!-- <td><a href="{{ asset('reservation/edit')}}/{{ $reservation->id }}" class="btn btn-primary btn-sm">Edit</a></td>-->
                                     <td><a href="{{ asset('reservation/delete')}}/{{ $reservation->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        {{ $reservations->links ()}}
</div>
@endsection