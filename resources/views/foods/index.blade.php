@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-5 mb-3">Foods Menu</h1>
                        
                        
                        <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Foods Menu
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Prepared by</th>
                                            <th>Edit</th>
                                            <th >Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Prepared by</th>
                                            <th>Edit</th>
                                            <th >Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach ($foods as $food)
                                        <tr>
                                            <td>{{$food->title}}</td>
                                            <td>${{$food->price}}</td>
                                            <td>{{$food->image}}</td>
                                            <td>{{$food->description}}</td>
                                            <td>{{$food->chef->name}}</td>
                                            <td><a href="{{ asset('foods/edit')}}/{{ $food->id }}" class="btn btn-primary btn-sm">Edit</a></td>
                                            <td> <a href="{{ asset('foods/delete')}}/{{ $food->id }}" class="btn btn-danger btn-sm">Delete</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        {{ $foods->links ()}}
</div>
@endsection