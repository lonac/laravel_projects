@extends('masterchurch')
@section('title','About')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Address</h2>
 
            <form action="{{ url('church/address') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="" required="required" title="">
                </div>
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
