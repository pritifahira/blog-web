<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::active()->get();
        $view_data = [
            'posts' => $posts,
        ];

        return view ('posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tittle = $request->input('tittle');
        $content = $request->input('content');

        Post::create([
            'tittle' => $tittle,
            'content' => $content,
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        $comments = $post->comments()->limit(3)->get();
        $total_comments = $post->total_comments();

        $view_data = [
            'post' => $post,
            'comments' => $comments,
            'total_comments' => $total_comments,
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id',$id)->first();

        $view_data = [
            'post' => $post
        ];
        return view('posts.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tittle = $request->input('tittle');
        $content = $request->input('content');

        Post::where('id',$id)->update([
            'tittle' => $tittle,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect("posts/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();

        return redirect('posts');
    }
}
