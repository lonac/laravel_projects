@extends('masterchurch')
@section('title','Search')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-uppercase lead">Looking for a local church? Search here</p>
                @include('partials.search-form')
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
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

                <div class="text-center">
                    {{ $churches->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
