@extends('masterchurch')
@section('title', 'Create a new events')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <h2>Create a new event</h2>
            <div class="well">

                @include('errors.list')

                <form action="{{ url('events') }}" method="POST" class="form-horizontal" role="form">

                    {{ csrf_field() }}


                    @include('events._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
