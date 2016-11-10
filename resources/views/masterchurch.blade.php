<html>
<head>
    <title> @yield('title') </title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
{{--<link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">--}}
{{--<link rel="stylesheet" type="text/css" href="/css/ripples.min.css">--}}

<!-- Custom CSS -->
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>

@include('shared.navbar')

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            @include('partials.notification')
        </div>
    </div>
</div>

@yield('content')

@include('shared.footer')

<script src="/jquery/dist/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{--<script src="/js/ripples.min.js"></script>--}}
{{--<script src="/js/material.min.js"></script>--}}
{{--<script>--}}
{{--$(document).ready(function() {--}}
{{--// This command is used to initialize some elements and make them work properly--}}
{{--$.material.init();--}}
{{--});--}}
{{--</script>--}}
<script src="/js/app.js"></script>
<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
</body>

</html>