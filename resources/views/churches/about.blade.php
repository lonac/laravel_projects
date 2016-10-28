@extends('masterchurch')
@section('title','About')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Short description</h2>
 
            <form action="{{ url('church/about') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                @include('churches._form_about')
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
