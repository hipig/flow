@extends('layouts.app')

@section('title', '登录')

@section('header')
@endsection

@section('content')
  <div class="md:mt-24">
    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center mb-8">
      <a href="{{ url('/') }}" class="text-3xl font-semibold font-serif text-gray-900">Flow Blog</a>
    </div>
    <x-card class="sm:mx-auto sm:max-w-md p-8">
      <x-form action="{{ route('login') }}" method="post">
        <x-form.input label="用户名" name="email" placeholder="请输入用户名"></x-form.input>
        <x-form.input type="password" label="密码" name="password" placeholder="请输入密码"></x-form.input>
        <div class="mb-6 flex items-center justify-between">
          <x-form.checkbox name="remember" value="1">记住我</x-form.checkbox>
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">忘记密码？</a>
        </div>

        <x-button type="submit" class="w-full text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-indigo-500">登录</x-button>
      </x-form>
    </x-card>
  </div>
@endsection

@section('footer')
  <footer>
    <div class="md:max-w-6xl md:mx-auto px-4 py-10">
      <div class="flex flex-wrap items-center justify-center">
        <div class="text-sm inline-flex">©2020 Flow Blog. All rights reserved.</div>
      </div>
    </div>
  </footer>
@endsection
