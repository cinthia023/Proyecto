@extends('layouts.app')
@endsection('title','cucharon')
@section('content')
           <img style=height: 100px; width: 100px;
           background-color: #EFEFEF; margin: 20px;
           " class="card-img-top rounded-circle mx-auto d-block"
           src="../images/{{$cucharons->entrada_cucharon}}" alt="">
           <h5 class="text-center">{{$cucharons->numero}}</h5>
           <h5 class="text-center">{{$cucharons->compania}}</h5>
           <h5 class="text-center">{{$cucharons->caracteristicas}}</h5>
           <h5 class="text-center">{{$cucharons->procedimiento}}</h5>
           <h5 class="text-center">{{$cucharons->fecha_ingreso}}</h5>
           <h5 class="text-center">{{$cucharons->fecha_entrega}}</h5>
           <div class="text-center">
            <a href="/delete/{{$cucharons->id}}/edit"class="btn btn-secondary">
                Editar...</a>
            <a href="/cucharon/{{$cucharons->id}}/edit"class="btn btn-secondary">
                Editar...</a>
            <a href="{{route('listado1.pdf')}}"class="btn btn-sm btn-secondary">
                Descargar cucharones en pdf
            </a>
        </div>
