@extends('./theme_admin/dashboard')
@section('title',"kategori")
@section('content')
  <br>
  <div class="container">
  	<div class="col-md-11">
	 <h1>kategori<span class="pull-right"><a href="{{route('taq.buat')}}" class="glyphicon glyphicon-plus-sign"></a></span></h1>
	 <table class="table table-hover">
	 	<thead><th>#</th><th>Kategori</th><th>action</th></thead>
	 		
	 	<tbody>
        <?php 
        $i=1;
        ?>     
	 	@foreach($tags as $taq)	
	 		<tr><td>{{$i++}}</td><td>{{$taq->tag}}</td><td><div class="btn-group" role="group" aria-label="">	 			
			  <a href="{{route('taq.edit', $taq->id)}}"  class="btn btn-success btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
			  <a href="{{route('taq_hapus',$taq->id)}}" type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> </div>
			</td>
			</tr>
        @endforeach
	 	</tbody>

	 </table>
	</div>
</div>
@endsection

