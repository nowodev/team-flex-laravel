<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Friends') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-gray-900 dark:text-gray-100">Mutual Followers</h1>
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($mutuals as $mutual)
                    <x-friend :name="$mutual->name" :email="$mutual->email" />
                @endforeach
            </ul>

            <h1 class="text-gray-900 dark:text-gray-100">Following</h1>
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($followings as $following)
                    <x-friend :name="$following->name" :email="$following->email" />
                @endforeach
            </ul>

            <h1 class="text-gray-900 dark:text-gray-100">Followers</h1>
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($followers as $follower)
                    <x-friend :name="$follower->name" :email="$follower->email" />
                @endforeach
            </ul>
        </div>
    </div>
</div>
