@extends('masterchurch')
@section('title', $church->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            <div class="well">
                <h1>{{ $church->name }}</h1>
                <h2>About</h2>
                <p>
                    {{ $church->description }}
                </p>
                <h2>Region</h2>
                <p>
                    {{ $church->region->name }}
                </p>
                <h2>District</h2>
                <p>
                    {{ $church->district->name }}
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Similar Churches</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
