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
        $post->image_post=$filename;
        
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
        $post=Post::find($id);
        return view('post.show',['post'=>$post]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post=Post::find($post);
        $kategoris=Kategori::all();
        $kat = array();
        foreach ($kategoris as $kategori){
            $kat[$kategori->id] = $kategori->kategori;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as $tag){
            $tags2[$tag->id]=$tag->tag;
        }
        return view('post.edit')->withPost($post)->withKategoris($kat)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post=Post::find($post);
        $slug = str_slug($request->judul); 
        if($request->hasFile('image_post')){
       $filename = time().'-'.$slug.'.'.request()->image_post->getClientOriginalExtension();
        request()->image_post->move(public_path('uploadPost'),$filename);
         
        $post->judul=$request->judul;
        $post->isi_post=$request->isi_post;
        $post->kategori_id=$request->kategori;
        $post->image_post=$filename;
        
        $post->save();
         if(isset($request->tags)){
         $post-tags()->sync($request->tags);   
         }else{
           $post->tags()->sync(array());
        }
          
        }

        else {
           $post=Post::find($post);
           $post->judul=$request->judul;
           $post->isi_post=$request->isi_post;
           $post->kategori_id=$request->kategori;
           //dd($post);
           $post->save();
           $post->tags()->sync($request->tags);  
        }
        
        return redirect()->route('posthitam.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=Post::find($id);
       if(!$post->image_post == 0) {
        unlink(public_path('uploadPost/').$post->image_post);
        $post->tags()->detach();
        $post->delete();
        }else{
         //$post = Post::find($id);
         $post->tags()->detach();
         $post->delete();   
        }
        
        return redirect()->route('posthitam.index');      }
    }
