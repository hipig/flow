@extends('layouts.admin')

@section('title', '仪表盘')

@section('breadcrumb')
  <div class="my-6 text-xl text-gray-400">欢迎回来，{{ \Auth::user()->name }}</div>
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">仪表盘</h2>
    </div>
    <div class="flex flex-wrap -mx-4">
      <div class="w-1/2 md:w-1/4 px-4 py-2">
        <div class="flex flex-col items-center justify-center bg-white shadow rounded-lg p-5 py-10 md:py-5 md:h-40">
          <h2 class="text-4xl md:text-6xl truncate text-gray-800 font-bold mb-2">2</h2>
          <p class="font-semibold text-gray-500">文章</p>
        </div>
      </div>
      <div class="w-1/2 md:w-1/4 px-4 py-2">
        <div class="flex flex-col items-center justify-center bg-white shadow rounded-lg p-5 py-10 md:py-5 md:h-40">
          <h2 class="text-4xl md:text-6xl truncate text-gray-800 font-bold mb-2">1</h2>
          <p class="font-semibold text-gray-500">分类</p>
        </div>
      </div>
      <div class="w-1/2 md:w-1/4 px-4 py-2">
        <div class="flex flex-col items-center justify-center bg-white shadow rounded-lg p-5 py-10 md:py-5 md:h-40">
          <h2 class="text-4xl md:text-6xl truncate text-gray-800 font-bold mb-2">0</h2>
          <p class="font-semibold text-gray-500">附件</p>
        </div>
      </div>
      <div class="w-1/2 md:w-1/4 px-4 py-2">
        <div class="flex flex-col items-center justify-center bg-white shadow rounded-lg p-5 py-10 md:py-5 md:h-40">
          <h2 class="text-4xl md:text-6xl truncate text-gray-800 font-bold mb-2">1</h2>
          <p class="font-semibold text-gray-500">留言</p>
        </div>
      </div>
    </div>
  </div>
@endsection
