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
<div class="col-md-8" style="border-bottom: 200px">
    <div class="all-foods">
        <div class="card">
            <table>
                <th>
                    <td>Name</td>
                    <td>Food</td>
                    <td>Description</td>
                    <td>Image</td>
                </th>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

