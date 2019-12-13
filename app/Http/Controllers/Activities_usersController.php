<?php

namespace App\Http\Controllers;

//IMPORTANNT
use App\Activity_user;


use Illuminate\Http\Request;

class Activities_usersController extends Controller
{
    public function agregar($id_user,$id_tabla){

      $Activity_user=new Activity_user();
      $Activity_user->id_users=$id_user;
      $Activity_user->id_activities=$id_tabla;
      // dd($Activity_user);
      $Activity_user->save();
      return redirect('/activities');
    }
}
