@extends('theme_admin.dashboard') 
@section('content')
<div class="container">
    <div class="row">
	<div class="col-md-11">
	 <table class="table table-hover">
     <thead><tr><th>#</th><th>Album</th><th>deskripsi</th><th>cover</th><th>Action</th></tr></thead>
	 <tbody>
	 @foreach($albums as $album)
	 <tr><td>1</td><td>{{$album->nama}}</td><td>{{$album->deskripsi}}</td><td>{{$album->cover_album}}</td>\
	 <td width="120px"><a href="" class="btn btn-primary btn-xs">upload</a>
	 <a href="{{route('album.show',$album->id)}}" class="btn btn-success btn-xs">Show</a></td>
	 </tr>
	 @endforeach  
	 </tbody>
	 </table>   	 
	</div>
	</div>
	
</div>
@endsection