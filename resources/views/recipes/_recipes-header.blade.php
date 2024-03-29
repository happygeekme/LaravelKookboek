<header class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-4xl">
        <span class="text-blue-500">Experius</span> Kookboek
    </h1>

    <h2 class="inline-flex mt-2 text-2xl">Recepten</h2>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        <!-- Search recipes -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="get" action="recipes">
                <input
                    type="text"
                    name="searchRecipe"
                    placeholder="Zoek in recepten..."
                    class="bg-transparent placeholder-gray-600 font-semibold text-sm"
                    value="{{ request('searchRecipe') }}"
                >
                <input type="submit">
            </form>
        </div>
        <!--terug -->
        <div class="px-5 py-3 border border-blue-500 rounded-full text-blue-500 text-xs uppercase font-semibold inline-block">
            <a href="/recipes"

               style="font-size: 15px">
                Alle recepten
            </a>
        </div>
        <!--naar drankjes -->
        <div class="px-5 py-3 border border-blue-500 rounded-full text-blue-500 text-xs uppercase font-semibold inline-block">
            <a href="/drinks"

               style="font-size: 15px">
                naar drankjes
            </a>
        </div>
    </div>
</header>
