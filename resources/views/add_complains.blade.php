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
            <form action="{{route('complain.upload')}}" method="POST">@csrf
                <h3> Tell Us What You Think</h3>
                <label for="message">Complains</label> <br>
                <textarea name="message" id="" cols="50" rows="10"></textarea> <br>
                <button type="submit" class="btn btn-primary"> Submit </button>
            </form>
    </div>

</div>
@endsection

