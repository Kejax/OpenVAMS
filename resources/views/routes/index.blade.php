<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight inline-block">
            {{ __('Company Routes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg dark:text-white p-5 flex justify-between items-center">
                <div class="">Company Routes System is "Work in Progress"</div>
                <a href="{{ route('routes.create') }}"><x-button>New Route</x-button></a>
            </div>

            <div class="bg-white dark:bg-gray-800 mt-5 overflow-hidden shadow-xl sm:rounded-lg dark:text-white p-5">

                @if( count($routes) != 0 )
                    @foreach($routes as $route)

                        <div>
                            <span>{{ $route->origin_airport_id }} - {{ $route->destination_airport_id }}</span>
                        </div>

                    @endforeach
                @else
                    <span>{{ __('company_routes.not_added_yet') }}</span>
                @endif

            </div>

        </div>
    </div>
</x-app-layout>
