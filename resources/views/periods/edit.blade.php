@extends('masterchurch')
@section('title', 'Edit ' . $period->title)

@section('content')

<div class="container">
    <div class="row">
        <div class="well">
        <h2>Edit {{ $period->title }}</h2>
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
