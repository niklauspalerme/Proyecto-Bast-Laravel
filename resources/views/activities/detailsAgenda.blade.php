@extends('layouts.app')


@section('content')

  <div class="container container-signin">
  <div class="jumbotron">
    <div class="container">
      <!--Intro-->
      <div class="row justify-content-md-center">
        <h1 class="display-4 col-md-12 h1-registrate">{{ $activity->name}}</h1>
        <img src="{{ $activity->image}}" alt="Imagen del Lugar" class="img-thumbnail col-md-7">

        <hr class=" col-md-7 my-4">

        <div class="col-md-7">
          <p> <b>Horarios: </b> {{$activity->schedule}}</p>
        </div>

        <div class="col-md-7">
          <p> <b>Dirección: </b> {{$activity->address}}</p>
        </div>

        <div class="col-md-7">
          <p> <b>Precios: </b> {{$activity->price}} </p>
        </div>

        <div class="col-md-7">
          <p class="text-justify"> <b>Descripción: </b> {{$activity->descrip2}}</p>
        </div>

        <div class="col-md-7">
          <a  href="/profiles/myAgenda/{{Auth::user()->id}}" class="btn btn-md btn-morado">Regresar</a>
          <a href="#" class="btn btn-md btn-danger">Eliminar</a>
        </div>


      </div> <!-- fin del 2do row-->




    </div> <!--container-->

  </div> <!--jumbotron-->

</div>

@endsection
