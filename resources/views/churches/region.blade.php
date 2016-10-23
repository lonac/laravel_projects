@extends('masterchurch')
@section('title','Region')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Region</h2>
 
            <form action="{{ url('church/region') }}" method="POST" role="form">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Choose</label>
                    <select name="region" id="inputRegion" class="form-control">
                       @if($regions->count() > 0)
                             <option value="">-- Select One --</option>
                             @foreach($regions as $region)
                                 <option value="{{ $region->id }}">{{ $region->name }}</option>
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
