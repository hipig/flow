@extends('layouts.admin')

@section('title', '配置列表')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '列表'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">配置列表</h2>
      <div class="flex flex-wrap space-x-2">
        <x-button to="{{ route('settings.create')}}" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-offset-gray-800 focus:ring-indigo-500">添加配置</x-button>
      </div>
    </div>
    <x-card class="overflow-x-auto">
      <div class="flex flex-col">
        <x-search name="keyword" placeholder="配置标题..."></x-search>
        <div class="flex flex-col -mx-5">
          <x-table>
            <x-slot name="head">
              <x-table.th>分组</x-table.th>
              <x-table.th>名称</x-table.th>
              <x-table.th>标识</x-table.th>
              <x-table.th>类型</x-table.th>
              <x-table.th>状态</x-table.th>
            </x-slot>
            @forelse($settings as $setting)
              <tr>
                <x-table.td>
                  {{ $setting->group_name }}
                </x-table.td>
                <x-table.td>
                  {{ $setting->label }}
                </x-table.td>
                <x-table.td>
                  {{ $setting->key }}
                </x-table.td>
                <x-table.td>
                  {{ \App\Models\Setting::$typeMap[$setting->type] }}
                </x-table.td>
                <x-table.td>
                  <x-badge type="{{ $setting->status ? 'success' : 'default' }}">{{ $setting->status ? '启用' : '禁用' }}</x-badge>
                </x-table.td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-5 py-10 text-gray-500 text-center">暂无数据。</td>
              </tr>
            @endforelse
          </x-table>
          {{ $settings->links('partials.pagination') }}
        </div>
      </div>
    </x-card>
  </div>
@endsection
