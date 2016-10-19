@extends('masterchurch')
@section('title', 'Districts')

@section('content')

<div class="container">
    <div class="row">
        @if($districts->count() > 0)
            @foreach($districts->chunk(3) as $districtsSet)
                <div class="row">
                    @foreach($districtsSet as $district)
                        <div class="col-xs-12 col-sm-4">
                            <h2><a href="{{ url('districts/' . $district->slug) }}">{{ $district->name }}</a> <span class="badge">{{ $district->churches->count() }}</span></h2>
                            <h3><small><a href="{{ url('regions/' . $district->region->slug) }}">{{ $district->region->name }}</a></small></h3>
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
