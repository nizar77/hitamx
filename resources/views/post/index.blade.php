@extends('theme_admin/dashboard')
@section('title',"|Post")
@section('styles')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <table class="table table-stripped">
                <thead><tr><th>#</th><th>post</th><th>Action</th></tr></thead>
                    <tbody>
                            @foreach($posts as $post)
                           <tr> <td>{{$post->id}}</td><td>{{$post->isi_post}}</td><td><a href="#" class="btn btn-primary btn-xs">dshds</a></td></tr> 
                         @endforeach
                    </tbody>
            </table>
        </div>
    </div> 
</div>
@endsection
@section('scripts')
@endsection
