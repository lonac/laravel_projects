@extends('masterchurch')
@section('title','About')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Short description</h2>
 
            <form action="{{ url('church/about') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="description">About</label>
                    <textarea name="description" id="description" class="form-control" rows="10" placeholder="Write a short description about your church here." required="required"></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
