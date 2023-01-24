<x-app-layout>

    <div class="container my-0 mx-auto md:px-8 py-5 max-w-5xl">

        <h1 class="uppercase text center font-bold">Etiqueta :{{$tag->name}}</h1>

        <div>
            @foreach ($posts as $post)

            <x-post-filter :post="$post" />
            @endforeach

            <div>
                {{$posts->links()}}
            </div>
        </div>

    </div>

</x-app-layout>
