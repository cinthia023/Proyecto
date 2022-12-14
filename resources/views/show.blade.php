@extends("layouts.app")
@section('title', 'cucharons')
@section('content')
@csrf
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
class="card-img-top rounded-circle mx-auto d-block"
src="/images/{{$cucharons->entrada_cucharon}}" alt="">
<h5 class="text-center">{{$cucharons->name}}</h5>
<div class="text-center">
    <a href="/delete/{{$cucharons->id}}" class="btn btn-primary">Delete</a>
    <a href="/cucharons/{{$cucharons->id}}/edit" class="btn btn-secondary">Editar</a>
   <a href="{{route('listado1.pdf')}}"class="btn btn-sm btn-secondary">
                Descargar cucharones en pd

  </div>
@endsection
