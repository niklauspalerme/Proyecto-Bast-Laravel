<?php

namespace App\Http\Controllers;

use App\Hotel_user;
use Illuminate\Http\Request;

class Hotels_usersController extends Controller
{
  public function agregar($id_user,$id_tabla){
    $hotel_user=new Hotel_user();
    $hotel_user->id_users=$id_user;
    $hotel_user->id_hotels=$id_tabla;
    //dd($hotel_user);
    $hotel_user->save();
    return redirect('/hotels');
  }

}
