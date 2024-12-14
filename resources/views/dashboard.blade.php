<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Stats</h3>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="overflow-hidden rounded-lg bg-white dark:bg-gray-800 px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500 dark:text-gray-400">Total Members</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                        {{ $members }}</dd>
                </div>
                <div class="overflow-hidden rounded-lg bg-white dark:bg-gray-800 px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500 dark:text-gray-400">Total Messages Sent</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                        {{ $sentMessages }}</dd>
                </div>
                <div class="overflow-hidden rounded-lg bg-white dark:bg-gray-800 px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500 dark:text-gray-400">Total Messages Received
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                        {{ $receivedMessages }}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>
