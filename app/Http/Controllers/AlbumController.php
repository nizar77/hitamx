<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Album;
use Session;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBy('id', 'DESC')->get();
        return view('album.index',['albums'=>$albums]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.buat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album =new Album;
        $slug=str_slug($request->title);
        if($request->hasFile('cover')){
            $path1=('albums/');
            $filename = $path1.time().'-'.$slug.'.'.$request->cover->getClientOriginalExtension();
            $path = ('albums');
            $request->cover->move($path,$filename);
        $album->user_id="1";
        $album->nama=$request->title;
        $album->deskripsi=$request->deskripsi;
        $album->cover_album=$filename;
        $album->save();
        }else{
            $album->user_id="1";
            $album->nama=$request->title;
            $album->deskripsi=$request->deskripsi;
            //dd($album);
            $album->save();
            return view('album.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album=Album::find($id);
        return view('album.show',compact('album'));

    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($album)
    {
        $album=Album::find($album);
        return View('album.edit',compact('album'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $album)
    {
        $album1 = Album::find($album);
        $slug=str_slug($request->title);
        if($request->hasFile('cover')){

            if(!$album1->cover_album == 0){
                unlink($album1->cover_album);
            }
            $path1=('albums/');
            $filename = $path1.time().'-'.$slug.'.'.$request->cover->getClientOriginalExtension();
            $path=('albums');
            $request->cover->move($path,$filename);

            $album1->nama=$request->title;
            $album1->deskripsi=$request->deskripsi;
            $album1->cover_album=$filename;
            //dd($album1); 
            //
            $album1->save();          
        }else{
          $album1->nama=$request->title;
          $album1->deskripsi=$request->deskripsi;
          //dd($album1);
          $album1->save();
        }
        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album=Album::findOrFail($id);
        if(!$album->cover_album==0){
            unlink($album->cover_album);
        }
        $album->delete();
        return redirect()->route('album.index');
    }
}
