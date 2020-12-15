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
    <x-card class="overflow-x-auto">
      <div class="flex flex-col">
        <div class="flex items-center">
          <x-form action="{{ route('categories.store') }}" method="post">
            <div class="flex py-1 space-x-2">
              <div class="w-64">
                <x-form.input name="name" placeholder="分类名称..." />
              </div>
              <div>
                <x-button type="submit" name="createCategory" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">创建</x-button>
              </div>
            </div>
          </x-form>
        </div>
        <div class="flex flex-col -mx-5">
          <x-table>
            <x-slot name="head">
              <x-table.th>名称</x-table.th>
              <x-table.th>文章总数</x-table.th>
              <x-table.th>操作</x-table.th>
            </x-slot>
            @forelse($categories as $category)
              <tr>
                <x-table.td>
                  <span class="font-semibold text-gray-800">{{ $category->name }}</span>
                </x-table.td>
                <x-table.td>
                  <span class="text-sm text-gray-500">0 篇</span>
                </x-table.td>
                <x-table.td>
                  <div class="space-x-2">
                    <a href="{{ route('categories.edit', $category) }}" class="focus:outline-none text-blue-500 hover:text-blue-600">编辑</a>
                    <x-modal size="sm:max-w-md">
                      <button type="button" class="focus:outline-none text-red-500 hover:text-red-600">删除</button>
                      <x-slot name="content">
                        <div class="sm:flex sm:items-start">
                          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                          </div>
                          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                              删除分类
                            </h3>
                            <div class="mt-2">
                              <p class="text-sm text-gray-500">
                                是否确认删除？分类下的文章会一并删除。
                              </p>
                            </div>
                          </div>
                        </div>
                      </x-slot>
                      <x-slot name="action">
                        <x-form action="{{ route('categories.destroy', $category) }}" method="delete">
                          <x-button type="submit" name="confirmDelete" class="w-full sm:w-auto sm:text-sm border border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500 sm:ml-3">确认</x-button>
                        </x-form>
                      </x-slot>
                    </x-modal>
                  </div>
                </x-table.td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="px-5 py-10 text-gray-500 text-center">暂无数据。</td>
              </tr>
            @endforelse
          </x-table>
          {{ $categories->links('partials.pagination') }}
        </div>
      </div>
    </x-card>
  </div>
@endsection
