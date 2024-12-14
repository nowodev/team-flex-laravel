<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 shadow-xl sm:rounded-lg h-[30rem] flex flex-col">
                <!-- Chat Header -->
                <div class="border-b border-gray-200 dark:border-gray-700 p-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Group Chat</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $messages->count() }} messages</p>
                </div>

                <!-- Messages Container -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4 scroll">
                    @foreach ($messages->sortBy('created_at') as $message)
                        <div class="flex @if($message->user_id == auth()->id()) justify-end @else justify-start @endif">
                            <div class="flex items-start max-w-[70%] @if($message->user_id == auth()->id()) flex-row-reverse @endif">
                                <!-- Avatar -->
                                <div class="flex-shrink-0 mr-3 @if($message->user_id == auth()->id()) ml-3 mr-0 @endif">
                                    <div class="w-8 h-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center">
                                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                            {{ substr($message->user->name, 0, 1) }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Message Content -->
                                <div class="flex flex-col">
                                    <div class="flex items-center @if($message->user_id == auth()->id()) justify-end @else justify-start @endif mb-1 space-x-2">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ $message->user->name }}</span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $message->created_at->format('h:i A') }}</span>
                                    </div>
                                    <div class="@if($message->user_id == auth()->id()) bg-blue-500 text-white rounded-l-lg rounded-br-lg @else bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-r-lg rounded-bl-lg @endif p-3 shadow-sm">
                                        <p class="text-sm">{{ $message->content }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                    <form action="{{ route('messages.store') }}" method="POST" class="flex gap-2">
                        @csrf
                        <input type="text" name="content" class="flex-1 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Type your message...">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
