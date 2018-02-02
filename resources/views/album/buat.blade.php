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
        <h2>buat album</h2>
		
        {!! Form::open(['route' =>'album.store','method'=>'post', 'class'=>'form-horizontal', 'role'=>'form', 'files'=>true]) !!}
        <div class="form-group">
            <label class="control-label col-md-2">Title Galeri</label>
			<div class="col-md-9">
				<input type="text" name="title" class="form-control">
			</div>			
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
		</div>
		
	</div>
</div>
@endsection