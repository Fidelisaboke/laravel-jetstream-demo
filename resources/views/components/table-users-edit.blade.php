<!-- component -->
<div class="p-6 overflow-scroll px-0">
    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <!-- name -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Name <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <!-- email -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Email <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <!-- email verified at -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Email Verified At <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <!-- role -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Role <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <!-- actions -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$user->name}}</p>
                    </div>
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$user->email}}</p>
                    </div>
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$user->email_verified_at}}</p>
                    </div>
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$user->role}}</p>
                    </div>
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <!-- view -->
                    <a href="{{ route('users.show', $user->id) }}" class="text-green-600 hover:text-blue-900">View</a>
                    <!-- edit -->
                    <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <!-- delete -->
                    <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
