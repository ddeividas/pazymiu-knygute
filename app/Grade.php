<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = "grades";

    public function lecture(){
        return $this->hasOne('App\Lecture', 'id', 'lectures_id');
    }
}
