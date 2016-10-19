@extends('masterchurch')
@section('title','Home')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

    <div class="container">
        <!--first row-->
        <div class="row banner">

        </div>

    </div>
@endsection
