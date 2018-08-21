@extends('admin.admin_index')


@section('content')
<div class="container">
<form>
    {{ csrf_field() }}

    <div class="row">
        <div class="form-group">
            <div class="col-sm-2" >
                <label class="control-label">Tablice Vozila:</label>
            </div>
            <div class="col-sm-4">
                <input id="numberplate" class="form-control pull-left text-uppercase" type="text" name="numberplate" autocomplete="off">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <button  type="submit" data-action="confirm" class="btn btn-success btn-sm">Potvrdi</button>
        </div>
    </div>
</form>

</div>
@endsection