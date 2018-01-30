
@extends('theme_admin/dashboard')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-11">
		<div class="col-md-10">
			<h3>{{$post->id}} | {{$post->isi_post}}<small>
		</div>
		<div class="col-md-1">
			<a href="{{route('posthitam.edit',$post->id)}}" class="btn btn-success btn-xs" style="margin-top:20px;">edit</a>	
		</div>
	</div>
</div>

@endsection
