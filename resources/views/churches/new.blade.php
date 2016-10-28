@extends('masterchurch')
@section('title','Create a new church')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Add your church</h2>
 
            <form action="{{ url('new') }}" method="POST" role="form">
                
                {{ csrf_field() }}
            
                @include('churches._form_name')
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
