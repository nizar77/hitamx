@extends('theme_admin/dashboard')
@section('title',"buat kategori")
@section('content')
<div class="container">
  <div class="col-md-11">
  	<br>
 	<div class="pane panel-primary">
 	  <div class="panel panel-heading"> Buat Kategori</div>
 	  <div class="panel panel-body">
	 	<form action="{{route('kategori.store')}}" class="" method="post">
	 		{{csrf_field()}}
	 	<div class="form-group">
	    <label>Kategori</label>
	    <input type="text" class="form-control" name="kategori" placeholder="kategori" />
	    </div>
	    <div class="form-group">
	    <button class="btn btn-primary btn-block"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Tambah kategori</button>
		</div>
    </form>
	</div>
	</div>
   </div>
</div>

@endsection