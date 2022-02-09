@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-5 mb-3">Chefs</h1>
                        
                        
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Chefs
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Speciality</th>
                                            <th>Image</th>
                                            <th>Create at</th>
                                            <th>Update at</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Speciality</th>
                                            <th>Image</th>
                                            <th>Create at</th>
                                            <th>Update at</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach ($chefs as $chef)
                                        <tr>
                                            <td>{{$chef->name}}</td>
                                            <td>{{$chef->speciality}}</td>
                                            <td>{{$chef->image}}</td>
                                            <td>{{$chef->created_at}}</td>
                                            <td>{{$chef->updated_at}}</td>
                                            <td><a href="{{ asset('chefs/edit')}}/{{ $chef->id }}" class="btn btn-primary btn-sm">Edit</a></td>
                                            <td> <a href="{{ asset('chefs/delete')}}/{{ $chef->id }}" class="btn btn-danger btn-sm">Delete</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        {{ $chefs->links()}}
</div>
@endsection