<x-layout title="Details">
    <div class="flex justify-center items-center">
        <img class="h-250 w-auto" src="{{asset('kiwi-catscafe.gif')}}" alt="">
        <div>
            <div class="mt-5 flex justify-center items-center">
                <div>
                    <h1 class="text-2xl font-bold">{{$jeu->name}}</h1>
                    <p>Ce jeu a été produit par {{$jeu->producteur}} en {{$jeu->release_year}}.</p>
                    <p>Editeur du post: {{ $createur->name}} {{ $createur->prenom }}</p>
                </div>
            </div>
            <div class="mt-10 flex justify-center items-center space-x-4">
                <x-link href="/">Retour</x-link>
                @auth
                    @if (Auth::id() === $jeu->createur_id)
                        <x-link href="{{ route('modif', $jeu->id) }}">Modifier</x-link>
                        <x-button form="delete_form">Supprimer</x-button>
                    @endif
                @endauth
            </div>
            <form action="/Jeux/{{$jeu->id}}" id="delete_form" class="hidden" method="POST">
                @csrf
                @method('DELETE');
        
            </form>
        </div>
        
    </div>
</x-layout>


