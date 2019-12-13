@extends('layouts.app')

@section('content')

<div class="wrap-jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron" style=" background-image: url('img/background_02.png');">
                  <div class="container">
                      <div class="row">
                          <h1 class="display-4 col-md-12 text-center morado">Lugares para visitar</h1>
                          <hr class="my-4 col-md-11" style="background-color: indigo;">
                          <p class="lead col-md-12 text-center" style="color:indigo;">Mira todos los lugares que puedes visitar en la hermosa ciudad porteña. Déjate sorprender por la magia de la Ciudad de Buenos Aires y explora cada uno de sus rincones. </p>
                      </div>
                  </div>
            </div> <!--jumbotron-->
          </div> <!--col-md-12-->

        </div><!--row -->

      </div> <!--container-->
  </div>

  <!--Parte de las cards -->
  <div class="container">
    <div class="row ">
      <div class="card-deck">

            @foreach ($places as $key => $value)
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card" style="margin-bottom:15px">
                      <img src="{{$value->image}}" class="card-img-top" alt="..." style="height:150px;">
                      <div class="card-body">
                        <h5 class="card-title">{{$value->name}}</h5>
                        <p class="card-text">{{$value->descrip1}}</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Horario: </b>{{$value->schedule}}</li>
                        <li class="list-group-item"><b>Dirección: </b>{{$value->address}}</li>
                        <li class="list-group-item"><b>Precio: </b>{{$value->price}}</li>
                      </ul>
              <div class="card-body">
                <a href="/places/details/{{$value->id}}" class="card-link">Mas Info +</a>
                <a href="/agregarPlaces/{{Auth::user()->id}}/{{$value->id}}" class="card-link">Agregar +</a>
              </div>
            </div>
          </div>
          @endforeach


       </div> <!--Fin card-deck -->
     </div> <!--Fin row -->
   </div> <!--Fin container -->


@endsection
