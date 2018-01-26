<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class Postcontroller extends Controller
{
    public function buat()
    {
    	return view('post.buat');
    }
}
