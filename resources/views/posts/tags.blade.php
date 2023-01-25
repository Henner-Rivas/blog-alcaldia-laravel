<x-app-layout>

    <div class="container my-0 mx-auto md:px-8 py-5 max-w-5xl">

        <h1 class="uppercase text-2xl py-3 text center font-bold">Articulos relacionados con la etiqueta :{{$tag->name}}
        </h1>

        <div class="gap-5 flex flex-col">
            @foreach ($posts as $post)

            <x-post-filter :post="$post" />
            @endforeach

            <div>
                {{$posts->links()}}
            </div>
        </div>

    </div>

</x-app-layout>
