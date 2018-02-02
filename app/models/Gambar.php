<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
   protected $table='images';
   protected $fillable=['album_id','deskripsi','image'];
}
