@extends('masterchurch')
@section('title', 'Edit ' . $email->address)

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <h2>Edit email address</h2>

            <div class="well">
                <form action="{{ url('emails/' . $email->id) }}" method="POST" class="form-horizontal" role="form">

                    {{ method_field('patch') }}

                    {{ csrf_field() }}

                    @include('emails._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
