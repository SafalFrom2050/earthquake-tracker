@props(['status'])

@if ($status)
    <div class="border border-green-400/60 bg-green-400/20 mb-3 rounded px-3 py-2">
        <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
            {{ $status }}
        </div>
    </div>
@endif
