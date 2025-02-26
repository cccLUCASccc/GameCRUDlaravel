<x-layout title="Jeux">
    <div class="flex justify-center items-center">
        <img class="h-250 w-auto" src="{{asset('kiwi-catscafe.gif')}}" alt="">
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl mr-[150px]">Modifier le jeu</h2>
            </div>
    
            <form id="modifier" action="{{ route('patch', $jeu->id) }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                @csrf
                @method('PATCH')
    
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
    
                    <div>
                        <label for="name" class="block text-sm/6 font-semibold text-gray-900">Nom</label>
                        <div class="mt-2.5">
                            <input type="text" 
                                name="name"
                                value="{{ old('name', $jeu->name) }}" 
                                placeholder="Nom du jeu"
                                class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                        </div>
                    </div>
    
                    <div>
                        <label for="producteur" class="block text-sm/6 font-semibold text-gray-900">Producteur</label>
                        <div class="mt-2.5">
                            <input 
                                type="text" 
                                name="producteur"
                                value="{{ old('producteur', $jeu->producteur) }}"
                                placeholder="Nom du producteur"
                                class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                        </div>
                    </div>
    
                    <div>
                        <label for="release_year" class="block text-sm/6 font-semibold text-gray-900">Année de sortie</label>
                        <div class="mt-2.5">
                            <input 
                                type="number"
                                name="release_year"
                                value="{{ old('release_year', $jeu->release_year) }}"
                                placeholder="Année de sortie"
                                class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                        </div>
                    </div>
    
                </div>
    
                <div class="mt-10 flex justify-center items-center">
                    <x-link class=" p-[5px] m-[25px]" href="/Jeux/{{$jeu->id}}">Retour</x-link>
                    <x-button form="modifier">Modifier</x-button>
                </div>
    
            </form>
    
        </div>
    </div>
</x-layout>
