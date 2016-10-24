@extends('masterchurch')
@section('title','Home')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(Auth::user()->verified == 0)
        <div class="alert alert-danger">
            <h3 class="text-center">Your account is not activated. Go to your email to activate your account.</h3>
        </div>
    @endif

    <div class="container">
        <!--first row-->
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">My church</h3>
                    </div>
                    <div class="panel-body">
                        @if(isset($church))
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $church->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>{{ $church->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>About</th>
                                        <td>{{ $church->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Region</th>
                                        <td>{{ $church->region->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>District</th>
                                        <td>{{ $church->district->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $church->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Added</th>
                                        <td>{{ $church->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated</th>
                                        <td>{{ $church->updated_at->diffForHumans() }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="jumbotron text-center">
                                <h2>You have no any church</h2>
                                <p>
                                    <a href="{{ url('new') }}">Create</a>
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact info</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        	<table class="table table-hover">
                        		<thead>
                        			<tr>
                        				<th></th>
                        			</tr>
                        		</thead>
                        		<tbody>
                        			<tr>
                        				<th>Phones</th>
                        				@if($church->phones->count() > 0)
											
                        				@else
                        					<td>No Phone <a href="#">Add</a></td>
                        				@endif
                        			</tr>
                        			<tr>
                        				<th>Email Addresses</th>
                        				@if($church->emails->count() > 0)
											
                        				@else
                        					<td>No Email <a href="#">Add</a></td>
                        				@endif
                        			</tr>                        			
                        		</tbody>
                        	</table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sessions</h3>
                    </div>
                    <div class="panel-body">
                        @if(isset($church->periods))
                            @if($church->periods->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        @foreach($church->periods as $period)
                                            <tr>
                                                <th>{{ $period->day->name }}</th>
                                                <td colspan="2"><a href="{{ url('#') }}">{{ $period->title }}</a></td>
                                            </tr>
                                            <tr colspan="3">
                                                <td>&nbsp;</td>
                                                <td>
                                                    <small>{{ \Carbon\Carbon::parse($period->start_time)->format('h:i a')  }}</small>
                                                </td>
                                                <td>
                                                    <small>{{ \Carbon\Carbon::parse($period->finish_time)->format('h:i a')  }}</small>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                No period
                            @endif
                        @else
                            Empty
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('periods/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Events</h3>
                    </div>
                    <div class="panel-body">
                        @if($church !== null)
                            @if($church->events->count() > 0)
                                <div class="table-responsive">
                                	<table class="table table-hover  table-bordered">
                                		<thead>
                                			<tr>
                                				<th>SN</th>
                                				<th>Title</th>
                                				<th>Description</th>
                                				<th>Date</th>
                                				<th>Created</th>
                                				<th>Updated</th>
                                				<th colspan="2"><i class="fa fa-cog"></i></th>
                                			</tr>
                                		</thead>
                                		<tbody>
                                			<?php $i = 1; ?>
                                			@foreach($church->events as $event)
												<tr>
													<td>{{ $i++ }}</td>
													<td><a href="#">{{ $event->title }}</a></td>
													<td>{{ str_limit($event->description, 30) }}</td>
													<td>{{ $event->time }}</td>
													<td>{{ $event->created_at->diffForHumans() }}</td>
													<td>{{ $event->updated_at->diffForHumans() }}</td>
													<td><a href="#"><i class="fa fa-edit"></i>Edit</a></td>
													<td><a href="#"><i class="fa fa-trash"></i>Delete</a></td>
												</tr>
                                			@endforeach
                                		</tbody>
                                	</table>
                                </div>
                            @else
                                No event, <a href="{{ url('events/create') }}">Create</a>
                            @endif
                        @else
                            No event, create a new church first then add a new event
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
