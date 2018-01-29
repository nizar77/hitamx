<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\models\Kategori;
use App\models\Tag;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $kategoris = Kategori::all();
        $tags = Tag::all();
        return view('post.buat')->with('kategoris',$kategoris)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $slug = str_slug($request->judul);
        if($request->hasFile('image_post')){
        	$filename = time().'-'.$slug.'.'.request()->image_post->getClientOriginalExtension();
        	request()->image_post->move(public_path('uploadPost'),$filename);
      
        $post->judul=$request->judul;        
        $post->slug=$slug;
        $post->isi_post=$request->isi_post;
        $post->kategori_id=$request->kategori;
        $post->image_post=$filename;//'filename';
        
        $post->save();
        $post->tags()->sync($request->tags,false);
        }else{
        $post->judul=$request->judul;        
        $post->slug=$slug;
        $post->isi_post=$request->isi_post;
        $post->kategori_id=$request->kategori;
        $post->save();
        //dd($post);//->save();
        $post->tags()->sync($request->tags,false);
        
        }
       return redirect()->route('posthitam.index')->with($post->judul);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
