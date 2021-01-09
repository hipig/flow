@extends('layouts.admin')

@section('title', '系统设置')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '配置列表' => route('settings.index'),
        '添加'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">添加配置</h2>
    </div>
    <x-card class="overflow-x-auto">
      <x-form action="{{ route('settings.store') }}">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-2/6 px-4">
            <h2 class="font-bold text-xl text-gray-800">基础信息</h2>
          </div>
          <div class="w-full md:w-3/6 px-4">
            <x-form.select label="分组" name="group" placeholder="请选择分组">
              @foreach(config('flow.setting_groups') as $key => $item)
                <option value="{{ $key }}">{{ $item['label'] }}</option>
              @endforeach
            </x-form.select>
            <x-form.input label="配置名称" name="label" placeholder="请输入配置名称"></x-form.input>
            <x-form.input label="配置标识" name="key" placeholder="请输入配置标识"></x-form.input>
            <x-form.textarea label="配置值" name="value" placeholder="请输入值，可选"></x-form.textarea>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-2/6 px-4">
            <h2 class="font-bold text-xl text-gray-800">额外信息</h2>
          </div>
          <div class="w-full md:w-3/6 px-4">
            <x-form.select label="表单类型" name="type" placeholder="请选择类型">
              @foreach(\App\Models\Setting::$typeMap as $key => $item)
                <option value="{{ $key }}">{{ $item }}</option>
              @endforeach
            </x-form.select>
            <x-form.textarea label="表单选项" name="value" placeholder="请输入表单选项"></x-form.textarea>
            <x-form.switch label="状态" name="status" :value="true"></x-form.switch>
          </div>
        </div>
        <div class="border-b border-gray-200 my-8 -mx-5"></div>
        <div class="text-right">
          <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">确认</x-button>
        </div>
      </x-form>
    </x-card>
  </div>
@endsection
