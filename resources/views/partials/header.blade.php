<header class="bg-white">
  <div class="md:max-w-6xl md:mx-auto px-4">
    <div class="flex items-center justify-between relative">
      <div class="flex items-center">
        <a href="{{ url('/') }}" class="flex-shrink-0 py-3">
          <span class="text-3xl font-semibold font-serif text-gray-900">Flow Blog</span>
        </a>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-2">
            <a href="#" class="bg-gray-100 text-gray-800 px-4 py-1 rounded-md font-medium">首页</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 px-4 py-1 rounded-md font-medium">归档</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 px-4 py-1 rounded-md font-medium">留言</a>
            <a href="#" class="hover:bg-gray-100 hover:text-gray-800 px-4 py-1 rounded-md font-medium">关于</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6 space-x-4">
          <div>
            @include('partials.user')
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
