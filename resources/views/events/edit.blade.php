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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload event photos</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('event-photos') }}" method="POST" class="form-horizontal" role="form"
                                  enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <input type="hidden" name="event" value="{{ $event->id }}">

                                <div class="form-group">
                                    <label for="image" class="col-sm-2 control-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Description
                                        (Optional)</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" class="form-control"
                                                  rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Photos</h3>
                        </div>
                        <div class="panel-body">
                            @if($event->photos->count() > 0)

                            @else
                                No photo
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
