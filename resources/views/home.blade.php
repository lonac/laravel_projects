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

            <!--third column-->
            <div class="col-md-4 col-lg-4">
                <!--firsr row-->
                <div class="row">
                all links of the page to other websites like social network will be placed in here
                </div>
            </div>

        </div>

        <!--Second row-->
        <div class="row-banner">

            <!--first column-->
            <div class="col-md-2 col-lg-3" style="background-color: #a7cece;">
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
