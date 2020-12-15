@extends('layouts.admin')

@section('title', '编辑 ' . $category->name)

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '分类列表' => route('categories.index'),
        '编辑'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">编辑 {{ $category->name }}</h2>
    </div>
    <x-card>
      <x-form action="{{ route('categories.update', $category) }}" method="put">
        <x-form.input label="名称" name="name" value="{{ $category->name }}" placeholder="请输入名称"></x-form.input>
        <x-form.textarea label="描述" name="description" value="{{ $category->description }}" placeholder="请输入描述"></x-form.textarea>
        <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">保存</x-button>
      </x-form>
    </x-card>
  </div>
@endsection
