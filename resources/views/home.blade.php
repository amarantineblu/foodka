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
            <h4> Hello, {{ Auth::user()->email}} </h4>
                <form action="{{ route('update-profile')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ Auth::user()->email}}" class="form-control">
                    </div>
                    <div class="form-group m-5">
                        <button type="submit" class="btn btn-primary"> Save </button>
                    </div>
                </form>

        </div>

</div>
@endsection
