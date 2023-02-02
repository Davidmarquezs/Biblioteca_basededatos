<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Vintage Store</title>
        {{-- {{ config('app.name', 'Vintage Store') }} --}}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="css/carousel.css">
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/4db6b32bd3.js" crossorigin="anonymous" defer></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-indigo-100">
            @livewire('navigation-menu')
 
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-900 shadow">
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

        <!-- footer -->
        <div class="w-full bg-gray-900 text-white">
            <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
                <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2">
                    <div class="w-full sm:w-2/5 pr-6 flex flex-col space-y-4 items-left text-left">
                        <img  class="w-56 h-40 rounded" src="/images/logo/1.png">
                        <p class="opacity-60">Las Vegas de Tariba sector principal
                        </p>             
                    </div>
                    <div class="w-full sm:w-2/5 flex flex-col space-y-4 mx-12 text-left">
                        <a href="{{ route('Books.index') }}" class="opacity-60">Libros</a>
                        <a href="{{ route('categoria') }}" class="opacity-60">Categorias</a>
                        <a href="{{ route('resenias') }}" class="opacity-60">Reseñas</a>
                        <a href="{{ route('acerca') }}" class="opacity-60">Acerca de nosotros</a>
                        <a href="{{ route('contacto') }}" class="opacity-60">Contacto</a>
                    </div>
                    <div class="w-full sm:w-1/5 flex items-start mx-12 justify-left">
                        <div class="space-x-4">
                            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.gmail.com"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="opacity-60 pt-4 text-center">
                <p>© 2023 Todos los derechos reservados.</p>
            </div>
        </div>

        @stack('modals')
        
        @livewireScripts
    </body>
</html>
