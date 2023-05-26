@props(['message'])

@if ($message)
    <div {{ $attributes->merge(['class' => 'rounded-md bg-green-50 p-4']) }}>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">
                    {{ $message }}
                </p>
            </div>
    </div>
@endif
