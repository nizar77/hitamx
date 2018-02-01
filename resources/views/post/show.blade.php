
@extends('theme_admin/dashboard')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-11">
		<div class="col-md-10">
			<h3>{{$post->id}} | {{$post->isi_post}}<small>
		</div>
		<div class="col-md-2">{!! Form::open(['route'=>['posthitam.destroy',$post->id],'method'=>'DELETE']) !!}
			<a href="{{route('posthitam.edit',$post->id)}}" class="btn btn-success btn-xs" style="margin-top:20px;">edit</a>
			<button type="submit" class="btn btn-danger btn-xs" style="margin-top: 20px;">hapus</button>
			{!!Form::close() !!}	
		</div>
	</div>
</div>

@endsection
