<div>
    @php
    // INPUT: $type ('Primary', 'Secondary'), $text
        $appearPrimary   = "border border-transparent text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700   font-medium ";
        $appearSecondary = "border border-gray-300  text-base  font-medium text-gray-700 hover:text-gray-500  focus:border-blue-300 bg-white sm:text-sm";
    @endphp
    @if  ($type=='Primary')
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button @click="{!! $click !!}"
                class="{{$appearPrimary}} inline-flex justify-center w-full rounded-md  px-4 py-2  leading-6 shadow-sm focus:outline-none transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            {{$text}}
            </button>
        </span>
    @elseif ($type=='Secondary')
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            <button type="button" @click="close()"
                class="{{$appearSecondary}} inline-flex justify-center w-full rounded-md px-4 py-2  leading-6shadow-sm focus:outline-none focus:shadow-outline-blue transition ease-in-out duration-150  sm:leading-5">
                {{$text}}
            </button>
        </span>
    @else
        {!!  assert(0,"type($type)"); !!}
    @endif


</div>
