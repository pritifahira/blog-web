@extends('layouts.app')

@section('tittle', 'Add Post')

@section('content')
    <h1>Buat Postingan</h1>
    <form method="POST" action="{{ url('posts') }}" class="form-control">
    @csrf
    <div class="mb-3">
        <label for="tittle" class="form-label">Judul</label>
        <input type="text" class="form-control" id="tittle" name="tittle">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Konten</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <div class="mb-3">
        <a href="{{ url("posts") }}">< Kembali</a>
    </div>
@endsection