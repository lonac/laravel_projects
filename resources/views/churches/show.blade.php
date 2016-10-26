@extends('masterchurch')
@section('title', $church->name)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">
                    <h1>{{ $church->name }}</h1>
                    <h2>About</h2>
                    <p>
                        {{ $church->description }}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <tbody>
                            <tr>
                                <th>Category</th>
                                <td>{{ $church->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td>{{ $church->region->name }}</td>
                                <th>District</th>
                                <td>{{ $church->district->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone(s)</th>
                                <td>
                                    @if($church->phones->count() > 0)
                                        <ul class="list-unstyled">
                                            @foreach($church->phones as $phone)
                                                <li>{{ $phone->number }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        Null
                                    @endif
                                </td>
                                <th>Email(s)</th>
                                <td>

                                    @if($church->emails->count() > 0)
                                        <ul class="list-unstyled">
                                            @foreach($church->emails as $email)
                                                <li>{{ $email->address }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        Null
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $church->address }}</td>
                            </tr>
                            <tr>
                                <th>Other name</th>
                                <td>{{ $church->other_name }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Timetable</h3>
                    </div>
                    <div class="panel-body">
                        @if($church->periods->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <tbody>
                                    @foreach($church->periods as $period)
                                        <tr>
                                            <th>{{ $period->day->name }}</th>
                                            <td colspan="2"><a href="{{ url('#') }}">{{ $period->title }}</a></td>
                                        </tr>
                                        <tr colspan="3">
                                            <td>&nbsp;</td>
                                            <td>
                                                <small>{{ \Carbon\Carbon::parse($period->start_time)->format('h:i a')  }}</small>
                                            </td>
                                            <td>
                                                <small>{{ \Carbon\Carbon::parse($period->finish_time)->format('h:i a')  }}</small>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            No timetable
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Events</h3>
                    </div>
                    <div class="panel-body">
                        @if($church->events->count() > 0)
                            <div class="list-group">
                                @foreach($church->events as $event)
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
        @if($church->images->count() > 0)
            <div class="well">

            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Similar Churches</h3>
                    </div>
                    <div class="panel-body">
                        @if($churches->count() > 0)
                            @foreach($churches->chunk(4) as $churchesSet)
                                <div class="row">
                                    @foreach($churchesSet as $church)
                                        <div class="col-sm-3">
                                            @include('partials.card', ['church' => $church])
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @else
                            <h1 class="text-center">No church</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
