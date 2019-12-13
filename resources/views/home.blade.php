@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main class="mt-5">
    <div class="container">

      <!-- 2.1) Contenido Intro -->
      <section class="text-center" style="margin-top:100px;">

        <h2 class="mb-5 font-weight-bold">Nuevos lugares, nuevas historias</h2>

        <div class="row d-flex justify-content-center mb-4">
          <div class="col-md-8">

            <p class="grey-text" style="margin-bottom: 59px;">Son los mejores lugares para salir y divertirse. Ya sea en San Telmo, Palermo o Puerto Madero hay numerosas opciones</p>


          </div>

        </div> <!--Grid row-->



        <!--Grid row-->
        <div class="row">

          <div class="col-md-4 mb-5">
            <i class="fa fa-camera-retro fa-4x indigo-text"></i>
            <h4 class="my-4 font-weight-bold">Experiencia</h4>
            <p class="grey-text">En la cuna de unos de los bailes más sensuales del mundo, tomar una clase de tango es una excelente oportunidad para conocer una gran costumbre porteña </p>
          </div> <!--Grid column-->

          <div class="col-md-4 mb-1">
            <i class="fa fa-heart fa-4x indigo-text"></i>
            <h4 class="my-4 font-weight-bold">Felicidad</h4>
            <p class="grey-text">La ciudad siempre tiene opciones para ofrecer. En estas salidas se puede conocer gente y conversar sobre los mismos intereses y gustos</p>
          </div><!--Grid column-->

          <div class="col-md-4 mb-1">
            <i class="fa fa-bicycle fa-4x indigo-text"></i>
            <h4 class="my-4 font-weight-bold">Aventura</h4>
            <p class="grey-text">En estos lugares podés divertirte y vincularte con otras personas. ¿Te gusta jugar al fútbol, andar en rollers o prácticar algún deporte extremo? Buenos Aires ofrece todo esto y mucho más!</p>
          </div><!--Grid column-->

        </div> <!--Grid row-->

      </section> <!-- 2.1) FIn de Contenido Intro -->


      <hr class="my-5">

        <!--Section: Examples-->
        <section id="examples" class="text-center">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">Categorías</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-3 col-md-3 mb-3">

                    <div class="">
                        <img src="img/Lugares.png" class="img-lugares" alt="">

                    </div>

                    <h4 class="my-4 font-weight-bold">Lugares</h4>
                    <p class="grey-text"> Conocé los mejores lugares encantadores de nuestra ciudad, acojedores y divertidos.</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-3 mb-3">

                    <div class="">
                        <img src="img/Actividades.png" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Actividades</h4>
                    <p class="grey-text">Tenemos un cronograma de actividades aplciados para cada persona en base a lo que más te interece conocer de esta bella ciudad</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-3 mb-3">

                    <div class="">
                        <img src="img/gastronomia.png" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Gastronomia</h4>
                    <p class="grey-text">Las comidas mas ricas te estan esperando, no pierdas la oportunidad de deleitarte con estos sabores</p>

                </div>
                <div class="col-lg-3 col-md-3 mb-3">

                    <div class="">
                        <img src="img/hoteles.png" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h4 class="my-4 font-weight-bold">Hoteles</h4>
                    <p class="grey-text">Entre otros tenemos hoteles de 5, 4 y 3 estrellas ansiosos por conocerte, ingresa aquí y veras que descuentos tenemos para tí</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Examples-->

        <hr class="my-5">

        <!--Section: Gallery-->
        <section id="gallery">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Momentos inolvidables</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://www.paraviajantes.com/wp-content/uploads/2014/10/buenos-aires-city-wallpaper-hd-103.jpg"
                                    alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://1.bp.blogspot.com/-JS37nfdBZg8/VZmWDlbY_sI/AAAAAAABGNY/atjEZ-I-srQ/s1600/BUENOS%2BAIRES%2B2.jpg"
                                    alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://www.argentinaportal.com/wp-content/uploads/2019/04/bsas.jpg"
                                    alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <!--Excerpt-->
                    <a href="" class="teal-text">
                    <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Vistas incríbles </strong></h6>
                    </a>
                    <h4 class="mb-3"><strong>Fotografías tomadas por nuestros clientes</strong></h4>
                    <p>Buenos Aires, ciudad hermosa...es una bellísima ciudad que está llena de agradables rinconcitos para tomar café, ver bailar, recorrer el antiguo puerto, los jardines de las Bellas Artes y el famoso caminito sensacional. Las grandes avenidas muy ad hoc con París te hacen sentir bien, los precios cómodos.</p>

                    <p>destaca por su cantidad de espacios verdes. Casi siempre bien cuidados. Es una ciudad ideal para conocer caminando. Las mejores zonas para hacerlo son Recoleta, Palermo, La Boca, San Telmo... entre otras. Vale la pena conocer los parques y dedicarles tiempo.</p>
                    <p>por <a><strong>Matias Clark</strong></a>, 26/06/2019</p>
                    <a class="btn button-login btn-md" href="lugares.php">Ver mas</a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Gallery-->
</main>
@endsection
