@extends('admin.admin_index')


@section('content')

{{$id}}



    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <h3>
                    Edit voyila
                </h3>
            </div>
        </div>
    </div>


    <div class="container">


            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>

            <div class="borderColorMargin">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4>Informacije o vozila:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="numberplate">Broj tablica:</label>
                        <input name="numberplate" type="text" class="form-control" id="numberplate"
                               value=" " disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="make">Marka vozila:</label>
                        <input name="make" type="text" class="form-control" id="make" value=" "
                               disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="model">Model vozila:</label>
                        <input name="model" type="text" class="form-control" id="model" value=" "
                               disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="engine">Motor:</label>
                        <input name="engine" type="text" class="form-control" id="engine" value=" "
                               disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="year">Godina:</label>
                        <input name="year" type="text" class="form-control" id="year" value=" "
                               disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="mileage">Kilometri:</label>
                        <input name="mileage" type="text" class="form-control" id="mileage"
                               value="" disabled>
                    </div>
                </div>
            </div>

        <div class="borderColorMargin">
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h4>Informacije o vlasniku vozila:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="numberplate">Broj tablica:</label>
                    <input name="numberplate" type="text" class="form-control" id="numberplate"
                           value=" " disabled>
                </div>
                <div class="col-md-2">
                    <label for="make">Marka vozila:</label>
                    <input name="make" type="text" class="form-control" id="make" value=" "
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="model">Model vozila:</label>
                    <input name="model" type="text" class="form-control" id="model" value=" "
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="engine">Motor:</label>
                    <input name="engine" type="text" class="form-control" id="engine" value=" "
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="year">Godina:</label>
                    <input name="year" type="text" class="form-control" id="year" value=" "
                           disabled>
                </div>
                <div class="col-md-2">
                    <label for="mileage">Kilometri:</label>
                    <input name="mileage" type="text" class="form-control" id="mileage"
                           value="" disabled>
                </div>
            </div>
        </div>



            <div class="borderMargin">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4>Upis novih podataka:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="kilometer">Kilometri Novi:</label>
                        <input name="kilometer" type="number" class="form-control" id="kilometer" required>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label for="description">Opis kvara:</label>
                            <textarea
                                    rows="4"
                                    name="description"
                                    type="text"
                                    class="form-control"
                                    id="description"
                                    required>
                            </textarea>
                    </div>
                </div>


            </div>


    </div>

@endsection