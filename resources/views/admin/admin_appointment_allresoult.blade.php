@extends('admin/admin_appointment')


@section('table')

      <div class="container">


        <table id="table_id" class="display">
            <thead>
            <tr>
                <th>Zakazano</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Telefon</th>
                <th>Model vozila</th>
                <th>Komentar Servisa</th>
                <th>Detalji / Izmeni</th>
                <th>       </th>
            </tr>
            </thead>
            <tbody>

            @if (count($allapointments->all()))

                @foreach($allapointments->all() as $allapointment )
                    <tr class=
                          @if($allapointment->confirm)
                            "confirm"
                          @endif

                    >
                        <td>{{str_limit($allapointment->appoitment, $limit = 16, $end ='' ) }} </td>
                        <td>{{ $allapointment->name}} </td>
                        <td>{{ $allapointment->last_name}} </td>
                        <td>{{ $allapointment->phone}} </td>
                        <td>{{ $allapointment->veh_make}} </td>
                        <td>{{ str_limit( $allapointment->comment_admin, $limit = 20, $end = '...') }}</td>
                        <td><a href="{{ url('/appoitment/showSingle/'. $allapointment->id ) }}">
                             <button  type="button" class="btn btn-info btn-sm">Detalji / Izmeni</button>
                            </a></td>
                        <td><button
                                    id="{{$allapointment->id}}"
                                    type="button"
                                    class="btn btn-success btn-sm"
                                    @if($allapointment->confirm)
                                      disabled
                                    @endif
                                    >Potvrdi</button>
                        </td>
                    </tr>
                @endforeach

            @endif

            </tbody>
        </table>
      </div>

@endsection



