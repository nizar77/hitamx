@extends('theme_admin/dashboard')
@section('title',"|Post Create")
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}" />
<style>

.form-control{
    background:transparent;
    color:#fff;
}
.select2-multi{
    color:#000;
}
</style>
@endsection
@section('content')
<div class="container">
	<div class="col-md-11">
	 <h1>Judul</h1><i class="glyphicon glyphicon-plus"></i>
		<btn class="btn btn-primary">buat</btn>
		
			 <form class="form-horizontal" role="form" action="{{route('posthitam.store')}}" method="POST" enctype="multipart/form-data">
			 	{{csrf_field()}}

		 <div class='form-group'>
          <label class="control-label col-md-2">Judul berita</label>
          <div class='col-md-9 col-xs-12'> 
            <input type="text" name="judul" class ="form-control" placeholder ="judul berita"> 
          </div>
         </div>
				
          <div class="form-group">	
			<label class="control-label col-md-2">Isi Berita</label>
            <div class="col-md-9">
				<textarea type="text" name="isi_post" rows="10" class="form-control"></textarea>
		    </div>		
		  </div>

          <div class="form-group">
          <label class="control-label col-md-2">Kategori</label>
			 <div class="col-md-9">
			 <select type="text" name="kategori" class="form-control">
                <option value="">---</option>
                @foreach($kategoris as $kt)
				<option value="{{$kt->id}}">{{$kt->kategori}}</option>
			     @endforeach
				</select>
			 </div>	
		  </div>

		 <div class='form-group'>
          <label class="control-label col-md-2">Tag</label>
          <div class='col-md-9 col-xs-12'> 
            <select type="text" name="tags[]" class ='form-control select2-multi' multiple='multiple' style="color:000;">
             <option value="0">----</option>   
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->tag}}</option> 
            @endforeach
			</select>            
          </div>
         </div>

         <div class="form-group">
          <label class="control-label col-md-2">Gambar</label>
          <div class="col-md-9">
          <input type="file" name="image_post" class="btn btn-primary btn-sm" />
         </div>	
         </div>
         <div class="form-group">
         	<div class="col-md-2 col-md-offset-2">
         	    <button  class="btn btn-primary" type="submit">Post</button>
         	    <div class="btn btn-warning">Cancel</div>
             </div>
         </div>
	</form>
 </div>
</div>     
@endsection   
@section('scripts')
<script src="{{asset('js/select2.min.js') }}" ></script>
   <script type='text/javascript'>
        $('.select2-multi').select2();
    </script>
@endsection

