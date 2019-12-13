@extends('layouts.app')

@section('content')

<div class="wrap-jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron" style="background-color:#3f51b5;">
                  <div class="container">
                      <div class="row">
                          <h1 class="display-4 col-md-12 text-center" style="color:white;">Mi Agenda</h1>
                          <hr class="my-4 col-md-11" style="background-color: white;">
                          <p class="lead col-md-12 text-center" style="color:white;">Mira todos los lugares que guardaste en tu perfil , para que así puedas organizar mejor tus visitas y tener un control de los sitios que quieres ir  </p>
                      </div>
                  </div>
            </div> <!-- end jumbotron-->
          </div> <!-- end col-md-12-->

        </div><!-- end row -->

      </div> <!-- end container-->
  </div>

  <!--Parte de las cards -->
  <div class="container">
    <div class="row ">
      <div class="card-deck">

            
            <!--Lugares-->
            @if ( $places->isNotEmpty() )
            <h1 class="display-4 col-md-12 text-center morado" style="margin-bottom: 50px;">Tus Lugares</h1>
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
                <a href="/places/detailsAgenda/{{$value->id}}" class="card-link">Mas Info +</a>
                <a href="/eliminarSitios/{{$value->idpivot}}/lugares" class="card-link">Eliminar -</a>
              </div>
            </div>
          </div>
          @endforeach
          @endif

          <!--Hoteles-->
          @if ($hotels->isNotEmpty() )
          <h1 class="display-4 col-md-12 text-center morado" style="margin-bottom: 50px; margin-top: 50px;">Tus Hoteles</h1>
          @foreach ($hotels as $key => $value)

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
              <a href="/hotels/detailsAgenda/{{$value->id}}" class="card-link">Mas Info +</a>
              <a href="/eliminarSitios/{{$value->idpivot}}/hoteles" class="card-link">Eliminar -</a>
            </div>
          </div>
        </div>
        @endforeach
        @endif

        <!--Comida-->
        @if ($foods->isNotEmpty())
        <h1 class="display-4 col-md-12 text-center morado" style="margin-bottom: 50px; margin-top: 50px;">Tus Comidas</h1>
        @foreach ($foods as $key => $value)

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
            <a href="/foods/detailsAgenda/{{$value->id}}" class="card-link">Mas Info +</a>
            <a href="/eliminarSitios/{{$value->idpivot}}/comidas" class="card-link">Eliminar -</a>
          </div>
        </div>
      </div>
      @endforeach
      @endif

      <!--Actividades-->
      @if ($activities->isNotEmpty())
        <h1 class="display-4 col-md-12 text-center morado" style="margin-bottom: 50px; margin-top: 50px;">Tus Actividades </h1>
        @foreach ($activities as $key => $value)

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
            <a href="/activities/detailsAgenda/{{$value->id}}" class="card-link">Mas Info +</a>
            <a href="/eliminarSitios/{{$value->idpivot}}/actividades" class="card-link">Eliminar - {{$value->idpivot}}</a>
          </div>
        </div>
      </div>
      @endforeach
      @endif


       </div> <!--Fin card-deck -->
     </div> <!--Fin row -->
   </div> <!--Fin container -->


@endsection
