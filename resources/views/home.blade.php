@extends('masterchurch')
@section('title','Home')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

    @if(Auth::user()->verified == 0)
        <div class="alert alert-danger">
            <h3 class="text-center">Your account is not activated. Go to your email to activate your account.</h3>
        </div>
    @endif

    <div class="container">
        <!--first row-->
        <div class="row banner">

        </div>

    </div>
@endsection
