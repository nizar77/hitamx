@extends('theme_admin/dashboard')
@section('title',"buat resaize")
@section('content')

 <div class="container">

<h1>Resize Image Uploading Demo</h1>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>

<div class="row">
	<div class="col-md-4">
		<strong>Original Image:</strong>
		<br/>
		<img src="/images/{{ Session::get('imageName') }}" />
	</div>

	<div class="col-md-4">
		<strong>Thumbnail Image:</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
</div>
@endif

  <div class="col-md-11">
  	<br>
 	<div class="pane panel-primary">
 	  <div class="panel panel-heading"> Buat Kategori</div>
 	  <div class="panel panel-body">
	 	<form action="{{route('resizeImagePost')}}" class="" method="post" enctype="multipart/form-data">
	 		{{csrf_field()}}
	 	<div class="form-group">
	    <label>Image</label>
	    <input type="file" class="btn btn-primary btn-xs" name="image">
	    </div>
	    <div class="form-group">
	    <button class="btn btn-primary btn-block"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Tambah image</button>
		</div>
    </form>
	</div>
	</div>
   </div>
</div>

@endsection