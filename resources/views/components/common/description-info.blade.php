@props(['error'=>false])

<li class="py-4 px-6">
    <span class="mt-1 {{ $error ? 'text-red-500' : 'text-gray-900' }} flex items-center">
        <x-heroicon-s-information-circle class="w-6 h-6 mr-4"/>
        {{ $slot }}
    </span>
</li>
