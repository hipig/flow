<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()
            ->with('category')
            ->latest('published_at')
            ->latest()
            ->paginate();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(PostRequest $request)
    {
        Auth::user()->posts()->create($request->only([
            'title',
            'cover',
            'body',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'category_id',
            'status',
            'published_at',
        ]));

        return redirect()->route('posts.index')->with('添加文章成功');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post','categories'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->only([
            'title',
            'cover',
            'body',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'category_id',
            'status',
            'published_at',
        ]));
        $post->save();

        return back()->with('success', '编辑文章成功');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', '删除文章成功');
    }
}
