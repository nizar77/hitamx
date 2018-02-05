@extends('theme_admin.dashboard')
@section('content')
<div class="container"> 
<div class="row">
    <div class="col-md-11 col-md-offset-1">
      <div class="col-md-9">
            <h3>Album : {{$album->nama}}</h3>
            Deskripsi : {{$album->deskripsi}}
            {{Html::image($album->cover_album,null,['class'=>'img-responsive','widht'=>'50'])}}
            <div class="row">
            @foreach($album->Photos as $gl)
            <div class="col-md-6">
             {{ $gl->id}} 
             {{Html::image($gl->image,null,['class'=>'img-responsive'])}} 
            </div>
            @endforeach
        </div>

      </div>
       <div class="col-md-2">
            {!! Form::open(['route'=>['album.destroy',$album->id],'method'=>'DELETE']) !!}
           <a href="{{route('album.edit',$album->id)}}" class="btn btn-primary btn-sm btn-block" style="margin-top:20px;"><i class="glyphicon glyphicon-edit"></i> Edit</a>
          {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete',['class'=>'btn btn-danger btn-sm btn-block', 'style'=>'margin-top:20px;','type'=>'submit']) }}
          <a href="{{route('album.index')}}"><span class="btn btn-success btn-sm btn-block">kembali</span></a>
          {!! Form::close() !!}
       </div>

    </div>
</div>
</div>
@endsection
