<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Flex</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-white h-screen">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex space-x-2 items-center">
                    <a href="/">
                        <x-application-logo />
                    </a>
                </div>

                <div class="flex flex-1 justify-end space-x-4">
                    <a href="{{ route('register') }}" class="text-sm/6 font-semibold text-gray-900">Register</a>
                    <a href="{{ route('login') }}" class="text-sm/6 font-semibold text-gray-900">Log in</a>
                </div>
            </nav>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8 h-full">
            <div class="mx-auto max-w-2xl h-full flex flex-col items-center justify-center space-y-2">
                <h1
                    class="text-balance text-center w-full text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                    Team Flex</h1>
                <p class="text-2xl">Toluwani Okunowo</p>
                <p class="text-2xl">Joy Chakra Bortty</p>
                <p class="text-2xl">Pavithra Saripudi</p>
                <p class="text-2xl">Tzu-Ying Wu</p>
            </div>
        </div>
    </div>

</body>

</html>
