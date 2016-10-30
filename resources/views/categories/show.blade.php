@extends('masterchurch')
@section('title', $category->name)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>
                    <div class="panel-body">
                        @if($categories->count() > 0)
                            <div class="list-group">
                                @foreach($categories as $category)
                                    <a href="{{ url('categories/' . $category->slug) }}"
                                       class="list-group-item">{{ $category->name }} <span
                                                class="badge">{{ $category->churches->count() }}</span></a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center">
                                Empty
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if($churches->count() > 0)
                            @foreach($churches->chunk(2) as $churchesSet)
                                <div class="row">
                                    @foreach($churchesSet as $church)
                                        <div class="col-sm-4">
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
        </div>
    </div>

@endsection
