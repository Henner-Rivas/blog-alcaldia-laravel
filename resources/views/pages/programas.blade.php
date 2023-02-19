<x-app-layout>
    <div class="min-h-screen">
        <div class="imagen-title"
            style="background-image:url(https://www.quibdo-choco.gov.co/CabezotesModulos/quibdo5.jpg)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">Alcaldia de Quibdó</h1>
                <h1 class="text-my_blue text-xl">Programas</h1>
            </div>
        </div>

        <div class="container py-8 my-0 mx-auto max-w-6xl  ">
            <h1 class="text-2xl font-medium mb-4">Nuestro programas</h1>


            <div class="flex flex-wrap gap-3 ">

                @foreach ($posts as $post)

                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> {{$post->name}}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {!! html_entity_decode(Str::limit($post->extract, 90, '...')) !!}

                        .</p>
                    <a href="{{route('pages.show-programa',$post)}}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>