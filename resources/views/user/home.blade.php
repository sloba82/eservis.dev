@extends('layouts.app')


@section('content')

<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <div class="logo wow fadeInDown">
                        <a href="index.html"></a>
                    </div>
                    <h1 class="wow fadeInLeftBig">Auto servis Ljuba ms</h1>

                    <div class="description wow fadeInLeftBig">
                        <p>
                            ovde neki tekst
                        </p>
                    </div>
                    <div class="top-big-link wow fadeInUp">
                        <a class="btn btn-link-1" href="#">Zakaži servis</a>
                        <a class="btn btn-link-2" href="#services">Proveri status vozila</a>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
<div id="services">
    <div class="container-fluid" style="background-color: #f4f4f4; ">
        <img src="{{URL::asset('app/assets/img/body.jpg')}}">
    </div>
</div>


<!-- Footer -->
<footer>
    <div class="container-fluid">
        <div class="row">

            logo
            <div class="col-sm-12 footer-bottom">
                <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
    </div>
</footer>
@endsection
