@extends('admin.admin_index')


@section('content')



    <div class="container">

        <form id="service-add" class="form-horizontal" role="form" method="post"
              action="/service/search">
        {{ csrf_field() }}

            <div class="form-group">
                <label class="col-lg-3 pull-left control-label">Tablice Vozila:</label>

                <div class="col-lg-9">
                    <input id="autocomplete" title="type" class="ui-autocomplete-input">
                </div>
            </div>

            <button id="" type="button" data-action="" class="btn btn-success btn-sm">Unesi Vozilo
            </button>

        </form>

    </div>

@endsection