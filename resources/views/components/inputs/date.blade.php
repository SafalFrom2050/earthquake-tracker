@if($label ?? null)
    @include('label')
@endif
@php($name = str_replace(']', '', str_replace('[', '.', $name)))
<div class="relative {{ $wClass ?? '' }}">
    <input id="{{ $name }}"
           class="rounded-md block border-gray-300 sm:text-sm sm:leading-5 transition duration-150 ease-in-out @error($name) border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror {{ $class ?? '' }}"
           type="{{ $type ?? 'date' }}"
           value="{{ old($name, $value ?? '') }}"
        {{ $attributes }}
    >
{{--    @include('components.inputs.partial.error-icon')--}}
</div>
@include('components.inputs.error-message')
