@extends('theme_admin/dashboard')
@section('content')
<div class="container">
	<div class="col-md-11">
	 <h1>Judul</h1><i class="glyphicon glyphicon-plus"></i>
		<btn class="btn btn-primary">buat</btn>
		<div class="panel panel">
			<div class="panel panel-heading panel-primary">ddsdsds</div>
			<div class="panel panel-body">
			 <form class="form-horizontal" role="form">

		 <div class='form-group'>
          <label class="control-label col-md-2">Judul berita</label>
          <div class='col-md-9 col-xs-12'> 
            <input type="text" name="judul" class ='form-control', placeholder ='judul berita' /> 
          </div>
         </div>
				
          <div class="form-group">
          <label class="control-label col-md-2">Kategori</label>
			 <div class="col-md-9">
			 <select type="text" name="kategori" class="form-control">
					<option>----</option>
					<option value="1">Berita</option>
					<option value="2">Mutiara Hadist</option>
					<option value="3">Artikel</option>
				</select>
			 </div>	
		  </div>		
		  <div class="form-group">	
			<label class="control-label col-md-2">Isi Berita</label>
            <div class="col-md-9">
				<textarea type="text" name="isipost" rows="10" class="form-control"></textarea>
		    </div>		
		  </div>		
          
          <div class='form-group'>
          <label class="control-label col-md-2">Tag</label>
          <div class='col-md-9 col-xs-12'> 
            <select type="text" name="judul" class ='form-control'>
            <option value="">=========</option> 
			<option value="1">qwqwq</option> 
			<option value="2">kldf dfdjklf</option> 
			<option value="3">gurauan</option> 
           </select>            
          </div>
         </div>

         <div class="form-group">
          <label class="control-label col-md-2">Gambar</label>
          <div class="col-md-9">
          <input type="file" class="form-control" />
         </div>	
         </div>
         <div class="form-group">
         	<div class="col-md-2 col-md-offset-2">
         	<div class="btn btn-primary">Post</div>
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