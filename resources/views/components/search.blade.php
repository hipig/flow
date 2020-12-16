<div class="mb-5">
  @if($label ?? null)
    <label for="{{ $name }}" class="form-label block mb-1 font-semibold text-gray-700">
      {{ $label }}
      @if($optional ?? null)
        <span class="text-sm text-gray-500 font-normal">(optional)</span>
      @endif
    </label>
  @endif

  <div class="relative">
    <div class="flex items-center absolute inset-y-0 left-0 text-gray-400 px-2">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </div>
    <input
      id="{{ $name }}"
      autocomplete="off"
      type="{{ $type ?? 'text' }}"
      class="block w-full pl-10 shadow-sm rounded-md leading-snug {{ $errors->has($name) ? ' focus:ring-red-500 focus:border-red-500 border-red-500 bg-red-100 pr-10' : ' focus:ring-indigo-500 focus:border-indigo-500 border-gray-300' }}"
      name="{{ $name }}"
      placeholder="{{ $placeholder ?? '' }}"
      value="{{ old($name, $value ?? '') }}"
      {{ ($required ?? false) ? 'required' : '' }}
      {{ $attributes }}
    >

    @isset($hint)
      <div class="text-sm text-gray-500 my-2 leading-tight help-text">{{ $hint }}</div>
    @endisset


    @error($name)
    <div class="flex items-center absolute inset-y-0 right-0 px-3">
      <svg class="text-red-600 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path
          d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M13,17h-2v-2h2V17z M13,13h-2V7h2V13z" />
      </svg>
    </div>

    @enderror
  </div>

  @error($name)
  <div class="text-red-600 mt-2 text-sm block leading-tight error-text">{{ $message }}</div>
  @enderror
</div>
