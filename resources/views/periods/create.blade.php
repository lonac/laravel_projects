@extends('masterchurch')
@section('title', 'Add a new period')

@section('content')

<div class="container">
    <div class="row">
        <div class="well">
        <h2>Add a new period</h2>
        <form action="{{ url('periods') }}" method="POST" class="form-horizontal" role="form">
                
                {{ csrf_field() }}

                @include('periods._form')

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>            
        </div>
    </div>
</div>

@endsection
