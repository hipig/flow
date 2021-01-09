@extends('layouts.admin')

@section('title', '系统设置')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '设置'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">系统设置</h2>
      <div class="flex flex-wrap space-x-2">
        <x-button to="{{ route('settings.index')}}" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-offset-gray-800 focus:ring-indigo-500">配置列表</x-button>
      </div>
    </div>
    <x-card class="overflow-x-auto">
      <x-form action="{{ route('settings.display') }}" method="put">
        @foreach($settings as $key => $item)
          <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-2/6 px-4">
              <h2 class="font-bold text-xl text-gray-800">{{ \App\Models\Setting::$groupType[$key]['label'] ?? '' }}</h2>
              <p class="text-muted mb-4 text-sm">{{ \App\Models\Setting::$groupType[$key]['description'] ?? '' }}</p>
            </div>
            <div class="w-full md:w-3/6 px-4">
              @foreach($item as $setting)
                @switch($setting->type)
                  @case(\App\Models\Setting::TYPE_SELECT)
                    <x-form.select
                      label="{{ $setting->label }}"
                      name="{{ $setting->key }}"
                      value="{{ $setting->value }}"
                      placeholder="{{ $setting->placeholder ?? '' }}">
                      @foreach($setting->options as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                      @endforeach
                    </x-form.select>
                    @break
                  @default
                    <x-dynamic-component
                      component="{{ 'form.' . $setting->type }}"
                      label="{{ $setting->label }}"
                      name="{{ $setting->key }}"
                      value="{{ $setting->value }}"
                      placeholder="{{ $setting->placeholder ?? '' }}" />
                @endswitch
              @endforeach
            </div>
          </div>
        @endforeach
        <div class="border-b border-gray-200 my-8 -mx-5"></div>
        <div class="text-right">
          <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">保存</x-button>
        </div>
      </x-form>
    </x-card>
  </div>
@endsection
