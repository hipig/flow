@extends('layouts.admin')

@section('title', '个人资料')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '个人资料'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">个人资料</h2>
    </div>
    <x-card class="overflow-x-auto">
      <x-form action="{{ route('profile.update') }}" method="put">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-2/6 px-4">
            <h2 class="font-bold text-xl text-gray-800">账户详细资料</h2>
          </div>
          <div class="w-full md:w-3/6 px-4">
            <x-form.input label="昵称" name="name" value="{{ auth()->user()->name }}" placeholder="请输入昵称"></x-form.input>
            <x-form.input label="邮箱地址" name="email" value="{{ auth()->user()->email }}" placeholder="请输入邮箱地址"></x-form.input>
            <x-form.input label="新密码" type="password" name="password" placeholder="请输入新密码"></x-form.input>
            <x-form.input label="确认密码" type="password" name="password_confirmation" placeholder="请输入确认密码"></x-form.input>
            <x-button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-800">保存</x-button>
          </div>
        </div>
      </x-form>
    </x-card>
  </div>
@endsection
