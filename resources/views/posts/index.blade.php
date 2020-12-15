@extends('layouts.admin')

@section('title', '文章列表')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '文章列表'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">文章列表</h2>
      <div class="flex flex-wrap space-x-2">
        <x-button to="{{ route('posts.create')}}" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-offset-gray-800 focus:ring-indigo-500">添加文章</x-button>
      </div>
    </div>
    <x-card class="overflow-x-auto">
      <div class="flex flex-col">
        <div class="flex items-center">
          {{--     搜索框占位    --}}
        </div>
        <div class="flex flex-col -mx-5">
          <x-table>
            <x-slot name="head">
              <x-table.th>标题</x-table.th>
              <x-table.th>分类</x-table.th>
              <x-table.th>浏览数</x-table.th>
              <x-table.th>发布时间</x-table.th>
              <x-table.th>状态</x-table.th>
            </x-slot>
            @forelse($posts as $post)
              <tr>
                <x-table.td>
                  <div class="text-gray-700">
                    <div class="font-semibold text-lg truncate">
                      {{ $post->title }}
                    </div>
                    <div class="flex flex-wrap space-x-2 mt-1 text-sm">
                      <a class="text-gray-600" href="{{ route('posts.edit', $post->uuid) }}">编辑</a>
                      <a target="_blank" class="text-gray-600" href="{{ route('posts.show', $article->slug) }}">预览</a>
                      <x-modal size="sm:max-w-md">
                        <button type="button" class="focus:outline-none text-red-600 hover:text-red-700">删除</button>
                        <x-slot name="content">
                          <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                              <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                删除文章
                              </h3>
                              <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                  是否确认删除？文章的封面会一并删除。
                                </p>
                              </div>
                            </div>
                          </div>
                        </x-slot>
                        <x-slot name="action">
                          <x-form action="{{ route('posts.destroy', $post) }}" method="delete">
                            <x-button type="submit" name="confirmDelete" class="w-full sm:w-auto sm:text-sm border border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500 sm:ml-3">确认</x-button>
                          </x-form>
                        </x-slot>
                      </x-modal>
                    </div>
                  </div>
                </x-table.td>
                <x-table.td>
                  {{ optional($post->category)->name }}
                </x-table.td>
                <x-table.td>
                  <span class="text-sm text-gray-500">0</span>
                </x-table.td>
                <x-table.td>
                  {{ $post->published_at }}
                </x-table.td>
                <x-table.td>
                  <x-badge type="{{ $post->status ? 'success' : 'info' }}">{{ $post->status ? '启用' : '禁用' }}</x-badge>
                </x-table.td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-5 py-10 text-gray-500 text-center">暂无数据。</td>
              </tr>
            @endforelse
          </x-table>
          {{ $posts->links('partials.pagination') }}
        </div>
      </div>
    </x-card>
  </div>
@endsection
