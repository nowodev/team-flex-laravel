<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Friends') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-gray-900 dark:text-gray-100">Mutual Followers</h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @foreach ($mutuals as $mutual)
                    <div
                        class="relative flex items-center space-x-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400 dark:hover:border-gray-600">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="min-w-0 flex-1">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $mutual->name }}</p>
                                <p class="truncate text-sm text-gray-500 dark:text-gray-400">{{ $mutual->email }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


            <h1 class="text-gray-900 dark:text-gray-100">Following</h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @foreach ($followings as $following)
                    <div
                        class="relative flex items-center space-x-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400 dark:hover:border-gray-600">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="min-w-0 flex-1">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $following->name }}</p>
                                <p class="truncate text-sm text-gray-500 dark:text-gray-400">{{ $following->email }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <h1 class="text-gray-900 dark:text-gray-100">Followers</h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @foreach ($followers as $follower)
                    <div
                        class="relative flex items-center space-x-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400 dark:hover:border-gray-600">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="min-w-0 flex-1">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $follower->name }}</p>
                                <p class="truncate text-sm text-gray-500 dark:text-gray-400">{{ $follower->email }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
