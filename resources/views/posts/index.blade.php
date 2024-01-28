@extends('layouts.app')
@section('tittle', 'Selamat Datang')

@section('content')
<div class="jumbotron">
        <h1 class="display-4">Blog Politeknik STMI Jakarta</h1>
        <p class="lead">Selamat datang di blog kami. Temukan berbagai informasi menarik di sini.</p>
        <a class="btn btn-success btn-sm mb-3" href="{{ url('posts/create') }}">+ Buat Postingan</a>
    </div>

    @foreach ($posts as $post)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post->tittle }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <p class="card-text"><small class="text-muted">Last updated at {{ date("d M Y H:i", strtotime($post->created_at)) }}</small></p>
            <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
            <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
    @endforeach
@endsection
