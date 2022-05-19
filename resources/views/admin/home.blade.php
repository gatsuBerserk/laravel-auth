@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <button  class="btn btn-success"> <a href="{{ route("admin.posts.index") }}">Visualizza tutti i Posts </a></button>
</div>
    
@endsection