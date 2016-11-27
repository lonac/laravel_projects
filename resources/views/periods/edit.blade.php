@extends('masterchurch')
@section('title', 'Edit ' . $period->title)

@section('content')

<div class="container">
    <div class="row">
        <div class="well">
        <h2>Edit {{ $period->title }}</h2>
        <form action="{{ url('periods/' . $period->id) }}" method="POST" class="form-horizontal" role="form">
                
                {{ method_field('patch') }}
                {{ csrf_field() }}

                @include('periods._form')

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
        </form>            
        </div>
    </div>
</div>

@endsection
