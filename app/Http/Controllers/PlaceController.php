<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class placeController extends Controller
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
        $places = Place::paginate(6);
        return view('places.home')->with('places',$places);
    }

    public function details($id){

      $place=Place::find($id);
      $vac=compact('place');
      return view('places.details',$vac);
    }

    public function detailsAgenda($id){

        $place=Place::find($id);
        $vac=compact('place');
        return view('places.detailsAgenda',$vac);
      }
}
