<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'albums';
    protected $fillable = array('nama','deskripsi', 'cover_album');

    public function Photos()
    {
       return $this->has_many('images');
    }
}
