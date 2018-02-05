@extends('theme_admin.dashboard')
@section('title',"galeri")

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
            <h1>Galeri</h1>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Album</th>
                        <th>Deskripsi</th>
                        <th class="text-right">Galeri</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($galeris as $galeri)
                    <tr>
                       <td>{{$galeri->id}}</td>
                       <td>{{$galeri->album->nama}}</td>
                       <td>{{$galeri->deskripsi}}</td>
                       <td class="text-right">{{Html::image($galeri->image, null, ['class'=>'image-responsive','width'=>'85'] )}}</td>
                       <td class="text-right">{!!Form::open(['route'=>['galeri.destroy',$galeri->id],'method'=>'DELETE']) !!}
                            <a href="{{route('galeri.edit',$galeri->id)}}"><span class="btn btn-success btn-sm glyphicon glyphicon-pencil"> Edit</span></a>
                            {{Form::button('<i class="glyphicon glyphicon-trash"></i> Delete',['class'=>'btn btn-danger btn-sm','type'=>'submit'])}}
                           {!! Form::close() !!}  
                       </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>              
         </div>
     </div>
 </div>
@endsection