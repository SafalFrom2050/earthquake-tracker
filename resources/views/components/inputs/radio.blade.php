@props(['options' => [], 'name', 'value', 'wClass', 'class'])
<div class="{{ $wClass ?? '' }}">
    @foreach($options as $key => $option)
        <div class="flex items-center @if($loop->index != 0) mt-2 @endif">
            <input name="{{ $name }}"
                   id="{{ $name.$key }}"
                   value="{{ $key }}"
                   @if((string) old($name, $value ?? '') === (string) $key)
                   checked="checked"
                   @endif
                   type="radio"
                   class="form-radio h-4 w-4 @error($name) text-red-600 @else text-indigo-600 @enderror transition duration-150 ease-in-out  {{ $class ?? '' }}"
                {{ $attributes }}
            >
            <label for="{{ $name.$key }}" class="ml-3">
                <span class="block text-sm leading-5 font-medium text-gray-700 @error($name) text-red-600 @enderror">{{ $option }}</span>
            </label>
        </div>
    @endforeach
    @include('components.inputs.error-message')
</div>
