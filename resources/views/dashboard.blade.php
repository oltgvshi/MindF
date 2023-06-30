<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-3">
                        <a href="/dashboard/create" class="rounded px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-600 ounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-900 cursor-pointer">+ Create new Illusion</a>
                    </div>

                    @include('components.illusions-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
