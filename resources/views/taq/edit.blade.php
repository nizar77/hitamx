@extends('./theme_admin/dashboard')
@section('title',"Tag")
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-11">
 	<h2> Buat Taq</h2>
 	<form action="{{route('taq.update',$taq->id)}}"  method="post" class="form-horizontal">
         {{csrf_field()}}
         {{method_field('PATCH')}}

    <div class="form-group">
    <label>Tag</label>
    <input type="text" class="form-control" name="taq" value="{{$taq->taq}}" />
	</div>
	<div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">edit taq</button>
    </div>
    </form>
  </div>
</div>
</div>
@endsection