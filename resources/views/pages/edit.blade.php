@extends('layouts.admin')

@section('title', '编辑 ' . $page->title)

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '页面列表' => route('pages.index'),
        '编辑'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">编辑 {{ $page->title }}</h2>
    </div>
    <x-card>
      <x-form action="{{ route('pages.update', $page) }}" method="put">
        <x-form.input label="名称" name="name" value="{{ $page->name }}" placeholder="请输入名称" readonly></x-form.input>
        <x-form.input label="标题" name="title" value="{{ $page->title }}" placeholder="请输入标题"></x-form.input>
        <x-form.quill-editor label="主要内容" name="content" value="{!! $page->content !!}" placeholder="请输入主要内容"></x-form.quill-editor>
        <x-form.input label="SEO 关键词" name="seo_keywords" value="{{ $page->seo_keywords }}" placeholder="请输入SEO 关键词"></x-form.input>
        <x-form.textarea label="SEO 描述" name="seo_description" value="{{ $page->seo_description }}" placeholder="请输入SEO 描述"></x-form.textarea>
        <x-form.switch label="状态" name="status" value="{{ $page->status }}"></x-form.switch>
        <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">保存</x-button>
      </x-form>
    </x-card>
  </div>
@endsection
