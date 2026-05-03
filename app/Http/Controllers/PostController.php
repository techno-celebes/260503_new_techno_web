<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index($category = null)
    {
        $query = Post::with('user');

        if ($category) {
            // For now, we'll filter by title containing the category name
            // In a real app, you might want to add a category column to posts table
            $query->where('title', 'like', '%'.$category.'%');
        }

        $posts = $query->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function articles()
    {
        $posts = Post::with('user')->latest()->get();

        return view('posts.articles', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load('user');

        $relatedPosts = Post::where('id', '!=', $post->id)
            ->latest()
            ->limit(4)
            ->get();

        $prevPost = Post::where('id', '<', $post->id)
            ->latest('id')
            ->first();

        $nextPost = Post::where('id', '>', $post->id)
            ->oldest('id')
            ->first();

        return view('post.show', compact('post', 'relatedPosts', 'prevPost', 'nextPost'));
    }

    public function edit(Post $post)
    {
        return view('dashboard.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $post->update($data);

        return redirect()->route('dashboard.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('dashboard.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
