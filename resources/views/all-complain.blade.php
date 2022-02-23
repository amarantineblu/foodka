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
        <div class="card">
            <div class="card-head">
                <h3>Your Complain</h3>
            </div>
              <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Message</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($complains as $complain)
                    <tr>
                        <td>{{$complain->id}}</td>
                        <td>{{$complain->message}}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>

        </div>
    </div>
</div>
@endsection

