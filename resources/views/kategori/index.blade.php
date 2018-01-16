@extends('./theme_admin/dashboard')
@section('title',"kategori")
@section('content')
  <br>
  <div class="container">
  	<div class="col-md-11">
	 <h1>kategori<a href="{{url('kategori/create')}}" class="pull-right"><i class="glyphicon glyphicon-plus-sign"></i></a></h1>
	 <table class="table table-hover">
	 	<thead><th>#</th><th>Kategori</th><th>action</th></thead>
	 		
	 	<tbody>
	 	@foreach($ktgs as $ktg)	
	 		<tr><td>{{$ktg->id}}</td><td>{{$ktg->kategori}}</td><td>

             <form action="{{url('kategori', [$ktg->id])}}" method="POST">
               <a href="{{route('kategori.edit',$ktg->id)}}" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

             	{{method_field('DELETE')}}     
  				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  				 <button  type="submit" class="btn btn-danger btn-sm" value="Delete.."><i class="glyphicon glyphicon-trash"></i></button>
   			</form>
	 		</td></tr>
        @endforeach
	 	</tbody>

	 </table>
	</div>
</div>
@endsection