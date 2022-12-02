<x-layout>
    <section>

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl ">
            <h1 class="text-center font-bold text-xl">Todo:</h1>


                    <h2 class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Te valideren recepten:
                    </h2>


            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($recipes as $recipe)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/recipes/{{ $recipe->slug }}">
                                                        {{ $recipe->title }}
                                                    </a>
                                                </div>
                                            </div>

                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/recipes/{{ $recipe->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" id="{{ $recipe->id }}" action="/admin/recipes/approve/{{ $recipe->id }}">
                                                @csrf
{{--                                                @method('DELETE')--}}

                                                <button class="text-xs text-green-400">Approve</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    </section>
</x-layout>
