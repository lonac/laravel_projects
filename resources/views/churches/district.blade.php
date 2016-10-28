@extends('masterchurch')
@section('title','District')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>District</h2>
 
            <form action="{{ url('church/district') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                @include('churches._form_district')
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
