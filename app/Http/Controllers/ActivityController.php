<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
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
        //activity:all();
        $Activities = activity::paginate(8);
        return view('activities.home')->with('activities',$Activities);
    }

    public function details($id){

      $activity=Activity::find($id);
      $vac=compact('activity');
      return view('activities.details',$vac);
    }

    public function detailsAgenda($id){

        $activity=Activity::find($id);
        $vac=compact('activity');
        return view('activities.detailsAgenda',$vac);
      }

}
