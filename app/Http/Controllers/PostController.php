<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // ==========================================
    // USER DASHBOARD
    // ==========================================

    public function index()
    {
        $posts = Post::latest()->get();

        return view('dashboard', compact('posts'));
    }
    public function show(Post $post)
{
    return view('posts.show', compact('post'));
}


    // ==========================================
    // ADMIN DASHBOARD
    // ==========================================

    public function adminIndex()
    {
        $posts = Post::latest()->get();

        return view('admin.dashboard', compact('posts'));
    }


    // ==========================================
    // CREATE POST
    // ==========================================

    public function create()
    {
        return view('admin.create');
    }


    // ==========================================
    // STORE POST
    // ==========================================

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('posts', 'public');
        }

        Post::create($data);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Post created successfully.');
    }


    // ==========================================
    // EDIT POST
    // ==========================================

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }


    // ==========================================
    // UPDATE POST
    // ==========================================

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('posts', 'public');
        }

        $post->update($data);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Post updated successfully.');
    }


    // ==========================================
    // DELETE POST
    // ==========================================

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Post deleted successfully.');
    }
}

