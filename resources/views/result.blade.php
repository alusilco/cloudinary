<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Cloudinary</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-4xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <a href="/" class="text-sm ml-1 text-blue-800">Volver atrás</a>
                <div class="grid grid-cols-1 gap-6 lg:gap-8">
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="text-center">
                            <h2 class="my-6 text-xl font-semibold text-gray-900 dark:text-white">Archivo subido a
                                cloudinary</h2>
                            <img src="{{ $image_path }}" class="w-1/2 my-6 mx-auto" alt="Imagen" />
                            <a href="{{ $image_path }}" class="text-blue-600">{{ $image_path }}</a>
                        </div>
                    </div>
                </div>
            </div>

            
                </div>


            </div>
        </div>
    </div>
</body>

</html>
