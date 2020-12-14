<button
  type="{{ $type ?? 'button' }}"
  name="{{ $name ?? '' }}"
  {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center py-2 px-5 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
  ])}}>
  {{ $slot }}
</button>
