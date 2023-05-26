@php($name = str_replace(']', '', str_replace('[', '.', $name)))

<div class="flex flex-col">
    @if($label ?? null)
        <x-inputs.label for="{{ $name }}">{{ $label }}</x-inputs.label>
    @endif

    <div class="w-full relative {{ $wClass ?? '' }}">
        <input id="{{ $name }}"
               class="w-full mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm @error($name) pr-10 border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror {{ $class ?? '' }}"
               type="{{ $type ?? 'text' }}"
               value="{{ old($name, $value ?? '') }}"
            {{ $attributes }}
        >
        @include('components.inputs.error-icon')
    </div>
    @include('components.inputs.error-message')

</div>
