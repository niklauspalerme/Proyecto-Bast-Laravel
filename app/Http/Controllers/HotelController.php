<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
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
        $hotels = Hotel::paginate(6);
        return view('hotels.home')->with('hotels',$hotels);
    }

    public function details($id){

      $hotel=Hotel::find($id);
      $vac=compact('hotel');
      return view('hotels.details',$vac);
    }

    public function detailsAgenda($id){

        $hotel=Hotel::find($id);
        $vac=compact('hotel');
        return view('hotels.detailsAgenda',$vac);
      }
}
