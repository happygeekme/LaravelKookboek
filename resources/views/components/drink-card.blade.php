<article
    class="transition-colors duration-300 hover:bg-blue-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <img src="{{ $drink['strDrinkThumb'] }}" alt="Drink image" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">

            <header>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/drinks/{{ $drink['slug'] }}" >
                            {{ $drink['strDrink'] }}
                        </a>
                    </h1>
                </div>
            </header>

            <footer class="flex justify-between items-center mt-8">

                <div>
                    <a href="/drinks/{{ $drink['slug'] }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Drankje bekijken</a>
                </div>
            </footer>
        </div>
    </div>
</article>
