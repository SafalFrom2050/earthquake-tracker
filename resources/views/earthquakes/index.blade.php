<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Earthquake Damages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">

            <div>
                <div class="text-gray-900 dark:text-gray-100">

                    <div class="relative w-full sm:px-6">

                        <div
                            class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">

                            <x-common.auth-session-status :status="session('status') "/>
                            <div class="sm:flex items-center justify-between">
                                <p tabindex="0"
                                   class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">
                                    Incidents Report</p>
                                <div>
                                    <a href="{{ route('earthquake.create') }}"
                                       class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                        <p class="text-sm font-medium leading-none text-white">New Entry</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead>
                                <tr tabindex="0"
                                    class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                                    <th class="font-normal text-left pl-4">Date</th>
                                    <th class="font-normal text-left pl-4">Disaster Type</th>
                                    <th class="font-normal text-left pl-10">Incident Count</th>
                                    <th class="font-normal text-left pl-10">Affected Humans</th>
                                    <th class="font-normal text-left pl-10">Affected Infrastructures</th>
                                    <th class="font-normal text-left pl-10">Affected Animals</th>
                                    <th class="font-normal text-left pl-10">Remarks</th>
                                </tr>
                                </thead>
                                <tbody class="w-full">
                                @foreach($earthquakes as $earthquake)
                                    <x-table.tr-earthquake :$earthquake/>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
