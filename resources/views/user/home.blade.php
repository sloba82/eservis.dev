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

<!--------- forma under construction ----------->



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well-block">
                <div class="well-title">
                    <h2>Questions? Book an Appointment</h2>
                </div>
                <form>
                    <!-- Form start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="date">Preferred Date</label>
                                <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-append date" id="datepicker"  data-date-format="dd-mm-yyyy">

                                    <input id="pic" class="span2" size="16" type="text" value="">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>

                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>




                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="appointmentfor">Appointment For</label>
                                <select id="appointmentfor" name="appointmentfor" class="form-control">
                                    <option value="Service#1">Service#1</option>
                                    <option value="Service#2">Service#2</option>
                                    <option value="Service#3">Service#3</option>
                                    <option value="Service#4">Service#4</option>
                                </select>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="well-block">
                <div class="well-title">
                    <h2>Why Appointment with Us</h2>
                </div>
                <div class="feature-block">
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">24/7 Hours Available</h4>
                        <div class="feature-content">
                            <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">Experienced Staff Available</h4>
                        <div class="feature-content">
                            <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">Low Price & Fees</h4>
                        <div class="feature-content">
                            <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!--------- end forma under construction ----------->

<div id="services">
    <div class="container-fluid" style="background-color: #f4f4f4; ">
        <img src="{{URL::asset('app/assets/img/body.jpg')}}">
    </div>
</div>


@endsection
