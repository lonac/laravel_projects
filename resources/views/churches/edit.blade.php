@extends('masterchurch')
@section('title', 'Edit ' . $church->name)

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <h2>Edit {{ $church->name }}</h2>

            <div class="well">
                <form action="{{ url('churches/' . $church->id . '/' . $church->slug) }}" method="POST"
                      class="form-horizontal" role="form">

                    {{ method_field('patch') }}

                    {{ csrf_field() }}

                    @include('churches._form_name')
                    @include('churches._form_region')
                    @include('churches._form_district')
                    @include('churches._form_category')
                    @include('churches._form_about')
                    @include('churches._form_address')
                    @include('churches._form_other-name')

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
