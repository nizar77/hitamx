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
        <h2>buat album</h2>
		
        {!! Form::model($album,['route' =>['album.update',$album->id],'method'=>'patch', 'class'=>'form-horizontal', 'role'=>'form', 'files'=>true]) !!}
        <div class="form-group">
            <label class="control-label col-md-2">Title Galeri</label>
			<div class="col-md-9">
				<input type="text" name="title" class="form-control" value="{{$album->nama}}">
			</div>			
        </div>
        
        <div class="form-group">
			{{Form::label('deskripsi', 'Deskripsi',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
				{{Form::textarea('deskripsi',$album->deskripsi,['class'=>'form-control'])}}
			</div>			
        </div>
        <div class="form-group">
        	@if(file_exists($album->cover_album))
        	<div class="col-md-9 col-md-offset-2">
        		{{Html::image($album->cover_album,null,['class'=>'img-responsive','width'=>'50%'])}}
        	</div>	        	
        	@else
        	 <div class="col-md-9 col-md-offset-2">
        	 	 <label class="label label-danger">belum ada cover</label>
        	 </div>        	
        	 @endif
        </div>

		<div class="form-group">
			{{Form::label('cover','Cover Album',array('class'=>'control-label col-md-2'))}}
			<div class="col-md-9">
			{{ Form::file('cover',['class'=>'btn btn-success']) }}
			</div>
        </div>
        <div class="form-group">
             <div class="col-md-9 col-md-offset-2">
                 {{Form::submit('Edit Album',['class'=>'btn btn-primary btn-block'])}}
             </div>
        </div>
		{!! Form::close() !!}
		</div>
		
	</div>
</div>
@endsection