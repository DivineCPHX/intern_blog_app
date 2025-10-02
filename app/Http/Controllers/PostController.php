<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home () {
        return view('home.index');
    }

    public function about () {
        return view('about.index');
    }

    public function index () {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show ($id) {
        $post = Post::findOrFail($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        return view('posts.show', compact('post'));
    }

    public function create () {
        return view('posts.create');
    }

    public function store (Request $request) {
        $request->validate([
            'title' => 'required|string|min:5|max:255|unique:posts,title',
            'content' => 'required|string|min:10',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    public function contact () {
        return view ('contact.index');
    }

    // public function edit ($id) {
    //     $post = Post::findOrFail($id);

    //     if (!$post) {
    //         return redirect()->route('posts.index')->with('error', 'Post not found');
    //     }

    //     return view('posts.edit', compact('post'));
    // }

    // public function update (Request $request, $id) {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     $post = Post::findOrFail($id);

    //     if (!$post) {
    //         return redirect()->route('posts.index')->with('error', 'Post not found');
    //     }

    //     $post->update($request->all());

    //     return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    // }

    // public function destroy ($id) {
    //     $post = Post::findOrFail($id);

    //     if (!$post) {
    //         return redirect()->route('posts.index')->with('error', 'Post not found');
    //     }

    //     $post->delete();

    //     return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    // }


}
