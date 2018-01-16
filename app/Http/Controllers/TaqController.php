<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\taq;

class TaqController extends Controller
{
    public function index()
    {
        $taqs=taq::all();
        return view('taq.index',compact('taqs'));
    }

    public function buat()
    {
    	return view('taq.buat');
    }
    public function simpan(Request $request)
    {
    	$tags = New taq;
        $tags ->taq = $request->taq;
       // dd($tags);
        $tags->save();
        return redirect()->route('taq.index');
    }
    public function edit($id) 
    {
        $taq=taq::find($id);
        return view('taq.edit',compact('taq'));
    }
    public function update(Request $request, $id)
    {
        $taq=taq::findOrFail($id);
        $taq->taq=$request->taq;
        $taq->save();
        return redirect()->route('taq.index');
    }

    public function hapus($id)
    {
    	$taq = taq::findOrFail($id);
    	$taq->delete();//->delete();
    	return redirect()->route('taq.index');
    }

}
