<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//////////////////
//Pagina Principal
//////////////////

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@index')->name('home');


////////////
//Activities
////////////

//Mostrar todo lo que esta en la BD
Route::get('/activities', 'ActivityController@index');

//Mostrar el detalle del lugar
Route::get("/activities/details/{id}","ActivityController@details");

//Mostrar el detalle del lugar
Route::get("/activities/detailsAgenda/{id}","ActivityController@detailsAgenda");

//Agregar una actividad del formulario
Route::get('/agregarActividad/{id}/{idtabla}','Activities_usersController@agregar');


//////////////////
//Gastronomia-Food
//////////////////

//Mostrar todo de la BD
Route::get('/foods', 'FoodController@index');

//Mostrar el detalle de la comida
Route::get("/foods/details/{id}","FoodController@details");

//Mostrar el detalle del sitio agendado
Route::get("/foods/detailsAgenda/{id}","FoodController@detailsAgenda");

//Agrega food del formulario
Route::get('/agregarGastronomia/{id}/{idtabla}','Foods_usersController@agregar');

///////////////////
//////Hoteles//////
///////////////////

//Mostrar todo lo de la BD
Route::get('/hotels', 'HotelController@index');

//Mostrar detalle el hotel
Route::get("/hotels/details/{id}","HotelController@details");

//Mostrar detalles del sitio agendado
Route::get("/hotels/detailsAgenda/{id}","HotelController@detailsAgenda");

//Agregar hotels del formuluformulario
Route::get('/agregarHoteles/{id}/{idtabla}','Hotels_usersController@agregar');


//////////////////////////
/////////Lugares/////////
/////////////////////////

//Mostrar todo de la BD
Route::get('/places', 'PlaceController@index');

//Mostrar el detalle de un sitio
Route::get("/places/details/{id}","PlaceController@details");

//Mostrar detalles del sitio agendado
Route::get("/places/detailsAgenda/{id}","PlaceController@detailsAgenda");


//Agregar lugar del formulario
Route::get('/agregarPlaces/{id}/{idtabla}','Places_usersController@agregar');


//////////////////////////
///Profiles Controllers///
//////////////////////////

//Mostrart Perfil del Usuario
Route::get('/profiles', 'ProfileController@index');

//Actualizar los datos del Usuario
Route::post('/profiles','ProfileController@actualizar');

//Mostrar los sitios guardados por el usuario
Route::get('/profiles/myAgenda/{id}','ProfileController@misSitios');

//Eliminar Sitios Guardados
Route::get ('eliminarSitios/{idpivot}/{tabla}','ProfileController@eliminar');

////////////////////////
//////Formulario////////
////////////////////////

//Vista del formulario
Route::get('/formulario', function () {
    return view ('form');
});
//Logica para agregar lugares
Route::post('/formulario','ProfileController@formulario');

//////////////////////////
////////Otras Rutas/////// 
/////////////////////////

//Muestras las preguntas cargadas
Route::get('/questions', 'QuestionController@index');

Auth::routes();


