<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add a New Vehicle
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-4 text-gray-900 dark:text-gray-100">
                    <b>Populate the information below to add a new vehicle to your garage.</b>
                </div>
                <div class="p-6 pt-4 text-gray-900 dark:text-gray-100">
                    <x-forms.vehicle-form :action="route('vehicles.create')" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
