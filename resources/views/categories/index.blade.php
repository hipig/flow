@extends('layouts.admin')

@section('title', '分类列表')

@section('breadcrumb')
  @include('partials.admin.breadcrumb', [
    'links' => [
        '仪表盘' => route('dashboard'),
        '分类列表'
    ]
  ])
@endsection

@section('content')
  <div class="flex flex-col">
    <div class="flex items-center mb-4 justify-between">
      <h2 class="font-bold text-2xl text-white">分类列表</h2>
    </div>
    <x-card></x-card>
  </div>
@endsection
