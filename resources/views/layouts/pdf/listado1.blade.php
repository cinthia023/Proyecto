@extends("layouts.pdfinicio")
@section("content")

    <table class="table table-hover table-;striped">
        <thead>
            <tr>
                <th>numero</th>
                <th>compania</th>
                <th>caracteristicas</th>
                <th>fecha_ingreso</th>
                <th>fecha_entrega</th>
                <th>procedimiento</th>

            </tr>

        </thead>
        <tbody>
            @foreach($cucharons as $cucharon)
            <tr>
                <td>{{$cucharons->numero}}</td>
                <td>{{$cucharons->compania}}</td>
                <td>{{$cucharons->caracteristicas}}</td>
                <td>{{$cucharons->fecha_ingreso}}</td>
                <td>{{$cucharons->fecha_entrega}}</td>
                <td>{{$cucharons->procedimiento}}</td>
                <td class="text-right">{{$cucharons->entrada_cucharon}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
