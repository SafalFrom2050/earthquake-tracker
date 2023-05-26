@props(['noBorder'=>false])

<ul class="{{ ! $noBorder ? 'border border-gray-200' : ''}} rounded-md divide-y divide-gray-200">
    {{ $slot }}
</ul>

