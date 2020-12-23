@extends('layouts.admin')

@section('title', '系统设置')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '系统设置'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">系统设置</h2>
      <div class="flex flex-wrap space-x-2">
        <x-button to="#" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-offset-gray-800 focus:ring-indigo-500">配置列表</x-button>
      </div>
    </div>
    <x-card class="overflow-x-auto">
      <x-form action="{{ route('settings.display') }}">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-2/6 px-4">
            <h2 class="font-bold text-xl text-gray-800">网站设置</h2>
            <p class="text-muted mb-4 text-sm">网站的基础信息，包括名称、LOGO 及 SEO</p>
          </div>
          <div class="w-full md:w-3/6 px-4">
            <x-form.input label="网站标题" name="site_title" placeholder="请输入网站标题"></x-form.input>
          </div>
        </div>
      </x-form>
    </x-card>
  </div>
@endsection
