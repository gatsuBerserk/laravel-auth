@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            @foreach ($posts as $post)
                <div class="col-4">
                    <div class="card m-5" style="width: 18rem;">
                        <img src="{{$post->img_url}}" class="card-img-top" alt="{{$post->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->create_at}}</p>
                            <a href="{{route("admin.posts.show",$post->id)}}" class="btn btn-primary">Leggi Tutto</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
@endsection