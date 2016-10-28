@extends('masterchurch')
@section('title','Region')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Region</h2>
 
            <form action="{{ url('church/region') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                @include('churches._form_region')
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
