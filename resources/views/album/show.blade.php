@extends('theme_admin.dashboard')
@section('content')
<div class="container"> 
<div class="row">
    <div class="col-md-11 col-md-offset-1">
      <div class="col-md-9">
            <h3>Album : {{$album->nama}}</h3><br>
            Deskripsi : {{$album->deskripsi}}
      </div>
       <div class="col-md-2">
            {!! Form::open() !!}
           <a href="{{route('album.edit',$album->id)}}" class="btn btn-primary btn-xs" style="margin-top:20px;"><i class="glyphicon glyphicon-edit"></i> Edit</a>
          {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete',['class'=>'btn btn-danger btn-xs', 'style'=>'margin-top:20px;','type'=>'submit']) }}
          
          {!! Form::close() !!}
       </div>

    </div>
</div>
</div>
@endsection
