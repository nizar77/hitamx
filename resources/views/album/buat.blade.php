@extends('theme_admin.dashboard')
@section('styles')
<style>
.form-control{
    background-color:transparent !important;
}
</style>
@endsection
@section('content')
<div class="container"> 
    <div class="row">
		<div class="col-md-11 col-md-offset-1">
		<br>
		   
	  {!! Form::open(['route' =>'album.store','method'=>'post', 'class'=>'form-horizontal', 'role'=>'form', 'files'=>true]) !!}
        <div class="form-group">
            <label class="control-label col-md-2">Title Galeri</label>
			<div class="col-md-9">
				<input type="text" name="title" class="form-control">
			</div>			
		</div>
		
		<div class="form-group">
			{{Form::label('deskripsi', 'Deskripsi Galeri',['class'=>'col-md-2 control-label'])}}
			<div class="col-md-9">
				{{Form::textarea('deskripsi','',['class'=>'form-control'])}}
			</div>			
		</div>
		<div class="form-group">
			{{Form::label('cover','Cover Album',['class' => 'control-label col-md-2'])}}
			<div class="col-md-9 col-md-offset-2">
			<input type="file" class="btn btn-success" name="cover_album"/>
			</div>
		</div>
		 
		<div class="form-group">
		   <div class="col-md-9 col-md-offset-2">  
			<button type="submit" class="btn btn-primary btn-block">Simpan Album </button>
			</div>
		</div>
		
		{!!Form::close() !!}
        </div>
	</div>
</div>
@endsection