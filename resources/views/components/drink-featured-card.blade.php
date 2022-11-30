<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div class="content-center">
            <img src="{{ $drink['strDrinkThumb'] }}" alt="Drink image" class="rounded-xl object-cover h-50 w-100 ">
        </div>

        <div class="mt-8 flex flex-col justify-between">

            <header>
                <div class="space-x-2">
                    <span
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $drink['strCategory'] }}</span>

                    <span href="#"
                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $drink['strAlcoholic'] }}</span>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{ $drink['strDrink'] }}
                    </h1>
                </div>
            </header>

            <footer class="flex justify-between items-center mt-8">

                <div>
                    <a href="drinks/{{ $drink['slug'] }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >
                        Bekijken
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
