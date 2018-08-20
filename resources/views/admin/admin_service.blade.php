@extends('admin.admin_index')


@section('content')


    <div class="container">
        <h3>
            service
        </h3>

        <a href="{{ url('/service/search') }}">
            Dodaj vozilo u sevis <br>
            <i class="fa fa-car fa-5x" aria-hidden="true"></i>
        </a>

        <br>

        <a href="">
            sva vozila u servisu
        </a>



    </div>

@endsection