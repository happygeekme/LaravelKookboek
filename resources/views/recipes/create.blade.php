<x-layout>
{{--    @dd(session());--}}
    <secion>
        <main class="max-w-fit mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Stuur hier je recept in</h1>

            <form method="POST" action="/send-recipe" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="ingredients"
                    >
                        Ingredienten
                    </label>

                    <div>
                            Hoeveelheid: <input id="amount" for="ingredient01" type="integer"/>

                           Maat (gram, theelepel, etc): <input id="measurement" for="ingredient01" type="text"/>

                            <select name="ingredient01" id="ingredient01">
                                <option>Selecteer Ingredient</option>
                                @foreach($ingredients as $ingredient) {
                                <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient02" id="ingredient02">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient03" id="ingredient03">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient04" id="ingredient04">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient05" id="ingredient05">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient06" id="ingredient06">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient07" id="ingredient07">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient08" id="ingredient08">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient09" id="ingredient09">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredient10" id="ingredient10">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                            <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        Ingredient niet in lijst: <input id="newIngredient" type="text" />
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        Ingredient niet in lijst: <input id="newIngredient" type="text" />
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        Ingredient niet in lijst: <input id="newIngredient" type="text" />
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        Ingredient niet in lijst: <input id="newIngredient" type="text" />
                    </div>

                    <div>
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        Ingredient niet in lijst: <input id="newIngredient" type="text" />
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
                           type="text"
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
