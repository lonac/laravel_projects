@extends('masterchurch')
@section('title','Contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

            <h2>Contact Information</h2>

            <form action="{{ url('church/contact') }}" method="POST" role="form">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="number" name="phone" id="inputPhone" class="form-control" value="" min="{5"} max="" step="" required="required" title="Phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" value="" required="required" title="Email address">
                </div>

                <button type="submit" class="btn btn-primary">Next</button>
            </form>

        </div>
    </div>
</div>

@endsection
