<x-layout>
    <secion>
        <main class="max-w-fit mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Stuur hier je recept in</h1>

            <form method="POST" action="/send-recipe" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-s text-black-700"
                           for="ingredients"
                    >
                        Ingredienten
                    </label>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient1"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient1"
                                   id="amountIngredient1"
                                   value="{{ old('amountIngredient1') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient1"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient1"
                                   id="measurementIngredient1"
                                   value="{{ old('measurementIngredient1') }}"
                            >
                        </div>

                        <div class="inline-block">
                            <select name="ingredient1" id="ingredient1">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient2"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient2"
                                   id="amountIngredient2"
                                   value="{{ old('amountIngredient2') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient2"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient2"
                                   id="measurementIngredient2"
                                   value="{{ old('measurementIngredient2') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient2" id="ingredient2">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient3"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient3"
                                   id="amountIngredient3"
                                   value="{{ old('amountIngredient3') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient3"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient3"
                                   id="measurementIngredient3"
                                   value="{{ old('measurementIngredient3') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient3" id="ingredient3">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient4"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient4"
                                   id="amountIngredient4"
                                   value="{{ old('amountIngredient4') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient4"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient4"
                                   id="measurementIngredient4"
                                   value="{{ old('measurementIngredient4') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient4" id="ingredient4">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient5"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient5"
                                   id="amountIngredient5"
                                   value="{{ old('amountIngredient5') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient5"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient5"
                                   id="measurementIngredient5"
                                   value="{{ old('measurementIngredient5') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient5" id="ingredient5">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient6"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient6"
                                   id="amountIngredient6"
                                   value="{{ old('amountIngredient6') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient6"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient0"
                                   id="measurementIngredient6"
                                   value="{{ old('measurementIngredient6') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient6" id="ingredient6">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient7"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient7"
                                   id="amountIngredient7"
                                   value="{{ old('amountIngredient7') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient7"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient7"
                                   id="measurementIngredient7"
                                   value="{{ old('measurementIngredient7') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient7" id="ingredient7">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient8"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient8"
                                   id="amountIngredient8"
                                   value="{{ old('amountIngredient8') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient8"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient0"
                                   id="measurementIngredient8"
                                   value="{{ old('measurementIngredient8') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient8" id="ingredient8">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient9"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient9"
                                   id="amountIngredient9"
                                   value="{{ old('amountIngredient9') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient9"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient9"
                                   id="measurementIngredient9"
                                   value="{{ old('measurementIngredient9') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient9" id="ingredient9">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient10"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient10"
                                   id="amountIngredient10"
                                   value="{{ old('amountIngredient10') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient10"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient10"
                                   id="measurementIngredient10"
                                   value="{{ old('measurementIngredient10') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <select name="ingredient10" id="ingredient10">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                    {
                                    <option id="{{$ingredient->id}}"
                                            value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="block">
                        <label class="block mb-2 uppercase font-bold text-s text-black-700"
                               for="ingredients"
                        >
                            Ingredienten niet in de lijst
                        </label>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient11"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient11"
                                   id="amountIngredient11"
                                   value="{{ old('amountIngredient11') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient11"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient11"
                                   id="measurementIngredient11"
                                   value="{{ old('measurementIngredient11') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient11"
                            >
                                Ingredient
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="nameIngredient11"
                                   id="nameIngredient11"
                                   value="{{ old('nameIngredient11') }}"
                            >
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient12"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient12"
                                   id="amountIngredient12"
                                   value="{{ old('amountIngredient12') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient12"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient12"
                                   id="measurementIngredient12"
                                   value="{{ old('measurementIngredient12') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient12"
                            >
                                Ingredient
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="nameIngredient12"
                                   id="nameIngredient12"
                                   value="{{ old('nameIngredient12') }}"
                            >
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient13"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient13"
                                   id="amountIngredient13"
                                   value="{{ old('amountIngredient13') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient13"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient13"
                                   id="measurementIngredient13"
                                   value="{{ old('measurementIngredient13') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient13"
                            >
                                Ingredient
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="nameIngredient13"
                                   id="nameIngredient13"
                                   value="{{ old('nameIngredient13') }}"
                            >
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient14"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient14"
                                   id="amountIngredient14"
                                   value="{{ old('amountIngredient14') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient14"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient14"
                                   id="measurementIngredient14"
                                   value="{{ old('measurementIngredient14') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient14"
                            >
                                Ingredient
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="nameIngredient14"
                                   id="nameIngredient14"
                                   value="{{ old('nameIngredient14') }}"
                            >
                        </div>
                    </div>

                    <div class="block">
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="amountIngredient15"
                            >
                                Hoeveelheid
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="number"
                                   name="amountIngredient15"
                                   id="amountIngredient15"
                                   value="{{ old('amountIngredient15') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient15"
                            >
                                Maat
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="measurementIngredient15"
                                   id="measurementIngredient15"
                                   value="{{ old('measurementIngredient15') }}"
                            >
                        </div>
                        <div class="inline-block">
                            <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="measurementIngredient15"
                            >
                                Ingredient
                            </label>

                            <input class="border border-gray-400 p-2"
                                   type="text"
                                   name="nameIngredient14"
                                   id="nameIngredient14"
                                   value="{{ old('nameIngredient14') }}"
                            >
                        </div>
                    </div>


                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Titel
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           id="title"
                           value="{{ old('title') }}"
                           required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="number_of_servings"
                    >
                        Aantal personen
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="number"
                           name="number_of_servings"
                           id="number_of_servings"
                           required
                    >

                    @error('number_of_servings')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="note"
                    >
                        opmerkingen of tips
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="note"
                           id="note"
                           value="{{ old('note_user') }}"
                           required
                    >

                    @error('note')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="instructions"
                    >
                        Instructies
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full h-40"
                              name="instructions"
                              id="instructions"
                              value="{{ old('instructions') }}"
                              required
                    ></textarea>

                    @error('instructions')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        verzend
                    </button>

                </div>
            </form>
        </main>
    </secion>
</x-layout>
