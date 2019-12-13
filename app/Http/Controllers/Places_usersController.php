<?php

namespace App\Http\Controllers;

use App\Place_user;
use Illuminate\Http\Request;

class Places_usersController extends Controller
{
  public function agregar($id_user,$id_tabla){
    $place_user=new Place_user();
    $place_user->id_users=$id_user;
    $place_user->id_places=$id_tabla;
    //dd($place_user);
    $place_user->save();
    return redirect('/places');
  }
}
