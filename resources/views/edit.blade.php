@extends('layouts.app')
@section('title','Cucharon Edit')
@section('content')

{!!Form::model($cucharons,['route'=>['cucharon.update',$cucharons],
     'method'=>'PUT','files'=>true])!!}

@include('form')
{{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
