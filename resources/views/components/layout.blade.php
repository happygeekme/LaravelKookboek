<!doctype html>

<title>Experius Kookboek</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">

        <div>
            <a href="/">
                <img src="/images/experius_logos/experius-logo.png" alt="Experius Logo" width="200" height="16">
                <span class="text-blue-500 text-3xl m-10">Kookboek</span>
            </a>
        </div>


        <div class="mt-8 md:mt-0 flex items-center">

            @auth
                <span class="text-xs font-bold uppercase">Welkom, {{ auth()->user()->name }}!</span>

                <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log uit</button>
                </form>

                <a href="/send-recipe-form"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Recept insturen
                </a>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Account aanmaken</a>

                <a href="/login"
                   class="bg-blue-500 ml-3 px-10 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Log in
                </a>
            @endguest
        </div>
    </nav>

    {{ $slot }}

    <footer class="bottom-0 left-0 w-screen bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">

        <h5 class="text-3xl">Blijf op de hoogte van nieuwe recepten</h5>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf

                    <div class="lg:py-3 lg:px-5 flex items-center">

                        <input
                            name="email"
                            id="email"
                            type="text"
                            placeholder="Jouw email adres"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none"
                        >

                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Aanmelden
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>

@if (session()->has('success'))
    <div class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session()->get('success') }}</p>
    </div>
@endif
@error('email')
<div class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
    <p>{{ $message }}</p>
</div>
@enderror
</body>

