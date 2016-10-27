@extends('masterchurch')
@section('title','Home')

@section('content')

    <div class="container">
        <!--first row-->
        <div class="row banner">

            <!--first column-->
            <div class="col-md-4 col-lg-4">
                 <div class="text-center">
                    <img src="http://st-teresa.org/media/1/image009.jpg" width="302" height="391" alt="">
                </div>
            </div>

            <!--second column-->
            <div class="col-md-4 col-lg-4">
                @include('searchnav')
            </div>

            <!--sidebar here!-->
            <div class="col-md-7 col-lg-4">
                @include('shared.sidebar')
            </div>

        </div>

        <!--Second row-->
        <div class="row-banner">

            <!--first column-->
            <div class="col-md-2 col-lg-3">
            first column
            </div>

            <!--second column-->
            <div class="col-md-2 col-lg-3">
            second column
            </div>

            <!--third column-->
            <div class="col-md-2 col-lg-3">
            third column
            </div>

            <!--fourth column-->
            <div class="col-md-2 col-lg-3">
            fourth column
            </div>

        </div>

    </div>
@endsection
