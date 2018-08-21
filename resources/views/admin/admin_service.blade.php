@extends('admin.admin_index')


@section('content')


<div class="container">

        <div class="row">

            <div class="col text-center">
                <h2>Servis</h2>
                <p>counter to count up to a target number</p>
            </div>


        </div>
        <div class="row text-center">

            <a href="{{ url('/service/search') }}">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-car fa-2x"></i>
                    <h2 ></h2>
                    <p class="count-text ">Dodaj vozilo u sevis</p>

           </a>
         </div>





        <a href="{{ url('/service/search') }}">
            <h4>
            Dodaj vozilo u sevis
            </h4>
            <br>
            <i class="fa fa-car fa-5x" aria-hidden="true"></i>
        </a>

        <br>

        <a href="">
            <h4>
            sva vozila u servisu
            </h4>
        </a>




       </div>

</div>





@endsection