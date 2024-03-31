<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight inline-block">
            {{ __('Company Routes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg dark:text-white p-5">
                <form id="new-route">

                    @livewire('airport-combo-box', ['placeholder' => 'Enter Origin Airport', 'id' => 'origin_id', 'name' => 'origin_id'])


                </form>
            </div>

        </div>
    </div>
</x-app-layout>
