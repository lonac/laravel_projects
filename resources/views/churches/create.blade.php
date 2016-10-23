@extends('masterchurch')
@section('title','Create a new church')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Add your church</h2>
 
            <form action="{{ url('churches') }}" method="POST" role="form">
                
                {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="name">Your church name</label>
                    <input type="text" name="name" class="form-control" id="name" required="required">
                </div>
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
