@extends('layouts.admin')

@section('title', '系统设置')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
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
            <x-form.select label="表单类型" name="type" placeholder="请选择类型">
              @foreach(\App\Models\Setting::$typeMap as $key => $item)
                <option value="{{ $key }}">{{ $item }}</option>
              @endforeach
            </x-form.select>
            <x-form.textarea label="配置值" name="value" placeholder="请输入值，可选"></x-form.textarea>
          </div>
        </div>
      </x-form>
    </x-card>
  </div>
@endsection
