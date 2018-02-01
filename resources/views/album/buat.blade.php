@extends('theme_admin.dashboard')
@section('styles')

@endsection
@section('content')
<div class="container">
	<div class="col-md-11 col-md-offset-1">
		<div class="row">
			{!!Form::open() !!}

		<div class="form-group">
			{{Form::label('title', 'Title Galeri',['class'=>'col-md-2 control-label'])}}
			<div class="col-md-9">
				{{Form::text('title',null,['class'=>'form-control'])}}
			</div>			
		</div>
		<div class="form-group">
			{{Form::label('cover','Cover Album',['class'=>'control-label col-md-2'])}}
			<div class="col-md-9 col-md-offset-2">
			{!! Form::file('cover',null,['class'=>'btn btn-success']) !!}
			</div>
		</div>
		{!!Form::close() !!}
		</div>
		
	</div>
</div>
@endsection