@props(['label'=>'', 'data'=>''])

<li class="pl-3 pr-4 sm:py-3 text-sm list-none">
    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
        <dt class="text-sm font-medium text-gray-500">
            {{ $label }}
        </dt>

        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 col-span-2 sm:items-center flex-col sm:flex-row">
            <span class="flex-grow break-words">{{ $data }}</span>

            <span class="ml-4 flex items-center space-x-2 ml-auto mt-3 sm:mt-0">
                {{ $slot }}
            </span>
        </dd>
    </div>
</li>
