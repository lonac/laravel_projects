@extends('masterchurch')
@section('title','District')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>District</h2>
 
            <form action="{{ url('church/district') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Choose</label>
                    <select name="region" id="inputRegion" class="form-control">
                       @if($districts->count() > 0)
                             <option value="">-- Select One --</option>
                             @foreach($districts as $district)
                                 <option value="{{ $district->id }}">{{ $district->name }}</option>
                             @endforeach
                        @else
                             <option value="">Empty</option>
                        @endif
                    </select>
                </div>
            
                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
