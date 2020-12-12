<header class="bg-white">
  <div class="md:max-w-6xl md:mx-auto px-4">
    <div class="flex items-center justify-between relative">
      <div class="flex items-center">
        <a href="{{ url('/') }}" class="flex-shrink-0 py-3">
          <span class="text-3xl font-semibold font-serif text-gray-900">Flow Blog</span>
        </a>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-2">
            <a href="#" class="bg-gray-200 text-gray-800 px-4 py-1 rounded-md font-medium">首页</a>
            <a href="#" class="hover:bg-gray-200 hover:text-gray-800 px-4 py-1 rounded-md font-medium">归档</a>
            <a href="#" class="hover:bg-gray-200 hover:text-gray-800 px-4 py-1 rounded-md font-medium">留言</a>
            <a href="#" class="hover:bg-gray-200 hover:text-gray-800 px-4 py-1 rounded-md font-medium">关于</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6 space-x-4">
          <button class="w-8 h-8 p-1 rounded-full hover:bg-gray-200 text-gray-600 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-gray-100 focus:ring-indigo-200">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="sr-only">消息通知</span>
          </button>
          <div>
            @include('partials.user')
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
