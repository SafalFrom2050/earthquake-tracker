<div {{ $attributes->merge(['class' => 'space-y-8 divide-y divide-gray-200 sm:space-y-5']) }}>
    <div class="space-y-6 sm:space-y-5">
        @if(isset($header))
            {{ $header }}
        @endif

        <div class="space-y-6 sm:space-y-5">
            {{ $slot }}
        </div>
    </div>
</div>
