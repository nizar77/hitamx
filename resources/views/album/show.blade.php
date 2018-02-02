{{$album->id }} | {{$album->nama}}
@extends('theme_admin.dashboard')
@section('content')
<div class="container"> 
<div class="row">
    <div class="col-md-11 col-md-offset-1">
      <div class="col-md-9">
            <h3>Album : {{$album->nama}}</h3>
            Deskripsi : {{$album->deskripsi}}
            {{Html::image($album->cover_album,null,['class'=>'img-responsive'])}}

      </div>
       <div class="col-md-2">
            {!! Form::open(['route'=>['album.destroy',$album->id],'method'=>'DELETE']) !!}
           <a href="{{route('album.edit',$album->id)}}" class="btn btn-primary btn-xs" style="margin-top:20px;"><i class="glyphicon glyphicon-edit"></i> Edit</a>
          {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete',['class'=>'btn btn-danger btn-xs', 'style'=>'margin-top:20px;','type'=>'submit']) }}
          
          {!! Form::close() !!}
       </div>

    </div>
</div>
</div>
@endsection
