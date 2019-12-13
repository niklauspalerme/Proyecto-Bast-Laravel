<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Place_user;
use App\Hotel_user;
use App\Food_user;
use App\Activity_user;
use App\Auth;
use\App\Food;
use \App\Activity;
use\App\Hotel;
use\App\Place;

class profileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userProfile = User::paginate(6);
        return view('profiles.home')->with('user',$userProfile);
    }

    public function misSitios($id){

      $whatever=Place_user::where('id_users','=',$id)
      ->leftjoin('places','places.id','=','places_users.id_places')
      ->select('places_users.id as idpivot','places.id','places.name','places.image','places.schedule',
      'places.price','places.schedule','places.descrip1','places.descrip2')
      ->get();
      //dd($whatever);

      $whatever2=Hotel_user::where('id_users','=',$id)
      ->leftjoin('hotels','hotels.id','=','hotels_users.id_hotels')
      ->select('hotels_users.id as idpivot','hotels.id','hotels.name','hotels.image','hotels.schedule',
      'hotels.price','hotels.schedule','hotels.descrip1','hotels.descrip2')
      ->get();
      //dd($whatever2);


      $whatever3=Food_user::where('id_users','=',$id)
      ->leftjoin('foods','foods.id','=','foods_users.id_foods')
      ->select('foods_users.id as idpivot','foods.id','foods.name','foods.image','foods.schedule',
      'foods.price','foods.schedule','foods.descrip1','foods.descrip2')
      ->get();
      //dd($whatever3);


      $whatever4=Activity_user::where('id_users','=',$id)
      ->leftjoin('activities','activities.id','=','activities_users.id_activities')
      ->select('activities_users.id as idpivot','activities.id','activities.name','activities.image','activities.schedule',
      'activities.price','activities.schedule','activities.descrip1','activities.descrip2')
      ->get();
      //dd($whatever4);

      return view('profiles.myAgenda')
      ->with('places',$whatever)
      ->with('hotels',$whatever2)
      ->with('foods', $whatever3)
      ->with('activities', $whatever4);

    }

    public function eliminar($id,$tabla){

        //dd($tabla);

        if($tabla == "comidas"){
        $food=Food_user::find($id);
        //dd($food);
        $food->delete(); }

        if($tabla == "lugares"){
        $lugares=Place_user::find($id);
        //dd($lugares);
        $lugares->delete(); }
    
        if($tabla == "hoteles"){
        $hoteles=Hotel_user::find($id);
        //dd($hoteles);
        $hoteles->delete(); }

        if($tabla == "actividades"){
        $actividades=Activity_user::find($id);
        //dd($hoteles);
        $actividades->delete(); }


        return back();
  
    }

    public function formulario(Request $resq){

        //Falta Validación

        //Foods
        if($resq["table"]=='foods'){
            $food=new Food();
            $food->name=$resq["name"];
            $food->address=$resq["address"];
            $food->price=$resq["price"];
            $food->schedule=$resq["schedule"];
            $food->descrip1=$resq["descrip1"];
            $food->descrip2=$resq["descrip2"];
            $food->image=$resq["image"];
            //dd($food);
            $food->save();
        }

        //Activities
        if($resq["table"]=='activities'){
            $activity=new Activity();
            $activity->name=$resq["name"];
            $activity->address=$resq["address"];
            $activity->price=$resq["price"];
            $activity->schedule=$resq["schedule"];
            $activity->descrip1=$resq["descrip1"];
            $activity->descrip2=$resq["descrip2"];
            $activity->image=$resq["image"];
            //dd($activity);
            $activity->save();
        }

        //Hotels
        if($resq["table"]=='hotels'){
            $hotel=new Hotel();
            $hotel->name=$resq["name"];
            $hotel->address=$resq["address"];
            $hotel->price=$resq["price"];
            $hotel->schedule=$resq["schedule"];
            $hotel->descrip1=$resq["descrip1"];
            $hotel->descrip2=$resq["descrip2"];
            $hotel->image=$resq["image"];
            //dd($hotel);
            $hotel->save();
        }

         //Places
         if($resq["table"]=='places'){
            $lugar=new Place();
            $lugar->name=$resq["name"];
            $lugar->address=$resq["address"];
            $lugar->price=$resq["price"];
            $lugar->schedule=$resq["schedule"];
            $lugar->descrip1=$resq["descrip1"];
            $lugar->descrip2=$resq["descrip2"];
            $lugar->image=$resq["image"];
            //dd($lugar);
            $lugar->save();
        }


        


        return view ('form');
    }

    public function actualizar(Request $resq){
        
        $id=$resq["id"];
        $usuario=User::find($id);
        $usuario->name=$resq["name"];
        $usuario->telephone=$resq["telephone"];
        $usuario->mobile=$resq["mobile"];
        $usuario->email=$resq["email"];
        $usuario->save();

        return back();
    }

} // Fin del Profilecontrollador
