@extends('masterchurch')
@section('title','Category')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Church Category</h2>
 
            <form action="{{ url('church/category') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                @include('churches._form_category')
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
