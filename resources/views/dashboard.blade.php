<x-layout title="Jeux">
    <div class="mt-[50px] flex justify-center">
        <img class="h-[350px] w-auto pr-[125px]" src="{{asset('kiwi-catscafe.gif')}}" alt="">
        <div class="flex-col justify-center">
            <div class="flex-col">
                <h1 class="text-2xl font-bold" >Bonjour {{ $user->name }} {{ $user->prenom }}</h1>
                <p class="text-2xl font-bold" >Voici les jeux que vous avez ajoutés.</p>
            </div>
            <ul class="mt-[50px] space-y-7">
                @foreach($jeux as $jeu)
                    <li class="p-4 bg-gray-100 rounded-md"><x-link href="/Jeux/{{$jeu->id}}">
                        {{ $jeu->name }} - {{ $jeu->producteur }}
                    </x-link></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
