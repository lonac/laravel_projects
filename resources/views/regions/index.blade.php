@extends('masterchurch')
@section('title', 'Regions')

@section('content')

<div class="container">
    <div class="row">
        @if($regions->count() > 0)
            @foreach($regions->chunk(3) as $regionsSet)
                <div class="row">
                    @foreach($regionsSet as $region)
                        <div class="col-xs-12 col-sm-4">
                            <h2><a href="{{ url('regions/' . $region->slug) }}">{{ $region->name }}</a> <span class="badge">{{ $region->churches->count() }}</span></h2>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            Empty
        @endif
    </div>
</div>

@endsection
