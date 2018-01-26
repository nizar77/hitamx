<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tag;

class TaqController extends Controller
{
    public function index()
    {
        $tags=tag::all();
        return view('taq.index')->with('tags',$tags);
    }

    public function buat()
    {
    	return view('taq.buat');
    }
    public function simpan(Request $request)
    {
    	$tags = New Tag;
        $tags ->tag = $request->taq;
        $tags->save();
        return redirect()->route('taq.index');
    }
    public function edit($id) 
    {
        $taq=Tag::find($id);
        return view('taq.edit',compact('taq'));
    }
    public function update(Request $request, $id)
    {
        $taq=Tag::findOrFail($id);
        $taq->tag=$request->taq;
        $taq->save();
        return redirect()->route('taq.index');
    }

    public function hapus($id)
    {
    	$taq = Tag::findOrFail($id);
    	$taq->delete();//->delete();
    	return redirect()->route('taq.index');
    }

}
