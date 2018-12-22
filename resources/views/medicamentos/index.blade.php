@extends('layouts.app')

@section('title','Farmacia')

@section('content')
  <div class="container">
    {!! Form::open(['route'=>'farmacia.index', 'method'=>'GET', 'class'=>'navbar-form navbar-left', 'role'=>'search'])!!}
      <div class="form-group">
        {!! Form::text('medicamento',null,['class'=>'form-control', 'placeholder'=>'medicamento']) !!}
      </div>
        <button type="submit" class="btn btn-default">Buscar</button>
    {!!Form::close() !!}
  </div>

  <div class="row">
    @foreach ($medicamentos as $medicamento)
        <div class="col-sm">
          <div class="card text-center" style="width: 18rem; margin-top: 70px">
            <img style="height: 100px; width: 100px; backgroup-color: #EFEFEF; margin: 20px;" class="card-img-top
            rounded-circle mx-auto d-block"src="images/{{$medicamento->avatar}}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$medicamento->medicamento}}</h5>
              <p class="card-text">{{$medicamento->descripcion}}</p>
              <p class="card-text">{{$medicamento->laboraorio}}</p>
              <p class="card-text">{{$medicamento->precio}}</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
    @endforeach
  </div>
@endsection
