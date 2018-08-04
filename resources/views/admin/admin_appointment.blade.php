<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
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


    <!--DATA TABLE -->
    <link rel="stylesheet" href="{{ URL::asset('app/assets/DataTables/datatables.css')}}">


    <script src="{{ URL::asset('app/assets/DataTables/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable(
                    {
                        responsive: true,
                        rowGroup: {
                            dataSrc: 'group'
                        }

                    }

            );


        } );

    </script>


</head>
<body>

<nav class="navbar navbar-default navbar-static-top navbaradmin">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a href="#" class="navbar-left">
                <img src="{{ URL::asset('app/assets/img/logo2.png')}}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="top-navbar-1">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href={{ url('/appoitment/showAll') }}>Sva Zakazivanja</a></li>
                <li><a href="#portfolio">Work</a></li>
                <li><a href="#testimonials">Clients</a></li>
                <li><a href="#footer">Contact</a></li>

                @if (Route::has('login'))

                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif

                @endif


            </ul>
        </div>
    </div>
</nav>
@yield('table')

</body>
</html>