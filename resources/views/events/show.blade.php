@extends('masterchurch')
@section('title', $event->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="well">
                    <h2>{{ $event->title }}</h2>
                    <p>{{ $event->time }}</p>
                    <p>
                        {{ $event->description }}
                    </p>
                    <p>
                        {{ $event->church->name }}
                    </p>
                </div>
                @if($event->photos->count() > 0)



                    <div id="main_area">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-sm-6" id="slider-thumbs">
                                <!-- Bottom switcher of slider -->
                                <ul class="hide-bullets">
                                    @foreach($event->photos as $photo)
                                        <li class="col-sm-3">
                                            <a class="thumbnail" id="carousel-selector-{{ $photo->id }}">
                                                <img src="{{ url('images/events/' . $event->id . '/' . $photo->url) }}"
                                                     class="img-responsive" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-xs-12" id="slider">
                                    <!-- Top part of the slider -->
                                    <div class="row">
                                        <div class="col-sm-12" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="active item" data-slide-number="0">
                                                        <img src="http://placehold.it/470x480&text={{ $event->title }}"></div>


                                                    @foreach($event->photos as $photo)
                                                        <div class="item" data-slide-number="{{ $photo->id }}">
                                                            <img src="{{ url('images/events/' . $event->id . '/' . $photo->url) }}"
                                                                 class="img-responsive" alt="">
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <!-- Carousel nav -->
                                                <a class="left carousel-control" href="#myCarousel" role="button"
                                                   data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button"
                                                   data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Slider-->
                        </div>

                    </div>

                    {{--<div class="well">--}}
                    {{--<ul class="list-unstyled">--}}
                    {{--@foreach($event->photos as $photo)--}}
                    {{--<li class="list-unstyled">--}}
                    {{--<div class="thumbnail">--}}
                    {{--<img src="{{ url('images/events/' . $event->id . '/' . $photo->url) }}"--}}
                    {{--class="img-responsive" alt="">--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                @else
                    No photo
                @endif
            </div>
            <div class="col-sm-3">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Other events</h3>
                    </div>
                    <div class="panel-body">
                        @if($events->count() > 0)
                            <div class="list-group">
                                @foreach($events as $event)
                                    <a href="{{ url('events/' . $event->id . '/' . $event->slug) }}"
                                       class="list-group-item active">
                                        <h4 class="list-group-item-heading">{{ str_limit($event->title, 30) }}</h4>
                                        <p class="list-group-item-text">
                                            {{ $event->time }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            No event
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    <h2>Other churches with similar events</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
