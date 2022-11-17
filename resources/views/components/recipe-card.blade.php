<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <img src="{{ $recipe->image }}" alt="Recipe image" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a href="#"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">Techniques</a>
                    <a href="#"
                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">Updates</a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/recipes/{{ $recipe->slug }}" >
                            {{ $recipe->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Toegevoegd <time>{{ $recipe->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="{{ $recipe->user->image }}" alt="Lary avatar" width="50px">
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $recipe->user->name }}</h5>
                        <h6>Experiaan</h6>
                    </div>
                </div>

                <div>
                    <a href="/recipes/{{ $recipe->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Recept bekijken</a>
                </div>
            </footer>
        </div>
    </div>
</article>
