<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body x-data="themeSwitcher()" :class="{ 'dark': switchOn }" class="font-sans antialiased">
        <x-banner />
        <x-wireui:notifications />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <wireui:scripts />
        @livewireScripts

        <script>
            // Function to scroll messages container to bottom
            function scrollToBottom() {
                const messagesContainer = document.querySelector('.scroll');
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }

            // Scroll on initial page load
            document.addEventListener('DOMContentLoaded', scrollToBottom);

            // Scroll when new messages are added
            const messagesContainer = document.querySelector('.scroll');
            const observer = new MutationObserver(scrollToBottom);
            observer.observe(messagesContainer, {
                childList: true,
                subtree: true
            });
        </script>
    </body>
</html>
