@extends('./theme_admin/dashboard')
@section('title',"kategori")
@section('content')
  <br>
  <div class="container">
  	<div class="col-md-11">
	 <h1>kategori</h1>
	 <table class="table table-hover">
	 	<thead><th>#</th><th>Kategori</th><th>action</th></thead><tr>
	 		
	 	<tbody>
	 	@foreach($ktgs as $ktg)	
	 		<td>{{$ktg->id}}</td><td>{{$ktg->kategori}}</td><td><a href="{{route('kategori.edit',$ktg->id)}}" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i></a></td></tr>
        @endforeach
	 	</tbody>

	 </table>
	</div>


</div>
@endsection