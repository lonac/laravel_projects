@extends('masterchurch')
@section('title','Create a new church')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Other name</h2>
 
            <form action="{{ url('church/other-name') }}" method="POST" role="form">
                
                {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="other_name">Name</label>
                    <input type="text" name="other_name" class="form-control" id="other_name" required="required">
                </div>
            
                <button type="submit" class="btn btn-primary">Finish</button>
            </form>

        </div>
    </div>
</div>

@endsection
