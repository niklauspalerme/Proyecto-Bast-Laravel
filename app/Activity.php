<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Genre;

class Activity extends Model
{
    //protected $table = 'movies';
    //protected $primaryKey = 'id';
    //protected $timeStamps = true;
    protected $guarded = [];

    /* public function genres(){
        return $this->belongsTo(Genre::class);
    } */

    public function users(){
      return $this->belongsToMany('App\User');
    }

}
