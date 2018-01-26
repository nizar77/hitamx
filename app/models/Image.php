<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function album(){
    	return $this->belongsTo('App\models\Album');
    }
}
