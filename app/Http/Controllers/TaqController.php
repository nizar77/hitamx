<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\taq;

class TaqController extends Controller
{
    public function index()
    {
    	return view('taq.index');
    }

    public function buat()
    {
    	return view('taq.buat');
    }
    public function simpan(Request $request)
    {
    	$tags = New taq;
    	$tags ->taq =$request->taq;
    	dd($tags);
    }

}
