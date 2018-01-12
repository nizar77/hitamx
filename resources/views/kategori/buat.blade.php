@extends('theme_admin/dashboard')
@section('title',"buat kategori")
@section('content')
<div class="container">
	<div class="col-md-11">
 	<h2> fdfdfdfdf</h2>
 	<form action="{{route('kategori.store')}}" class="" method="post">
 		{{csrf_field()}}
    <label>Kategori</label>
    <input type="text" class="form-control" name="kategori" />
    <button class="btn btn-primary btn-block">Tambah kategori</button>
    </form>
	</div>
</div>
@endsection