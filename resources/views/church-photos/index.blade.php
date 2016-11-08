@extends('masterchurch')
@section('title', 'Photos')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Photos</h3>
                    </div>
                    <div class="panel-body">
                        @if($images->count() > 0)
                            @foreach($images->chunk(3) as $imagesSet)
                                <div class="row">
                                    @foreach($imagesSet as $image)
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="thumbnail">
                                                <img src="{{ url('images/churches/' . $image->church_id . '/' . $image->url) }}"
                                                     class="img-responsive" alt="">
                                                <div class="caption">
                                                    <p>
                                                        {{ $image->description }}
                                                    </p>
                                                    <p>
                                                        @if($image->featured)
                                                            <strong>Featured</strong>
                                                    @else
                                                        <form action="{{ url('church-photos/' . $image->id . '/make-featured') }}"
                                                              method="POST" class="form-horizontal" role="form">

                                                            {{ method_field('patch') }}
                                                            {{ csrf_field() }}

                                                            <button type="submit" class="btn btn-primary">Make Featured
                                                            </button>
                                                        </form>
                                                        @endif
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @else
                            <h2 class="text-center">No Photos for this church</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
