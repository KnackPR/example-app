<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("Hello, ") }} {{ Auth::user()->name }} {{" !"}}
                </div>
                    <div class="flex justify-center items-center ">
                        <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" class="w-32 h-32 object-cover rounded-full">
                    </div>
                    <div class="p-4 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("Wish you have a wonderful day.   ") }}
                </div>
                <div class="p-4 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
