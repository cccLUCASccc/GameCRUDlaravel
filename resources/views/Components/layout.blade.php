<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    {{-- <img class="h-8 w-auto" src="{{asset('gaming.png')}}" alt=""> --}}
                </div>
                <div class="flex justify-end items-center">
                    <x-link href="/">Jeux</x-link>
                    @auth
                        <x-link href="/Jeux/creer" >Créer</x-link>
                        <form method="GET" action="/logout" id="logout">

                        </form>
                        <x-link href="/dashboard">Profile</x-link>
                        <x-button form="logout">Déconnexion</x-button>
                    @endauth
                    @guest
                        <x-link href="/login">Se connecter</x-link>
                        <x-link href="/register" >Creer un compte</x-link>   
                    @endguest
                </div>
            </nav>
        </header>
        <main class="mt-20 p-6">
            <div>
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
