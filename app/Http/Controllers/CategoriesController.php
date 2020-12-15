<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()
            ->latest()
            ->paginate();

        return view('categories.index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->only('name', 'description'));

        return back()->with('success', '添加分类成功');
    }

    public function edit(Category $category)
    {
        return view('categories.form', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->only('name', 'description'));
        $category->save();

        return back()->with('success', '更新分类成功');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', '删除分类成功');
    }
}
