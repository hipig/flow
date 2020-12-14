@extends('layouts.admin')

@section('title', '分类列表')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '分类列表'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">分类列表</h2>
    </div>
    <x-card>
      <div class="flex flex-col">
        <x-form action="{{ route('categories.store') }}" method="post">
          <div class="flex py-1 space-x-2">
            <div class="w-64">
              <x-form.input name="name" placeholder="分类名称..." />
            </div>
            <div>
              <x-button type="submit" name="createCategory" class="bg-gray-800 text-white shadow">创建</x-button>
            </div>
          </div>
        </x-form>
      </div>
    </x-card>
  </div>
@endsection
