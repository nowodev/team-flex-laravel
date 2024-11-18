<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 shadow-xl sm:rounded-lg p-5 space-y-4 h-[30rem] overflow-auto">
                @foreach ($messages as $message)
                    <div class="flex items-start gap-2.5 @if($message->user_id == auth()->id()) justify-end @else justify-start @endif">
                        {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image"> --}}
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ $message->user->name }}</span>
                                <span
                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
                            </div>
                            <div
                                class="flex flex-col leading-1.5 p-4 border bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700 @if($message->user_id == auth()->id()) border-teal-200 @else border-gray-200 @endif">
                                <p class="text-sm font-normal text-gray-900 dark:text-white">{{ $message->content }}.</p>
                            </div>
                            {{-- <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $message->status }}</span> --}}
                        </div>
                    </div>
                @endforeach
            </div>

            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="mt-4 space-y-2 lg:w-1/2">
                    <x-label for="content" :value="__('Your message')" />
                    {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label> --}}
                    <textarea id="content" rows="4" name="content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>
                    <x-input-error for="content" class="mt-2" />
                    <x-button class="w-50" type="submit">Send</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
