@extends('theme_admin/dashboard')
@section('content')
<div class="container">
	<div class="col-md-11">
	 <h1>Judul</h1><i class="glyphicon glyphicon-plus"></i>
		<btn class="btn btn-primary">buat</btn>
		<div class="panel panel">
			<div class="panel panel-heading panel-primary">ddsdsds</div>
			<div class="panel panel-body">
			 <form class="form-horizontal" role="form" action="{{route('posthitam.store')}}" method="POST" enctype="multipart/form-data">
			 	{{csrf_field()}}

		 <div class='form-group'>
          <label class="control-label col-md-2">Judul berita</label>
          <div class='col-md-9 col-xs-12'> 
            <input type="text" name="judul" class ='form-control', placeholder ='judul berita' /> 
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
            <select type="text" name="tags" class ='form-control'>
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
            <div class="panel-footer">footer</div>			
		</div>
	</div>
</div>
@endsection