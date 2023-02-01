<x-app-layout>
    <div class="container my-0 mx-auto md:px-8 py-5 max-w-5xl">


        <div>
            @if ($posts->count() >= 1)

            <h1 class="uppercase text-2xl py-3 text center font-bold">Articulos relacionados con tu busqueda
                :{{$search}}
            </h1>
            @foreach ($posts as $post)


            <x-post-filter :post="$post" />
            @endforeach
            @else
            <div class="flex justify-center items-center h-[300px]">
                <h2 class="text-4xl font-semibold"> No hay articulos con con tu busqueda : {{$search}} </h2>
            </div>
            @endif

            <div>
                {{$posts->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
