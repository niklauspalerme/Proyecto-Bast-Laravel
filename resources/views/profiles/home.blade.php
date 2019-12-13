@extends('layouts.app')

@section('content')

<div>

    <div class="container jumbotron bootstrap snippet" style="margin-top:100px;">

      <br><br>

      <!--1) Parte del Nombre-->
      <div class="row">
      		<div class="col-md-12" style="text-align:center; color:indigo;">
            <h1> {{ Auth::user()->name }}</h1>
          </div>
        	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="logo.png"></a></div> -->
      </div> <!--Parte del Nombre-->

      <!--2) Parte de la infomacion del usuario-->
      <div class="row">

        <!--2.1) Parte de la izquierda-->
    		<div class="col-sx-12 col-md-3 offset-md-2"><!--left col-->

          <!-- 2.1.1) Parte de la foto-->
          <!-- NOTA: Hay que hacerle un form para que guarde EL AVATAR-->
          <div class="text-center">
              <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" class="avatar-2 img-circle img-thumbnail" alt="avatar">
          </div>

          <hr>

          <!-- 2.1.2) Parte de las actividades-->
          <ul class="list-group">
            <li class="list-group-item text-muted" style=" text-align:center;">
              Actividad
            </li>
            <li class="list-group-item text-left ">
                  <i class="fas fa-handshake text-success"></i>
                  <span class="pull-right">Compartido</span> 125
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-thumbs-up text-primary"></i>
                  <span class="pull-left"><strong>Me Gusta</strong></span>
                  13
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-users text-danger"></i>
                  <span class="pull-left"><strong>Seguidores</strong></span>
                  78
                </li>
          </ul>

          <!-- 2.1.3) Parte de las redes sociales-->
          <div class="panel panel-default" style="margin-top: 15px; text-align:center; ">
            <div class="panel-heading">
                  Social Media
            </div>
            <div class="panel-body"  style="margin-top: 5px;">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                  <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>

        </div><!--Fin de parte izquierda-->

        <!--2.1) Parte de la derecha-->
        <div class="col-md-4 offset-md-1">

          <div class="tab-content">

            <div class="tab-pane active" id="home">

              <hr>

              <form class="form" action="/profiles" method="post" id="registrationForm">

                <!--Sin esto no funciona el formulario--> 
                @csrf

                  <input type="text" name='id' value="{{Auth::user()->id}}" style="display:none;">

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="first_name"><h4>Nombre</h4></label>
                      <input type="text" class="form-control input-indigo" name="name" id="first_name" placeholder="first name" title="enter your first name if any." value="{{Auth::user()->name}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="telephone"><h4>Phone</h4></label>
                      <input type="text" class="form-control input-indigo" name="telephone" id="telephone" placeholder="enter telephone" title="enter your telephone number if any."  value="{{ Auth::user()->telephone }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile"><h4>Mobile</h4></label>
                        <input type="text" class="form-control input-indigo" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="{{ Auth::user()->mobile }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                        <label for="email"><h4>Email</h4></label>
                        <input type="email" class="form-control input-indigo" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{ Auth::user()->email }}">
                    </div>
                  </div>

                  {{-- <div class="form-group">
                    <div class="col-xs-6">
                        <label for="password"><h4>Password</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="repassword"><h4>Verify</h4></label>
                      <input type="password" class="form-control" name="repassword" id="repassword" placeholder="repassword" title="enter your repassword.">
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <div class="col-xs-12" style="text-align: center;">
                      <button class="btn btn-lg btn-morado" type="submit"> Save</button>
                    </div>
                  </div>

                </form>

              <hr>

            </div><!--/tab-pane-->

          </div><!--/tab-content-->

        </div><!--/Parte de la derecha terminada--->

      </div> <!--row-->

      </div>

    </div> <!--Fin del container-->

  </div>

@endsection
