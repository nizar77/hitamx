
@extends('theme_admin.dashboard')
@section('content')
<div class="container">
    <div class="co-md-11 col-md-offset-1">
        <div class="row">
            <table class="table table-hover table-responsive">
              <thead><tr>
                  <th>#</th>
                  <th>title</th>
                  <th>deskripsi</th>
                  <th>cover</th>
                  <th class="text-right"><h3>{{ Html::link('admin/create','',['class'=>'btn btn-success glyphicon glyphicon-plus-sign']) }}</h3></th>
              </tr>
              </thead>
              <tbody>
                    @foreach($albums as $album)
                  <tr>
                    <td>{{$album->id}}</td>  
                    <td>{{$album->nama}}</td>
                      <td>{{$album->deskripsi}}</td>
                      <td>{{$album->cover_album}}</td>
                      <td class="text-right">
                          <a href="{{route('album.show',$album->id)}}" class="btn btn-primary btn-xs">view</a>
                          <a href ="{{route('galeri_upload',$album->id)}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-upload"></i> Upload</a> 

                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection