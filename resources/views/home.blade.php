
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
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    @if($church->count() > 0)

                    @else
                        <div class="jumbotron text-center">
                            <h2>You have no any church</h2>
                            <p>
                                <a href="{{ url('new') }}">Create</a>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection
