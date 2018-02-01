@extends('theme_admin/dashboard')
@section('title',"|Edit Post")
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}" />
<style>

.form-control{
    background: transparent; !important;
   color:#fff;
}

</style>
@endsection
@section('content')
<div class="container">
  <div class="row">
	<div class="col-md-11">
	  <h2 class="text-center">Edit Post</h2>
		{!! Form::model($post, ['route'=>['posthitam.update', $post->id], 'method'=>'PUT', 'class'=>'form-horizontal','role'=>'form','files'=>true] ) !!}

		 <div class='form-group'>
        {{ Form::label('judul', "Judul berita lorem ipsum", ['class'=>'control-label col-md-2'])}} 
        <div class="col-md-9">
         {!! Form::text('judul',null,['class'=>'form-control']) !!}
        </div>          
      </div>
				
          <div class="form-group">	
			<label class="control-label col-md-2">Isi Berita</label>
            <div class="col-md-9">
				<textarea type="text" name="isi_post" rows="10" class="form-control">{{$post->isi_post}}</textarea>
		    </div>		
		  </div>

       <div class="form-group">
         {{Form::label('kategori',"Kategori",['class'=>'control-label col-md-2'])}}
			 <div class="col-md-9">
        {!! Form::select('kategori',$kategoris, null, ['class'=>'form-control']) !!}			
			 </div>	
		  </div>

		  <div class='form-group'>
        {{Form::label('tags', "Tags", ['class'=>'control-label col-md-2'])}}
          <div class='col-md-9 col-xs-12'> 
            {{ Form::select('tags[]',$tags, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}	          
          </div>
      </div>
                    
      <div class="form-group">
        {{Form::label('image_post','Gambar Post',['class'=>'col-md-2'])}}
        <div class="col-md-9 col-md-offset-2">
          <img src="{{asset('uploadPost/'.$post->image_post)}}" class="img-responsive" width="50%">
        </div>                
      </div>

      <div class="form-group">
          {{Form::label('image_post','Gambar Post',['class'=>'col-md-2'])}}
        <div class="col-md-9">
          
          {{Form::file('image_post',['class'=>'btn btn-primary btn-xs'])}}
        </div>	
      </div>
         <div class="form-group">
         	<div class="col-md-2 col-md-offset-2">
         	    <button  class="btn btn-primary" type="submit">Post</button>
         	    <a href="{{route('posthitam.show',$post->id)}}"  class="btn btn-warning">Cancel</a>
             </div>
         </div>
	{!! Form::close() !!}
 </div>
</div>   
</div>  
@endsection   
@section('scripts')
<script src="{{asset('js/select2.min.js') }}" ></script>
   <script type='text/javascript'>
        $('.select2-multi').select2();    
        
        
    </script>
@endsection

