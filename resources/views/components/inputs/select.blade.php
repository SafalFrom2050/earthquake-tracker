@props(['options' => [], 'name', 'label', 'value', 'wClass', 'class'])

@if($label ?? null)
    <x-inputs.label for="{{ $name }}">{{ $label }}</x-inputs.label>
@endif
@php ($ename = str_replace(']', '', str_replace('[', '.', $name)))
<div class="rounded-md shadow-sm relative {{ $wClass ?? '' }}">
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        class="block form-select w-full transition duration-150 ease-in-out sm:text-sm text-gray-700 sm:leading-5 border-gray-300 rounded-md @error($ename) pr-10 border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror {{ $class ?? '' }}"
        {{ $attributes }}
    >
        <option value="">{{ $emptyText ?? 'Please select any' }}</option>
        @foreach($options as $key => $option)
            <option value="{{ $key }}"
                    @if(old($ename, $value ?? '') == $key)
                    selected="selected"
                @endif
            >
                {{ $option }}
            </option>
        @endforeach
    </select>
{{--    @include('components.inputs.partial.error-icon')--}}
</div>
@include('components.inputs.error-message')
