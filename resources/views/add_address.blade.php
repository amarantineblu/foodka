@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:200px;">

    <div class="col-md-4">
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

    <div class="col-md-8">
            <h4> Hello, {{ Auth::user()->name}} </h4>
            <form action="{{route('address.upload')}}" method="POST">@csrf
                <h3>Add Address</h3>
                <label for="state">Street</label> <br>
                <input type="text" name="street" class="form-control"> <br> <br>
                <label for="city">City</label> <br>
                <input type="text" name="city" class="form-control"> <br> <br>
                <label for="state">State</label> <br>
                <input type="text" name="state" class="form-control"> <br> <br>
                <button type="submit" class="btn btn-primary"> Submit </button>
            </form>
    </div>

</div>
@endsection

