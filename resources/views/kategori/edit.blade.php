@extends('./theme_admin/dashboard')
@section('title,"edit')
@section('content')
<!-- Modal -->

  <div class="container">    
    <div class="row">
    <div class="col-md-11"> 
      <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-primary">    
       <div class="panel panel-heading"> Edit kategori</div>
       <div class="panel panel-body">
          <form method="post" action="{{route('kategori.update',$kt->id)}}" class="form-horizontal">
            {{csrf_field()}}
            {{method_field('PATCH')}}
           <div class="form-group">
            <input type="text" name="kategori" class="form-control" value="{{$kt->kategori}}">
           </div> 
           <div class="form-group">
           <input type="submit" class="btm btn-success btn-sm btn-block" value="Edit Kategori">
          </div>
        </form>
      </div>
      </div>

    </div>
   </div>
  </div>
</div>

@endsection