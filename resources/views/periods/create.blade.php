@extends('masterchurch')
@section('title', 'Add a new period')

@section('content')

<div class="container">
    <div class="row">
        <div class="well">
        <h2>Add a new period</h2>
        <form action="{{ url('periods') }}" method="POST" class="form-horizontal" role="form">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title" class="control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control" value="" required="required" title="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="start_time" class="control-label">From</label>
                    <div class="col-sm-10">
                        <input type="time" name="start_time" id="start_time" class="form-control" value="{{ \Carbon\Carbon::now() }}" required="required" title="">
                    </div>
                </div>  
                <div class="form-group">
                    <label for="finish_time" class="control-label">To</label>
                    <div class="col-sm-10">
                        <input type="time" name="finish_time" id="finish_time" class="form-control" value="{{ \Carbon\Carbon::now() }}" required="required" title="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="finish_time" class="control-label">Day</label>
                    <div class="col-sm-10">
                        <select name="day" id="day" class="form-control">
                            <option value="">-- Select One --</option>
                            @foreach($days as $day)
                                <option value="{{ $day->id }}">{{ $day->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>                                              
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" rows="3" required="required"></textarea>
                    </div>
                </div>              
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="published" value="1">
                        Published
                    </label>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>            
        </div>
    </div>
</div>

@endsection
