@props(['to' => 'javascript:;'])

<a
  href="{{ $to }}"
  {{ $attributes->merge([
    'class' => 'truncate text-sm leading-none mb-1 rounded-lg px-4 py-1 block hover:bg-indigo-100 transition duration-200 ease-out'
  ])}}>
  {{ $slot }}
</a>
