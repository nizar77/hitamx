<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table='posts';
   protected $fillable = ['judul', 'slug','isi_post','kategori_id'];

   public function kategori(){
   	return $this->belongsTo('App\models\Kategori');
   }
   public function tags()
   {
   	return $this->belongsToMany('App\models\Tag');
   }
}
