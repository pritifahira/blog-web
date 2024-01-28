@extends('layouts.app')

@section('tittle', 'Edit Post')

@section('content')
    <h1>Ubah Postingan</h1>
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="tittle" class="form-label">Judul</label>
        <input type="text" class="form-control" id="tittle" name="tittle" value="{{ $post->tittle }}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Konten</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <form method="POST" action="{{ url("posts/{$post->id}") }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection