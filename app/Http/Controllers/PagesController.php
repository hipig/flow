<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function index(Request $request)
    {
        $pages = Page::query()
            ->latest()
            ->paginate();

        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(PageRequest $request)
    {
        Page::create($request->only([
            'name',
        ]));

        return redirect()->route('pages.index')->with('添加页面成功');
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $page->fill($request->only([
            'title',
            'name',
            'content',
            'seo_keywords',
            'seo_description',
            'status',
        ]));
        $page->save();

        return back()->with('success', '编辑页面成功');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return back()->with('success', '删除页面成功');
    }
}
