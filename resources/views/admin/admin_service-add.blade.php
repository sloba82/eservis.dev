@extends('admin.admin_index')


@section('content')
    <div class="container">
        <form class="form-horizontal appointmentEdit serviceAdd" role="form" method="post" action="/service-addcar">
            {{ csrf_field() }}
            <input type="hidden" name="carID" value="{{$addCar['carID']}}">
            <input type="hidden" id="service_date" name="service_date" value="">

            <div class="row">
                <h3>
                    UNOS VOZILA U SERVIS
                </h3>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="numberplate">Broj tablica:</label>
                    <input name="numberplate" type="text" class="form-control" id="numberplate"
                           value="{{$addCar['numberplate']}}" disabled>
                </div>
                <div class="col-md-2">
                    <label for="make">Marka vozila:</label>
                    <input name="make" type="text" class="form-control" id="make" value="{{$addCar['make']}}" disabled>
                </div>
                <div class="col-md-2">
                    <label for="model">Model vozila:</label>
                    <input name="model" type="text" class="form-control" id="model" value="{{$addCar['model']}}"
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="engine">Motor:</label>
                    <input name="engine" type="text" class="form-control" id="engine" value="{{$addCar['engine']}}"
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="year">Godina:</label>
                    <input name="year" type="text" class="form-control" id="year" value="{{$addCar['year']}}" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="kilometer">Kilometraza:</label>
                    <input name="kilometer" type="text" class="form-control" id="kilometer">
                </div>
            </div>
            <div class="row">
                <label class="col-md-2 control-label" for="description">Opis kvara:</label>
                <textarea id="description" name="description" rows="2"></textarea>
            </div>

            <input type="file" name="serviceimages" multiple accept="image/*">

            <div class="row">
                <input type="submit" name="saveService" value="Sacuvaj" class="btn btn-success btn-sm">
                <input type="submit" name="saveServiceAddPhoto" value="Dodaj Fotografije"
                       class="btn btn-success btn-sm">
                <input type="reset" value="Resetuj" class="btn btn-success btn-sm">
            </div>
        </form>
    </div>



    add existing car to service
@endsection