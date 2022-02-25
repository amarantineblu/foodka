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
            <h4> Hello, {{ Auth::user()->name}} </h4>
            <form action="{{route('food.update', $food)}}" method="POST" enctype="multipart/form-data">@csrf @method('put')
                <img src="/storage/foods/{{$food->image}}" >
                <h3>Edit {{$food->name}}</h3>
                <label for="name">Name</label> <br>
                <input type="text" value="{{$food->name}}" name="name" class="form-control"> <br> 
                <label for="price">Price</label> <br>
                <input type="text" value="{{$food->price}}" name="price" class="form-control"> <br> <br>
                <label for="image">Image</label> <br>
                <input type="file" name="image" class="form-control"> <br> <br>
                <label for="description">Description</label> <br>
                <textarea name="description" id="" cols="50" rows="10">{{$food->description}}</textarea> <br>
                <button type="submit" class="btn btn-primary"> Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection

