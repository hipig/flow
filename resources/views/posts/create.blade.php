@extends('layouts.admin')

@section('title', '添加文章')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '文章列表' => route('posts.index'),
        '添加'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">新文章</h2>
    </div>
    <x-card>
      <x-form action="{{ route('posts.store') }}" method="post">
        <div class="flex flex-wrap -mx-4">
          <div class="flex-1 px-4">
            <x-form.input label="标题" name="title" placeholder="请输入标题"></x-form.input>
            <x-form.upload label="封面" name="cover" placeholder="PNG, JPG, GIF 格式的图片不能超过 10MB"></x-form.upload>
            <x-form.textarea label="主要内容" name="body" placeholder="请输入主要内容"></x-form.textarea>
            <x-form.input label="SEO 标题" name="seo_title" placeholder="请输入SEO 标题"></x-form.input>
            <x-form.input label="SEO 关键词" name="seo_keywords" placeholder="请输入SEO 关键词"></x-form.input>
            <x-form.textarea label="SEO 描述" name="seo_description" placeholder="请输入SEO 描述"></x-form.textarea>
          </div>
          <div class="w-full sm:w-1/4 px-4">
            <x-form.select label="分类" name="category_id">
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </x-form.select>
            <x-form.input label="发布时间" name="published_at" placeholder="请输入发布时间"></x-form.input>
            <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">保存</x-button>
          </div>
        </div>

      </x-form>
    </x-card>
  </div>
@endsection
