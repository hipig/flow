<header class="bg-gray-800 pb-56">
  <div class="md:max-w-6xl md:mx-auto px-4">
    <div class="flex items-center justify-between relative border-b border-gray-50 border-opacity-5">
      <div class="flex items-center">
        <a href="{{ route('dashboard') }}" class="flex-shrink-0">
          <span class="text-3xl font-semibold font-serif text-gray-100">Flow Admin</span>
        </a>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-8">
            <a href="{{ route('dashboard') }}" class="border-b py-5 font-medium {{ active_class(if_route_pattern('dashboard'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">仪表盘</a>
            <a href="{{ route('settings.display') }}" class="border-b py-5 font-medium {{ active_class(if_route_pattern('settings.*'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">设置</a>
            <a href="{{ route('categories.index') }}" class="border-b py-5 font-medium {{ active_class(if_route_pattern('categories.*'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">分类</a>
            <a href="{{ route('posts.index') }}" class="border-b py-5 font-medium {{ active_class(if_route_pattern('posts.*'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">文章</a>
            <a href="{{ route('pages.index') }}" class="border-b py-5 font-medium {{ active_class(if_route_pattern('pages.*'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">页面</a>
            <a href="#" class="border-b py-5 font-medium {{ active_class(if_route_pattern('contacts.*'), 'text-gray-100', 'border-transparent text-gray-400 hover:text-gray-100') }}">留言</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6 space-x-4">
          <button title="消息通知" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="sr-only">消息通知</span>
          </button>
          <div>
            @include('partials.admin.user')
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
