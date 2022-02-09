@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-5 mb-3">Users</h1>
                        
                        
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Users
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Create at</th>
                                            <th>Update at</th>
                                            <th>Edit</th>
                                            <th >Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Create at</th>
                                            <th>Update at</th>
                                            <th>Edit</th>
                                            <th >Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->updated_at}}</td>
                                            <td><a href="{{ asset('users/edit')}}/{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a></td>
                                           
                                            @if($user->role=="admin")
                                            <td> <a href="" class="btn btn-danger btn-sm">Not Allowed!</a></td>
                                       @else
                                       <td> <a href="{{ asset('users/delete')}}/{{ $user->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                                        @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
</div>
@endsection