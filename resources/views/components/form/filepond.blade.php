@push('style')
  @once
    <link rel="stylesheet" href="{{ mix('vendor/filepond/filepond.css') }}">
  @endonce
@endpush

@push('afterScript')
  @once
    <script src="{{ mix('vendor/filepond/filepond.js') }}"></script>
  @endonce
@endpush

@php
  $files = explode(',', $value ?? '');

  $filesJson = json_encode($files);
@endphp

<div class="mb-5" x-data="{path: '', filepond: null, files: [], sourceFiles: []}" x-init="
  filepond = FilePond.create($refs.filepond, {
    name: 'image',
    server: {
      url: '/filepond',
      process: {
        url: '/process',
        onload: (response) => {
          path = eval('('+response+')');
          return path;
        }
      },
      revert: '/revert',
      restore: '/load?load=',
      load: '/load?load=',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    }
  });

  @if($value ?? '')
    files = JSON.parse(`{{ $filesJson }}`);
    files.forEach((item) => {
      sourceFiles.push({
        source: item,
        options: {
          type: 'limbo'
        }
      })
    });
    filepond.addFiles(sourceFiles);
  @endif
" x-cloak>
  @if($label ?? null)
    <label for="{{ $name }}" class="form-label block mb-1 font-semibold text-gray-700">
      {{ $label }}
      @if($optional ?? null)
        <span class="text-sm text-gray-500 font-normal">(optional)</span>
      @endif
    </label>
  @endif

  <div class="relative">
    <input x-ref="filepond" type="file" class="{{ $errors->has($name) ? 'filepond-has-error' : '' }}">
    <input type="hidden" name="{{ $name }}" :value="path">

    @error($name)
      <div class="absolute inset-y-0 right-0 pt-2 px-2">
        <svg class="text-red-600 w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path
            d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M13,17h-2v-2h2V17z M13,13h-2V7h2V13z" />
        </svg>
      </div>
    @enderror
  </div>

  @isset($hint)
    <div class="text-sm text-gray-500 my-2 leading-tight help-text">{{ $hint }}</div>
  @endisset

  @error($name)
    <div class="text-red-600 mt-2 text-sm block leading-tight error-text">{{ $message }}</div>
  @enderror
</div>
