@extends('masterchurch')
@section('title', 'Create a new events')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <h2>Create a new event</h2>
            <div class="well">

                @include('errors.list')

                <form action="{{ url('events') }}" method="POST" class="form-horizontal" role="form">

                        {{ csrf_field() }}

                		<div class="form-group">
                			<label for="title" class="col-sm-2 control-label">Event Title</label>
                			<div class="col-sm-10">
                				<input type="text" name="title" id="title" class="form-control" value="" required="required" title="">
                			</div>
                		</div>    
                		<div class="form-group">
                			<label for="description" class="col-sm-2 control-label">Event Description</label>
                			<div class="col-sm-10">
                				<textarea name="description" id="description" class="form-control" rows="5" required="required"></textarea>
                			</div>
                		</div>   
                		<div class="form-group">
                			<label for="description" class="col-sm-2 control-label">Event time</label>
                			<div class="col-sm-10">
                				<input type="date" name="time" id="time" class="form-control" value="" required="required" title="">
                			</div>
                		</div>                 		              		            
                		<div class="form-group">
                			<div class="col-sm-10 col-sm-offset-2">
                				<button type="submit" class="btn btn-primary">Submit</button>
                			</div>
                		</div>
                </form>
            </div>
        </div>
    </div>
@endsection
