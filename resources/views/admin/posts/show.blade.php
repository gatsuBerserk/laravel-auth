@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>
                    {{$post->title}}
                </h1>
            </div>
            <div class="img d-flex justify-content-center">
                <figure>
                    <img src="{{$post->img_url}}" alt="{{$post->title}}">
                </figure>
            </div>
            <div class="description text-center">
                <p>
                    {{$post->description}}
                </p>
            </div>
            <div class="by text-center">
                <h5> Created by : {{$post->author}}</h5>
                <p>{{$post->created_at}}</p>

            </div>

        </div>
    </div>
@endsection