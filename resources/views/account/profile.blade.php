@extends('masterchurch')
@section('title', 'Account Profile')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="well">
                    <img src="#" class="img-responsive img-rounded" alt="Image">
                </div>
                <div class="well">
                    <h3>Joined</h3>
                    <p>
                        {{ Auth::user()->created_at->diffForHumans() }}
                    </p>
                    <h3>Last Login</h3>
                    <p>
                        {{ Auth::user()->updated_at->diffForHumans() }}
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-sm-9">
                <div class="well">
                    <h2>Account Settings</h2>
                    @include('errors.list')
                    <form action="{{ url('storeContacts') }}" method="POST" class="form-horizontal" role="form">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control"
                                       value="{{ Auth::user()->name }}">
                                @if($errors->has('name'))
                                    <p>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control"
                                       value="{{ Auth::user()->email }}">
                                @if($errors->has('email'))
                                    <p>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Phone number</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" id="phone" class="form-control"
                                       value="{{ Auth::user()->phone }}">
                                @if($errors->has('phone'))
                                    <p>
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                    <h3>Social Media</h3>
                    <form action="{{ url('user/storeSocial') }}" method="POST" class="form-horizontal" role="form">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="facebook" class="col-sm-2 control-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" name="facebook" id="facebook" class="form-control"
                                       value="{{ Auth::user()->facebook }}">
                                @if($errors->has('facebook'))
                                    <p>
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="twitter" class="col-sm-2 control-label">Twitter</label>
                            <div class="col-sm-10">
                                <input type="text" name="twitter" id="twitter" class="form-control"
                                       value="{{ Auth::user()->twitter }}">
                                @if($errors->has('twitter'))
                                    <p>
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="blog" class="col-sm-2 control-label">Blog</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog" id="blog" class="form-control"
                                       value="{{ Auth::user()->blog }}">
                                @if($errors->has('blog'))
                                    <p>
                                        <strong>{{ $errors->first('blog') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="well">
                    <h2>Church</h2>
                    @if(Auth::user()->church !== null)
                        <h3>{{ Auth::user()->church->name }}</h3>
                    @else
                        <h3 class="text-center">You have not added your church. <a href="{{ url('churches/create') }}">Add</a>
                        </h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
