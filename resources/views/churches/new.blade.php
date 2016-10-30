@extends('masterchurch')
@section('title','Create a new church')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">

                <h2>Add your church</h2>

                <form action="{{ url('new') }}" method="POST" role="form" class="form-horizontal">

                    {{ csrf_field() }}

                    @include('churches._form_name')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
