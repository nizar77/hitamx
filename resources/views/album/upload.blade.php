@extends('theme_admin.dashboard')
@section('styles')
<style>
.form-control{
    background-color:transparent !important;
    color:#fff;
}
</style>
@endsection
@section('content')
<div class="container">
   <div class="row">
	<div class="col-md-11 col-md-offset-1">
        
        {!! Form::open(['route'=>['post_Galeri'], 'method'=>'POST','class'=>'form-horizontal', 'files'=>true]) !!}
        {{ Form::hidden('album_id',$album->id)}}
        <div class="form-group">
            <br>
            <div class="col-md-9 col-md-offset-2">
                <strong>Upload Image to {{$album->nama}}</strong>
            </div>    
        </div>
        <hr>
        
        <div class="form-group">
			{{Form::label('deskripsi', 'Deskripsi',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
				{{Form::textarea('deskripsi',$album->deskripsi,['class'=>'form-control','rows'=>'4'])}}
			</div>			
        </div>
        
		<div class="form-group">
			{{Form::label('image_galeri','Cover Album',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
			{{ Form::file('image_galeri',['class'=>'btn btn-success']) }}
			</div>
        </div>
        <div class="form-group">
             <div class="col-md-9 col-md-offset-2">
                {{Form::button('<i class="glyphicon glyphicon-upload"></i> Upload Galeri',['class'=>'btn btn-primary btn-block','type'=>'submit'])}}
             </div>
        </div>
		{!! Form::close() !!}
		</div>		
	</div>
</div>
@endsection