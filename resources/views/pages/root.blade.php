@extends('layouts.app')

@section('title', '首页')

@section('content')
  <div class="flex flex-wrap -mx-4">
    <div class="w-full md:w-3/4 px-4">
      <div class="flex flex-col">
        @include('posts.posts-loader')
      </div>
    </div>
    <div class="w-full md:w-1/4 px-4">
      <h1 class="text-2xl">这是侧边栏</h1>
    </div>
  </div>
@endsection
