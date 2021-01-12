<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex sm:px-8 lg:px-8">
            <div class="w-2/3">
            <menu-container :items="{{$menus}}"/>
            </div>

            <div class="w-1/3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        asdfdf
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-app-layout>

