@if($label ?? null)
    <x-inputs.label for="{{ $name }}">{{ $label }}</x-inputs.label>
@endif
<div class="rounded-md shadow-sm relative {{ $wClass ?? '' }}">
    <textarea name="{{ $name }}"
              id="{{ $name }}"
              class="form-textarea rounded border-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error($name) pr-10 border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror {{ $class ?? '' }}"
        {{ $attributes }}
                >{{ old($name, $value ?? '') }}</textarea>

    @include('components.inputs.error-icon')
</div>
@include('components.inputs.error-message')
