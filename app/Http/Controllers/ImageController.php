<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Gambar;
use App\models\Album;
use Session;
use Image;

class ImageController extends Controller
{
   public function resizeImage()
   {
   	return view('image.buat');
   }

   public function resizeImagePost(Request $request)
   {
   		    $this->validate($request,[
	    	
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   		  $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
       // $this->postImage->add($input);
        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }
    public function uploadGaleri($album_id)
    {
       $album=Album::find($album_id);
       return view('album.upload')->withAlbum($album);
    }

    public function postGaleri(Request $request )
    {
        $galeri = new Gambar;
        $slug=$request->album_id;
        $path1=('albums/galeri/');
        if($request->hasFile('image_galeri')){
            $filename=$path1.'-'.time().'-'.$slug.'.'.$request->image_galeri->getClientOriginalExtension();
            $request->image_galeri->move($path1,$filename);

        $galeri->album_id=$request->album_id;
        $galeri->deskripsi=$request->deskripsi;
        $galeri->image=$filename;
        //dd($galeri);
        $galeri->save();
        } else{
            $galeri->album_id=$request->album_id;           
            $galeri->deskripsi=$request->deskripsi;
            $galeri->save();
        }
        return redirect()->route('galeri');
    }
    public function index()
    {
       $galeris=Gambar::get();//groupBy('album_id');
       return view('galeri.index',compact('galeris'));   
    } 
    public function show($id)
    {
        $galeri=Gambar::find($id);
        return view ('galeri.show',compact('galeri'));
    }
    public function edit($id)
    {
        $galeri=Gambar::find($id);
        return view('galeri.edit',compact('galeri'));

    }
    public function destroy($id)
    {
        $galeri=Gambar::find($id);
        if(!$galeri->image==0){
            unlink($galeri->image);
        }
        $galeri->delete();
        return redirect()->route('galeri');  
    }
   }
