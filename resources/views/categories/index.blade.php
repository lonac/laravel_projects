@extends('masterchurch')
@section('title', 'Categories')

@section('content')

<div class="container">
    <div class="row">
        @if($categories->count() > 0)
            @foreach($categories->chunk(3) as $categoriesSet)
                <div class="row">
                    @foreach($categoriesSet as $category)
                        <div class="col-xs-12 col-sm-4">
                            <h2><a href="{{ url('categories/' . $category->slug) }}">{{ $category->name }}</a> <span class="badge">{{ $category->churches->count() }}</span></h2>
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
