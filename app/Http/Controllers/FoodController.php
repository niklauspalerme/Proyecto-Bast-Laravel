<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
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
        $foods = Food::paginate(6);
        return view('foods.home')->with('foods',$foods);
    }

    public function details($id){

      $food=Food::find($id);
      $vac=compact('food');
      return view('foods.details',$vac);
    }

    public function detailsAgenda($id){

        $food=Food::find($id);
        $vac=compact('food');
        return view('foods.detailsAgenda',$vac);
      }
}
