@extends('admin.admin_index')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-left">
                <h4>
                    Edit vozila
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="borderColorMargin col-md-6">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4>Informacije o vlasniku vozila:</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="name">Ime i prezime:</label>
                    <input name="name" type="text" class="form-control" id="name"
                           value="{{$carData->name}}, {{$carData->last_name}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="address">Adresa:</label>
                    <input name="address" type="text" class="form-control" id="address" value="{{$carData->address}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="city">Grad:</label>
                    <input name="city" type="text" class="form-control" id="city" value="{{$carData->city}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="phone">Kontakt tel.</label>
                    <input name="phone" type="text" class="form-control" id="phone" value="{{$carData->phone}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="year">Vlasnik registrovan:</label>
                    <input name="year" type="text" class="form-control" id="year" value="{{$carData->created_at}}"
                           disabled>
                </div>
            </div>
            <div class="borderColorMargin col-sm-6">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4>Informacije o vozila:</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="numberplate">Broj tablica:</label>
                    <input name="numberplate" type="text" class="form-control" id="numberplate"
                           value="{{$carData->numberplate}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="make">Marka vozila:</label>
                    <input name="make" type="text" class="form-control" id="make" value="{{$carData->make}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="model">Model vozila:</label>
                    <input name="model" type="text" class="form-control" id="model" value="{{$carData->model}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="engine">Motor:</label>
                    <input name="engine" type="text" class="form-control" id="engine" value="{{$carData->engine}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="year">Godina:</label>
                    <input name="year" type="text" class="form-control" id="year" value="{{$carData->year}}"
                           disabled>
                </div>
                <div class="col-md-6">
                    <label for="mileage">Kilometri:</label>
                    <input name="mileage" type="text" class="form-control" id="mileage"
                           value="{{$carData->mileage}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-left">
                <h4>Novi podaci:</h4>
            </div>
            <div class="borderMargin col-sm-12">
                <div class="col-sm-4">
                    <label for="kilometer">Kilometri Novi:</label>
                    <input name="kilometer" type="number" class="form-control" id="kilometer" required>
                </div>
                <div class="col-sm-8">
                    <label for="description">Opis kvara:</label>
                    <textarea
                            rows="2"
                            name="description"
                            class="form-control"
                            id="description"
                            required>
                    </textarea>
                </div>
            </div>
        </div>
    </div>
@endsection