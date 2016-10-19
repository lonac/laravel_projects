@extends('masterchurch')
@section('title','Church details')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                 {!! csrf_field() !!}

                <fieldset>
                    <legend><b><font color="red">Add more details about your church!</font></legend></b>
                    <div class="form-group">
                        <label for="churchname" class="col-lg-3 control-label">Church Name</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="churchname" placeholder="Church Name" name="churchname" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="churchname2" class="col-lg-3 control-label">Other Name</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="lname" placeholder="Second Name" name="Othername" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-lg-3 control-label">Category</label>
                        <div class="col-lg-5">
                        <select class="form-control">
                            <option>RC</option>
                            <option>Pentecoste</option>
                            <option>..</option>
                            <option>others</option>
                            <option>non</option>
                        </select>
                        </div>
                     </div>

                    <div class="form-group">
                        <label for="name" class="col-lg-3 control-label">Phone Number</label>
                        <div class="col-lg-7">
                            <input type="number" class="form-control" id="name" placeholder="Church phone number" name="churchnumber" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="churchAddress" class="col-lg-3 control-label">Church Address</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" id="address" placeholder="Church address" name="churchnumber" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">Church Email</label>
                        <div class="col-lg-7">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <legend><b>Church Location:</b></legend>
                    <div class="form-group">
                        <label for="country" class="col-lg-3 control-label">Country</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" placeholder="Country" name="country">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-lg-3 control-label">City</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" placeholder="church city" name="city">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="checkbox" align="center">
                            <label>
                                <input type="checkbox" value="">Allow google to capture location:
                            </label>
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