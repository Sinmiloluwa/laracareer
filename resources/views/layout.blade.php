<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compartible" content="ie=edge">
        <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laracareer</title>
    </head>

    <body style="font-family:'Mulish';">
       <main class="mb-24">
        {{-- VIEW OUTPUT --}}
        @yield('content')
       </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-rose-600
        text-white h-24 mt-6 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        @auth
        <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
        @endauth
        </footer>

        <x-flash-message/>
    </body>
</html>