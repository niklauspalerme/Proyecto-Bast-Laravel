<?php

namespace App\Http\Controllers;

//Importante
use App\food_user;
use Illuminate\Http\Request;

class Foods_usersController extends Controller
{
  public function agregar($id_user,$id_tabla){
    $food_user=new Food_user();
    $food_user->id_users=$id_user;
    $food_user->id_foods=$id_tabla;
    // dd($food_user);
    $food_user->save();
    return redirect('/foods');
  }
}
