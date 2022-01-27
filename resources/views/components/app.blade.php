<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
        
    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            <nav class="md:flex md:justify-between md:items-center pb-8">
                <div>
                    <a href="/">
                        <img src="images/avatar.jpg" alt="Blog Post image" class="rounded-xl h-32">
                    </a>
                </div>

                <div class="mt-8 md:mt-0">
                    <a href="/" class="text-xs font-bold uppercase mr-5">Home</a>
                    <a href="{{ route('posts.blog')}}" class="text-xs font-bold uppercase mr-5">Blog</a>
                    <a href="{{ route('contact')}}" class="bg-blue-500 hover:bg-blue-200 ml-3 rounded-full text-xs font-semibold text-white hover:text-blue-500  uppercase py-3 px-5">
                        Subscribe for Updates
                    </a>
                </div>
            </nav>

            <main>
                {{ $slot }}
            </main>
    
            <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">Stay in touch with my latest posts</h5>
                <p class="text-sm mt-3">I Promise to keep your inbox clean. <br>No junk!.</p>
    
                <div class="mt-10">
                    <a href="{{ route('contact')}}" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-200 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white hover:text-blue-500 uppercase py-3 px-8">
                        Subscribe For Updates
                    </a>
                </div>
            </footer>
        </section>
    </body>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</html>