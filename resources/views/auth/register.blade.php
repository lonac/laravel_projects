@extends('masterchurch')
@section('title','Register')

@section('content')
    <div class="container col-md-5 col-md-offset-3">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                 {!! csrf_field() !!}

                <fieldset>
                    <legend><b><font color="red">Register for Free!</font></legend>
                    Personal details</b>
                    <div class="form-group">
                        <label for="name" class="col-lg-3 control-label">Name</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-7">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
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
                            <input type="password" class="form-control" placeholder="*****" name="password_confirmation">
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
@endsection