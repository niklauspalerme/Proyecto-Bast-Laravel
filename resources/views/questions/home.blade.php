@extends('layouts.app')

@section('content')

<div class="wrap-jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron" style=" background-image: url('img/carrousel1.jpg');">
                  <div class="container">
                      <div class="row">
                          <h1 class="display-4 col-md-12 text-center morado">Preguntas frecuentes</h1>
                          <hr class="my-4 col-md-11" style="background-color: indigo;">
                          <p class="lead col-md-12 text-center" style="color:indigo;">Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes. </p>
                      </div>
                  </div>
            </div> <!--jumbotron-->
          </div> <!--col-md-12-->

        </div><!--row -->

      </div> <!--container-->
  </div>

  <!-- Parte 3 Preguntas-->
  <div class="wrap-preguntas">
    <div class="container">
      <div class="row">
           
         @foreach ($questions as $key => $value)
          @if( $value->id %2==0)
        <div class="media">
          <img src="{{$value->image}}" class="mr-3 col-12 col-md-2 img-preguntas" alt="Numero" style="height:160px;">
          <div class="media-body col-md-10 col-12">
            <h5 class="mt-0 morado">{{$value->name}}</h5>
            {{$value->answer}}
          </div>
        </div>
        <br><br>
        @else
          <div class="media">
            <div class="media-body col-sm-12 col-md-10 wrap-contenido">
              <h5 class="mt-0 azul-footer">{{$value->name}}</h5>
              {{$value->answer}}
            </div>
            <img src="{{$value->image}}" class="mr-3 col-sm-12 col-md-2 img-preguntas" alt="Numero" style="height:160px;">
          </div>
          <br><br>
        @endif
        @endforeach
      </div>
    </div>

  </div>


@endsection