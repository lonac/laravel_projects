@extends('masterchurch')
@section('title', 'Edit' . $event->title)

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <h2>Edit {{ $event->title }}</h2>
            <div class="well">

                @include('errors.list')

                <form action="{{ url('events/' . $event->id) }}" method="POST" class="form-horizontal" role="form">

                    {!! method_field('patch') !!}

                    {{ csrf_field() }}

                    @include('events._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="well"></div>
                </div>
                <div class="col-sm-4">
                    <div class="well"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
