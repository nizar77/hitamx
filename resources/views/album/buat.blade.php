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
		
			{!! Form::open(['route'=>['album.store'],'class'=>'form-horizontal','role'=> 'form', 'method'=>'post','files'=>'true' ]) !!}

		<div class="form-group">
			{{Form::label('title', 'Title Galeri',['class'=>'col-md-2 control-label'])}}
<div class="container">
        <div class="row">
	<div class="col-md-11 col-md-offset-1">
        <h2>buat album</h2>
		
        {!! Form::open(['route' =>'album.store','method'=>'post', 'class'=>'form-horizontal', 'role'=>'form', 'files'=>true]) !!}
        <div class="form-group">
            <label class="control-label col-md-2">Title Galeri</label>
			<div class="col-md-9">
				<input type="text" name="title" class="form-control">
			</div>			
<<<<<<< HEAD
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
		<br> 
		<div class="form-group">
		   <div class="col-md-9 col-md-offset-2">  
			<button type="submit" class="btn btn-success">Simpan Album </button>
			</div>
		</div>
		
		{!!Form::close() !!}
=======
        </div>
        
        <div class="form-group">
			{{Form::label('deskripsi', 'Deskripsi',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
				{{Form::textarea('deskripsi','',['class'=>'form-control'])}}
			</div>			
        </div>
        
		<div class="form-group">
			{{Form::label('cover','Cover Album',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
			{{ Form::file('cover',['class'=>'btn btn-success']) }}
			</div>
        </div>
        <div class="form-group">
             <div class="col-md-9 col-md-offset-2">
                 {{Form::submit('Simpan',['class'=>'btn btn-primary btn-block'])}}
             </div>
        </div>
		{!! Form::close() !!}
>>>>>>> 9c6e33626983cf45f127a97a1d6498c22e21c37c
		</div>
		
	</div>
</div>
@endsection