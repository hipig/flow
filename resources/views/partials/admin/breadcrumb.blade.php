@if($links)
  <div class="flex flex-wrap space-x-2 items-center my-6">
    @foreach($links as $key => $value)
      @if($loop->last && is_numeric($key))
        <span class="text-indigo-500 truncate">{{ $value }}</span>
      @else
        <a href="{{ $value }}" class="text-gray-400 hover:text-gray-100 hover:underline">{{ $key }}</a>
        <svg class="text-gray-400 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      @endif
    @endforeach
  </div>
@endif
