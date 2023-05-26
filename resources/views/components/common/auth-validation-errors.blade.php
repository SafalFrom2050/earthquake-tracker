@props(['errors'])

@if ($errors->any())
    <div x-data="{open:true}">
        <div x-show="open" {{ $attributes->merge(['class' => 'rounded-md bg-red-50 p-4']) }}>
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <x-heroicon-s-x-circle class="text-red-400 hover:text-red-700 cursor-pointer" @click="open=false"/>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-600">
                        {{ trans_choice('validation.errors', $errors->count()) }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endif
