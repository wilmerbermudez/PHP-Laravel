@extends('layouts.app')

@section('title','Registro Medicamentos')

@section('content')
  <form class="form-group" action="/medicamentos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Medicamentos</label>
      <input type="text"  name="medicamento" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Descripcion</label>
      <input type="text"  name="descripcion" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Laboratorio</label>
      <input type="text"  name="laboratorio" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Precio</label>
      <input type="integer"  name="precio" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Unidades</label>
      <input type="text"  name="unidades" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Formula</label>
      <input type="boolean"  name="formula" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Avatar</label>
      <input type="File"  name="avatar">
    </div>
    <button type="submit"class="btn btn-primary">Registrar</button>
  </form>
@endsection
