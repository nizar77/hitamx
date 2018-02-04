
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
                  <th class="text-right" width="140px"><h3>{{ Html::link('album/create','',['class'=>'btn btn-success glyphicon glyphicon-plus-sign']) }}</h3></th>
              </tr>
              </thead>
              <tbody>
                  <?php 
                  $no =1;
                  ?>
                    @foreach($albums as $album)
                  <tr>
                    <td>{{$no++}}</td>  
                    <td>{{$album->nama}}</td>
                      <td>{{$album->deskripsi}}</td>
                      <td>{{$album->cover_album}}</td>
                      <td class="text-right">
                          <a href="{{route('album.show',$album->id)}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i> view</a>
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