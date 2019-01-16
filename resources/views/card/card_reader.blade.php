<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/bootstrap/css/bootstrap-responsive.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/datetimepicker/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('app/assets/css/media-queries.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{ URL::asset('app/assets/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ URL::asset('app/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ URL::asset('app/assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ URL::asset('app/assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed"
          href="{{ URL::asset('app/assets/ico/apple-touch-icon-57-precomposed.png')}}">


</head>
<body>



<div class="container">

@foreach($newData as $key => $value )


    <div class="row">
        <div class="col-md-4 text-center">
            <label for="numberplate">{{ $key }}:</label>
            <input name="{{ $key }}" type="text" class="form-control input-sm" id="{{ $key }}"
                   value="{{ $value }}" >
        </div>
    </div>


@endforeach

</div>

<footer>
    <div class="container">
        <div class="row">
            <div id="logoImages">

            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{URL:: asset('js/app.js') }}"></script>
<!-- Javascript -->
<script src="{{ URL::asset('app/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/scripts.js')}}"></script>
<script src="{{URL::asset('jquery/jquery-custom.js')}}"></script>
<!--[if lt IE 10]>
<script src="{{ URL::asset('app/assets/js/placeholder.js')}}"></script>
<![endif]-->

<!-- Datatimepicker -->
<script src="{{ URL::asset('app/assets/datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>
<!--End Datatimepicker -->

</body>




</html>