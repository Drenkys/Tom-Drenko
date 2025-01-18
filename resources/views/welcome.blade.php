<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
@import url('https://fonts.googleapis.com/css2?family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    </head>
    <body>
        <header class="z-50 bg-black text-white fixed flex w-full items-center h-16">
            <div class="text-3xl px-5 py-2">Tomáš Drenko</div>
                <nav class="right-28 absolute">
                    <ul class="flex items-center gap-5">
                        <li>About</li>
                        <li>Services</li>
                    </ul>
                </nav>
        </header>
        <main class="bg-cover min-h-screen text-white" style="background-image: url('{{ asset('storage/19659.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            <div class="relative min-h-screen">
                <div class="absolute top-1/3 left-56">
                    <h1 class="text-9xl mb-8">Tomáš Drenko</h1>
                    <p class="w-2/3 text-2xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos labore placeat omnis illum corporis quidem pariatur! Placeat esse neque sequi quae ad inventore ea, perferendis repellat odio veniam impedit tempora?</p>
                </div>
                <img class="absolute w-[680px] top-[620px] right-20" src="{{ asset('storage/file.png') }}" alt="">
            </div>
            <div class="relative">
                <h2 class="absolute text-4xl left-56 -top-20">My services</h2>
                <div class="z-10 flex justify-center flex-wrap gap-12 text-center">
                    <div class="border-gray-400 border-4 w-96">
                        <img class="border-b-4 min-h-64 bg-cover" src="{{ asset('storage/110094.jpg') }}" alt="">
                        <h2 class="text-3xl p-2">Web development</h2>
                        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore asperiores ducimus dolore at nisi nobis, qui officiis ullam eos, ipsa sit fuga reprehenderit nemo sapiente? Aut quaerat totam id modi!</p>
                    </div>
                    <div class="border-gray-400 border-4 w-96">
                        <img class="border-b-4 min-h-64 bg-cover" src="{{ asset('storage/2148419209.jpg') }}" alt="">
                        <h2 class="text-3xl p-2">Hardware</h2>
                        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore asperiores ducimus dolore at nisi nobis, qui officiis ullam eos, ipsa sit fuga reprehenderit nemo sapiente? Aut quaerat totam id modi!</p>
                    </div>
                    <div class="border-gray-400 border-4 w-96">
                        <img class="border-b-4 min-h-64 bg-cover" src="{{ asset('storage/121526.jpg') }}" alt="">
                        <h2 class="text-3xl p-2">Software</h2>
                        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore asperiores ducimus dolore at nisi nobis, qui officiis ullam eos, ipsa sit fuga reprehenderit nemo sapiente? Aut quaerat totam id modi!</p>
                    </div>
                </div>
            </div>
            <section class="relative flex justify-center gap-5 mt-36">
                <div class="relative">
                    <img class="w-96" src="{{ asset('storage/mirror.png') }}" alt="">
                    <img class="absolute top-12 w-80" src="{{ asset('storage/hood.png') }}" alt="">
                </div>
                <div class="max-w-80 mt-24">
                    <h2 class="text-center text-4xl mb-6">Who is Tom?</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nobis beatae vitae, vel deleniti quia earum iste dolorum placeat sint unde doloremque id magnam, autem, exercitationem aut recusandae? Sint.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nobis beatae vitae, vel deleniti quia earum iste dolorum</p>
                </div>
            </section>
            <section class="mt-20 h-52 bg-fixed bg-cover bg-center" style="background-image: url('{{ asset('storage/rb_37387.png') }}');" id="code">
            </section>
            <section class="mt-24 flex justify-center gap-5 flex-wrap">
                <div class="w-1/3 min-w-80">
                    <h3 class="text-4xl font-bold mb-3">Contact</h3>
                    <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil similique ex odit exercitationem corporis amet debitis <br> doloribus laudantium ipsam illo ducimus excepturi! Ea minus rem assumenda mollitia corrupti ab in!</p>
                </div>
                <form action="" method="POST" class="flex flex-col min-w-80">
                    <input type="text" placeholder="Name" require>
                    <input type="text" placeholder="Contact" require>
                    <input type="submit" class="text-2xl font-bold border-2 border-white w-40 mt-5">
                </form>
            </section>
            <section>
                <div class="mt-20 pb-5 flex justify-center items-center gap-5 text-3xl font-bold space-x-4">
                    <h3>Connect with Me</h3>
                    <img class="w-24" src="{{ asset('storage/fb.png') }}" alt="">
                    <img class="w-24" src="{{ asset('storage/ig.png') }}" alt="">
                    <img class="w-24" src="{{ asset('storage/discord.png') }}" alt="">
                </div>
            </section>

        </main>
        <footer class="bg-black text-white text-center text-xl">
            <p><span class="align-middle mr-2">&copy;</span> Tomáš Drenko</p>
        </footer>
    </body>
</html>
