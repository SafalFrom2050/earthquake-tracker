<div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{ $heading }}
    </h3>
    @if(isset($subHeading))
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            {{ $subHeading }}
        </p>
    @endif
</div>
