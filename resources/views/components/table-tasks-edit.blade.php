<!-- component -->
<div class="p-6 overflow-scroll px-0">
    <table class="mt-4 w-full min-w-max table-auto text-left">
        <thead>
            <tr>
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Description <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <!-- status -->
                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Status <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>

                <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$task->description}}</p>
                    </div>
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                    @if($task->status == 'pending')
                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-yellow-500/20 text-yellow-600 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                        <p class="block antialiased text-center leading-none">{{$task->status}}</p>
                    </div>
                    @else
                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                        <p class="block antialiased text-center leading-none">{{$task->status}}</p>
                    </div>
                    @endif
                    </div>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                    <!-- view -->
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-green-600 hover:text-blue-900">View</a>
                    <!-- edit -->
                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <!-- delete -->
                    <form class="inline-block" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
