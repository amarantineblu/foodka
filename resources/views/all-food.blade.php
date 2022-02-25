@extends('layouts.app')
@section('content')
<div class="col-md-4" style="margin-top:200px; margin-bottom:20px; margin-left:20px">
    <div class="card">
        <div class="card-body">
            @include('layouts.sidebar')
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8" style="border-bottom: 200px; margin:30px">
    <div class="all-foods">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($foods as $food)
                        <tr>
                            <td>{{$food->id}}</td>
                            <td>{{$food->name}}</td>
                            <td>{{$food->price}}</td>
                            <td>{{$food->description}}</td>
                            <td><img src="/storage/foods/{{$food->image}}" alt="" width="50px" srcset=""></td>
                            <td>{{$food->created_at}}</td>
                            <td>
                                <a href="{{route('food.edit',[$food->name, $food->id])}}" class="btn btn-primary btn-sm">Edit Food</a>
                                <a href="" class="btn btn-danger btn-sm">Delete Food</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

