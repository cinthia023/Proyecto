@extends('layouts.app')
@section('title', 'Cucharon Create')
@section('content')
<form class="form-group" method="POST" action="/cucharon" enctype="multipart/form-data">
    @csrf
         <div clas='form-group'>
             <label for=''>numero</label>
             <input type='text'name="numero"class='form-control'>
             <label for=''>compañia</label>
             <input type='text'name="compania"class='form-control'>
             <label for=''>caracteristicas</label>
             <input type='text'name="caracteristicas"class='form-control'>
             <label for=''>fecha_ingreso</label>
             <input type='text'name="fecha_ingreso"class='form-control'>
             <label for=''>fecha_entrega</label>
             <input type='text'name="fecha_entrega"class='form-control'>
             <label for=''>procedimiento</label>
             <input type='text'name="procedimiento"class='form-control'>
             <label for=''>entrada_cucharon</label>
             <input type='file'name="entrada_cucharon"class='form-control'>
             <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
</form>
@endsection
