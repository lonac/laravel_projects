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
                            @if($church !== null)
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Phones</th>
                                        <td>
                                            <ul>
                                                @foreach($church->phones as $phone)
                                                    <li>{{ $phone->number }}
                                                        <a href="{{ url('phones/' . $phone->id . '/edit') }}"
                                                           title="Edit">
                                                            <small><i class="material-icons">edit</i></small>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add</a>
                                            <div class="modal fade" id="modal-id">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Add a phone number</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ url('phones') }}" method="POST"
                                                                  class="form-inline" role="form">

                                                                {!! csrf_field() !!}

                                                                <div class="form-group">
                                                                    <label class="sr-only" for="number">Phone
                                                                        Number</label>
                                                                    <input type="number" name="number"
                                                                           class="form-control" id="number"
                                                                           placeholder="Phone Number" minlength="12"
                                                                           maxlength="12">

                                                                </div>


                                                                <button type="submit" class="btn btn-primary">Add
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email Addresses</th>
                                        <td>
                                            <ul>
                                                @foreach($church->emails as $email)
                                                    <li>{{ $email->address }}
                                                        <a href="{{ url('emails/' . $email->id . '/edit') }}"
                                                           title="Edit">
                                                            <small><i class="material-icons">edit</i></small>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" data-toggle="modal" href='#modal-email'>Add</a>
                                            <div class="modal fade" id="modal-email">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Add an email address</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ url('emails') }}" method="POST"
                                                                  class="form-inline" role="form">

                                                                {!! csrf_field() !!}

                                                                <div class="form-group">
                                                                    <label class="sr-only" for="email">Email
                                                                        Address</label>
                                                                    <input type="email" name="email"
                                                                           class="form-control" id="email"
                                                                           placeholder="Email Address">

                                                                </div>


                                                                <button type="submit" class="btn btn-primary">Add
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            @else
                                <h2 class="text-center">Add church first</h2>
                            @endif
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
                                No church session added
                            @endif
                        @else
                            Empty
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('periods/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Photos</h3>
                    </div>
                    <div class="panel-body">
                        @if($church !== null)
                            @if($church->photos->count()> 0)
                                <ul class="list-unstyled">
                                    @foreach($church->photos as $image)
                                        <li>
                                            <div class="thumbnail">
                                                <img src="{{ url('images/churches/' . $church->id . '/' . $image->url) }}"
                                                     class="img-responsive"
                                                     alt="{{ url('images/churches/' . $church->id . '/' . $image->url) }}">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                No photo
                            @endif
                        @else
                            Add church first
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ url('church-photos/new') }}"><i class="material-icons">add</i></a>
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
                                                <td>
                                                    <a href="{{ url('events/' . $event->id . '/' . $event->slug . '/edit') }}"><i
                                                                class="material-icons">edit</i></a></td>
                                                <td>
                                                    <a data-toggle="modal" href='#event{{ $event->id }}'><i
                                                                class="material-icons">delete</i></a>
                                                    <div class="modal fade" id="event{{ $event->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">
                                                                        Deleting {{ $event->title }}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure that you want to delete
                                                                    <strong>{{ $event->title }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ url('events/'.$event->id) }}"
                                                                          method="POST">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}

                                                                        <button type="button" class="btn btn-default"
                                                                                data-dismiss="modal"><i
                                                                                    class="material-icons">cancel</i>
                                                                        </button>
                                                                        <button type="submit"
                                                                                id="delete-event-{{ $event->id }}"
                                                                                class="btn btn-danger">
                                                                            <i class="material-icons">delete_forever</i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h2>No event</h2>
                            @endif
                        @else
                            No event, create a new church first then add a new event
                        @endif
                    </div>
                    <div class="panel-footer">
                        @if($church !== null)
                            <a href="{{ url('events/new') }}" class="btn btn-primary">Create</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
