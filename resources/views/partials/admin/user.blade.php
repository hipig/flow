@auth
  <x-dropdown>
    <button type="button" class="bg-gray-800 rounded-full shadow-sm font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
      <img src="https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028" alt="Profile Photo" class="h-8 w-8 object-cover rounded-full">
    </button>
    <x-slot name="menu">
      <x-dropdown.menu>
        <div class="text-gray-400 text-sm truncate px-4 py-2">Hi, {{ \Auth::user()->name }}</div>
        <x-dropdown.item to="{{ url('/') }}" class="flex items-center">
          <svg class="text-gray-400 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          <span>回首页</span>
        </x-dropdown.item>
        <x-dropdown.item to="{{ route('posts.create') }}" class="flex items-center {{ active_class(if_route('posts.create'), 'bg-indigo-100') }}">
          <svg class="text-gray-400 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
          </svg>
          <span>发布文章</span>
        </x-dropdown.item>
        <x-dropdown.item to="{{ route('profile.edit') }}" class="flex items-center {{ active_class(if_route('profile.edit'), 'bg-indigo-100') }}">
          <svg class="text-gray-400 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
          <span>个人资料</span>
        </x-dropdown.item>
        <x-dropdown.item to="{{ route('settings.display') }}" class="flex items-center {{ active_class(if_route('settings.display'), 'bg-indigo-100') }}">
          <svg class="text-gray-400 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <span>系统设置</span>
        </x-dropdown.item>
        <x-dropdown.item class="flex items-center" x-on:click.prevent="document.getElementById('logout-form').submit()">
          <svg class="text-gray-400 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
          </svg>
          <span>退出</span>
          <x-form action="{{ route('logout') }}" id="logout-form"></x-form>
        </x-dropdown.item>
      </x-dropdown.menu>
    </x-slot>
  </x-dropdown>
@endauth
