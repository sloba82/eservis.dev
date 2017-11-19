
@extends('layouts.head')

@section('body')
            @yield('content')


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
<!-- Javascript -->
<script src="{{ URL::asset('app/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/wow.min.js')}}"></script>

<script src="{{ URL::asset('app/assets/js/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('app/assets/js/scripts.js')}}"></script>

<!--[if lt IE 10]>
<script src="{{ URL::asset('app/assets/js/placeholder.js')}}"></script>
<![endif]-->



    </body>
    </html>
@endsection