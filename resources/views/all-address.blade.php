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
    <div class="all-address">
        <h1>All Addresses</h1>
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>State</th>
                        <th>Street</th>
                        <th>City</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($address as $address)
                        <tr>
                            <td>{{$address->id}}</td>
                            <td>{{$address->state}}</td>
                            <td>{{$address->street}}</td>
                            <td>{{$address->city}}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

