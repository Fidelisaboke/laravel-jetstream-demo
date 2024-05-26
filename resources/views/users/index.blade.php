<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('users.create')}}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Create User</a>
            <br><br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-table-users-edit :users="$users" />
            </div>
        </div>
    </div>
</x-app-layout>
