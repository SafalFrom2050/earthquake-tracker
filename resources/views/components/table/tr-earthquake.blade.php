@props([
    'earthquake',
])

<tr tabindex="0"
    class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
    <td class="pl-4">
        <p class="font-medium">{{$earthquake->incident_date->format('d-m-Y')}}</p>
        <p class="text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">{{$earthquake->incident_date->diffForHumans()}}</p>
    </td>
    <td class="pl-4 cursor-pointer">
        <div class="flex items-center">

            <div>
                <p class="font-medium">{{$earthquake->disaster_type}}</p>
                {{--                <p class="text-xs leading-3 text-gray-600 dark:text-gray-200  pt-2">--}}
                {{--                    Herman Group</p>--}}
            </div>
        </div>
    </td>
    <td class="pl-10">
        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">
            {{$earthquake->incident_count}}
        </p>
        {{--        <div class="w-24 h-3 bg-gray-100 dark:bg-gray-700  rounded-full mt-2">--}}
        {{--            <div class="w-20 h-3 bg-green-progress rounded-full"></div>--}}
        {{--        </div>--}}
    </td>
    <td class="group pl-10 ">
        <p class="font-medium">{{$earthquake->human_male + $earthquake->human_female + $earthquake->human_others}}</p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->human_male}} Male ·
            {{$earthquake->human_female}} Female ·
        </p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->human_others}} Others
        </p>
    </td>
    <td class="group pl-10">
        <p class="font-medium">{{$earthquake->infrastructure_house + $earthquake->infrastructure_hospital + $earthquake->infrastructure_school + $earthquake->infrastructure_office_building + $earthquake->infrastructure_others}}</p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->infrastructure_house}} Houses ·
            {{$earthquake->infrastructure_hospital}} Hospitals ·
        </p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->infrastructure_school}} Schools ·
            {{$earthquake->infrastructure_office_building}} Office Buildings ·
            {{$earthquake->infrastructure_others}} Others
        </p>


    </td>

    <td class="group pl-10">
        <p class="font-medium">{{$earthquake->animal_cow + $earthquake->animal_buffalo + $earthquake->animal_goat_sheep + $earthquake->animal_hen_chicken}}</p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->animal_cow}} Cows ·
            {{$earthquake->animal_buffalo}} Buffaloes ·
        </p>
        <p class="group-hover:block hidden text-xs leading-3 text-gray-600 dark:text-gray-200  mt-2">
            {{$earthquake->animal_goat_sheep}} Goat/Sheep ·
            {{$earthquake->animal_hen_chicken}} Hen/Chicken
        </p>

    </td>
    <td class="pl-10">
        <pre>
            <p class="line-clamp-1 text-xs font-normal leading-none text-gray-800 dark:text-white max-w-[100px]">{{$earthquake->remarks}}</p>
        </pre>
    </td>


    <td class="px-7 2xl:px-0 group">
        <button class="w-5 group-focus:ring-2 rounded-md focus:outline-none ml-7"
                role="button" aria-label="options">
            <img class="w-5"
                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_3-svg1.svg"
                 alt="dropdown">
        </button>
        <div
            class="dropdown-content bg-white dark:bg-gray-800  shadow w-24 absolute z-30 right-0 mr-6 hidden group-active:block group-focus:block group-hover:block">
            <a href="{{route('earthquake.show', $earthquake->id)}}">
                <button tabindex="0"
                     class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                    <p>Edit</p>
                </button>
            </a>
            <form method="post" action="{{route('earthquake.destroy', $earthquake->id)}}">
                @method('DELETE')
                @csrf
                    <button type="submit" tabindex="0"
                         class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                        <p>Delete</p>
                    </button>
            </form>

        </div>
    </td>
</tr>
