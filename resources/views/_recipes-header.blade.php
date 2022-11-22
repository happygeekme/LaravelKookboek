<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        <span class="text-blue-500">Experius</span> Kookboek
    </h1>

    <h2 class="inline-flex mt-2">Voor en door Experianen </h2>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!-- Search ingredients -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="ingredient/">
                <input
                    type="text"
                    name="searchIngredient"
                    placeholder="Zoek op ingredient"
                    class="bg-transparent placeholder-gray-600 font-semibold text-sm"
                    value="{{ request('searchIngredient') }}"
                >
            </form>
        </div>

        <!-- Search recipes -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input
                    type="text"
                    name="searchRecipe"
                    placeholder="Zoek in recepten..."
                    class="bg-transparent placeholder-gray-600 font-semibold text-sm"
                    value="{{ request('searchRecipe') }}"
                >
            </form>
        </div>

    </div>
</header>
