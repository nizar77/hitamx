<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBY('id','DESC')->get();
	     return view('album.index')->withAlbums($albums);
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
        $album = New Album;
		if($request->hasFile('cover_album')){
			$filename=time().'-'.$request->title.'.'.$request->cover_album->getClientOriginalExtension();
			$request->cover_album->move('images',$filename); 
		$album->user_id="1";
		$album->nama=$request->title;
		$album->deskripsi = $request->deskripsi;
		$album->cover_album = $filename;
		//dd($album);
		$album->save();
		}else{
		$album=New Album;	
		$album->user_id="1";
		$album->nama=$request->title;
		$album->deskripsi=$request->deskripsi;
		$album->save();	
		}
		return redirect()->route('album.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
