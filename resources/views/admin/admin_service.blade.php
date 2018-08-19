@extends('admin.admin_index')


@section('table')


    <div class="container">
        <h3>
            service
        </h3>

        <a href="{{ url('/service/search') }}">
            dodaj vozilo
        </a>

        <br>

        <a href="">
            sva vozila u servisu
        </a>



    </div>

@endsection