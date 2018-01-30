@extends('theme_admin/dashboard')
@section('title',"|Post")
@section('styles')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
          <h2><a href="{{route('posthitam.create')}}" class="pull-right"><i class="glyphicon glyphicon-plus-sign"></i></a></h2>
           <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>post</th>
                    <th>isi_post</th>
                    <th class="text-right">tags</th>
                    <th class="text-right">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr><td>{{$post->id}}</td>
                            <td>{{$post->judul}}</td>
                            <td>{{$post->isi_post}}</td>
                              <td class="text-right">@foreach($post->tags as $tg)<small>{{$tg->tag}}&nbsp;|&nbsp;</small>@endforeach</td>
                            <td class="text-right"><a href="{{route('posthitam.show',$post->id)}}" class="btn btn-primary btn-xs">view</a>
                            </td>
                        </tr> 
                         @endforeach
                    </tbody>
            </table>
        </div>
    </div> 
</div>
@endsection
@section('scripts')
@endsection
