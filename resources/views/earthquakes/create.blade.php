<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Earthquake Damages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <x-common.auth-session-status :status="session('status')" />

                <x-common.auth-validation-errors class="m-3" :errors="$errors"/>
                {{--                <p>{{$errors}}</p>--}}

                <div class="flex px-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('earthquake.store') }}"
                          class="mt-6 space-y-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 w-full gap-x-3">
                        @csrf

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="disaster_type"
                            label="Disaster Type"
                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="incident_count"
                            label="Incident Count"
                            type="number"
                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="incident_date"
                            label="Incident Date"
                            type="date"
                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="remarks"
                            label="Remarks"
                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="human_male"
                            label="Human Male"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="human_female"
                            label="Human Female"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="human_others"
                            label="Human Others"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="infrastructure_house"
                            label="Infrastructure House"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="infrastructure_hospital"
                            label="Infrastructure Hospital"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="infrastructure_school"
                            label="Infrastructure School"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="infrastructure_office_building"
                            label="Infrastructure Office Building"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="infrastructure_others"
                            label="Infrastructure Others"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="animal_cow"
                            label="Animal Cow"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="animal_buffalo"
                            label="Animal Buffalo"
                            type="number"

                            required
                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="animal_goat_sheep"
                            label="Animal Goat/Sheep"
                            required
                            type="number"

                        />

                        <x-inputs.text
                            placeholder="Example: ..."
                            name="animal_hen_chicken"
                            label="Animal Hen/Chicken"
                            type="number"

                            required
                        />

                        <div class="col-span-3 flex justify-end items-center">
                            <x-primary-button>{{ __('Create') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
