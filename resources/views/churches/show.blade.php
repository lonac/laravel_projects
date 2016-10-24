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
                    <h2>Category</h2>
                    <p>
                        {{ $church->category->name }}
                    </p>
                    <h2>Region</h2>
                    <p>
                        {{ $church->region->name }}
                    </p>
                    <h2>District</h2>
                    <p>
                        {{ $church->district->name }}
                    </p>
                    <h2>Phone(s)</h2>
                    <p>
                    @if($church->phones->count() > 0)
                        <ul>
                            @foreach($church->phones as $phone)
                                <li>{{ $phone->number }}</li>
                            @endforeach
                        </ul>
                    @else
                        Null
                        @endif
                        </p>
                        <h2>Email(s)</h2>
                        <p>
                        @if($church->emails->count() > 0)
                            <ul>
                                @foreach($church->emails as $email)
                                    <li>{{ $email->address }}</li>
                                @endforeach
                            </ul>
                        @else
                            Null
                            @endif
                            </p>
                            <h2>Address</h2>
                            <p>
                                {{ $church->address }}
                            </p>
                            <h2>Other name</h2>
                            <p>
                                {{ $church->other_name }}
                            </p>
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
                                    <a href="#" class="list-group-item active">
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
