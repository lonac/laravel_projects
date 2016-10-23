
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
            </div>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact info</h3>
                    </div>
                    <div class="panel-body">
                        No contact info
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Events</h3>
                    </div>
                    <div class="panel-body">
                        @if(isset($church))
                            Church exists
                        @else
                            No event
                        @endif
                    </div>
                </div>
                <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title">Sessions</h3>
                   </div>
                   <div class="panel-body">
                       @if(isset($church->periods))
                            @if($church->periods->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($church->periods as $period)
                                                <tr>
                                                    <td>{{ $period->day->name }}</td>
                                                    <td><a href="{{ url('#') }}">{{ $period->title }}</a></td>
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
@endsection
