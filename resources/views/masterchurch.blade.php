<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Material Design fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

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

<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function () {
// This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
<script src="/js/app.js"></script>
{{-- <script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source: function (query, process) {
            return $.get(path, {query: query}, function (data) {
                return process(data);
            });
        }
    });
</script>
</body>
</html>
