@extends('masterchurch')
@section('title','Register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Register for free</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST">
                            {{ csrf_field() }}

                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach

                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">Name</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                           value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-lg-3 control-label">Email</label>
                                <div class="col-lg-7">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                           value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-7">
                                    <input type="password" class="form-control" placeholder="*****" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-lg-3 control-label">Confirm password</label>
                                <div class="col-lg-7">
                                    <input type="password" class="form-control" placeholder="*****"
                                           name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-4">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
