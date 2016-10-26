@extends('masterchurch')
@section('title', 'Events')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Events</h2>
                @if($events->count() > 0)
                    @foreach($events->chunk(4) as $eventsSet)
                        <div class="row">
                            @foreach($eventsSet as $event)
                                <div class="col-sm-3">
                                    <div class="well">
                                        <h3><a href="{{ url('events/' . $event->id . '/' . $event->slug) }}">{{ $event->title }}</a></h3>
                                        <p>
                                            {{ $event->time }}
                                        </p>
                                        <p>
                                            {{ $event->church->name }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <div class="text-center">
                        {{ $events->links() }}
                    </div>
                @else
                    <h2 class="text-center">No event</h2>
                @endif
            </div>
        </div>
    </div>

@endsection
