@extends('masterchurch')
@section('title','Home')

@section('content')
    <div class="jumbotron">
        <div class="container" style="background-color: #ffffff; padding: 5em;">
            <h1 class="text-center">Find a church near you</h1>
            <p>
                @include('partials.search-form')
            </p>
            <p class="text-center">
                There's a church for you
            </p>
            <p class="text-center">
                Church Finder helps millions of people on their journey of finding a new church.
            </p>
            <p class="text-center">
                <a href="{{ url('search') }}" class="btn btn-primary btn-lg">Find a church</a>
                <a href="{{ url('new') }}" class="btn btn-primary btn-lg">Add a church</a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="thumbnail">
                    <img data-src="#" alt="">
                    <div class="caption">
                        <h3>The Largest Christian Church Directory</h3>
                        <p>
                            Church Finder is the leading on-line platform connecting people with local Christian
                            churches. Church Finder is used by millions of people and includes over 280,000 Christian
                            churches.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="thumbnail">
                    <img data-src="#" alt="">
                    <div class="caption">
                        <h3>Church Growth with Church Finder</h3>
                        <p>
                            Pastors use Church Finder to connect with people in their area. Today 96% search on-line
                            first, and millions of people are finding a new church home use Church Finder.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h2>Looking for a Church?</h2>
                        <p>Start searching to find the church that's right for you.</p>
                        <p><a href="{{ url('search') }}" class="btn btn-info">SEARCH</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h2>Pastors &amp; Church Leaders</h2>
                        <p>
                            Church Finder can help you reach people in your city that are searching for a church.
                        </p>
                        <p>
                            <a href="{{ url('new') }}" class="btn btn-info">Add my church</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h2>Church Reviews</h2>
                        <p>
                            Write a Church Review and share on social media to help people find your church.
                        </p>
                        <p>
                            <a href="#" class="btn btn-info">Share my church</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
