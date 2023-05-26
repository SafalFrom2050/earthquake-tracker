@props(['required'=>true])
<label {{ $attributes->merge(['class'=>'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $slot }}
    @if($required)
        <span class="text-red-400">*</span>
    @endif
</label>
