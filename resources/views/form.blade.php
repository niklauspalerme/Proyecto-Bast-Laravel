@extends('layouts.app')

@section('content')

<div class="container container-signin">
    <div class="jumbotron">
      <div class="container">
          
        <!--Intro-->
        <div class="row row justify-content-md-center">
          <h1 class="display-4 col-md-12 h1-registrate">Formularios para agregar información</h1>
          <p class=" col-md-12 p-signin">Selecione el timpo de información que quiera agregar para la pagina de BAST </p>
          <hr class=" col-md-7 my-4">
        </div> <!--row-->

        <!--Form-->
        <div class="row">
          <form class="form-signin row justify-content-md-center" action="/formulario" method="POST" enctype= "multipart/form-data"  >

            <!--Sin esto no funciona el formulario--> 
            @csrf

        <!--Name-->
        <div class="input-group col-md-7">

          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-signature"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="name" name="name" placeholder="El nombre del sitio">
        </div>

        <!--address-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-map-marker-alt"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="address" name="address" placeholder="La ubicación del lugar">
        </div>

        <!--schedule-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Escriba el horario del lugar">
        </div>

        <!--price-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-dollar-sign"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="price" name="price" placeholder="Escriba un estimado en adelante del lugar">
        </div>

        <!--image-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="far fa-images"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="image" name="image" placeholder="Coloque el url de la imagen">
        </div>

        <!--descrip1-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-audio-description"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="descrip1" name="descrip1" placeholder="Una breve descripción del sitio">
        </div>

        <!--descrip2-->
        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text coso">
              <i class="fas fa-sticky-note"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="descrip2" name="descrip2" placeholder="Una descripción amplia del sitio">
        </div>

        <!--tabla-->
        <div class="input-group col-md-7">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Escoja el la sección</label>
          <select class="form-control" id="exampleFormControlSelect1" name="table">
            <option value="activities">Actividades</option>
            <option value="foods">Gastronomia</option>
            <option value="hotels">Hoteles</option>
            <option value="places">Lugares</option>
          </select>
        </div>
        </div>

      <div class="col-md-7">
        <button class="btn btn-lg btn-morado" type="submit">Guardar</button>
      </div>

</form>
        </div>
      </div> <!--container-->
    </div> <!--jumbotron-->

  </div>

@endsection