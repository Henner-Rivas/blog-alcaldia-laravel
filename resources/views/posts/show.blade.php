<x-app-layout>

    <div class="container my-0 mx-auto md:px-8 py-5 gap-5">

        <div class=" max-w-7xl">

            <h1 class="text-4xl font-semibold text-opacity-20"> {{$post->name}}dd</h1>


            <div class="text-lg text-gray-500">
                {!! html_entity_decode($post->extract) !!}

            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 my-8 ">

            {{-- contenido pricipal --}}
            <div class="col-span-3 md:col-span-2 ">
                <img class="w-full h-[400px] bg-cover bg-center object-cover"
                    src="@if($post->image){{Storage::url($post->image->url)}} @endif">
                <div class="text-base text-gray-700">
                    {!! html_entity_decode($post->body) !!}

                </div>

            </div>

            <div class="col-span-3  md:md:col-span-1">
                <h3>Articulos relacionados </h3>

                <div class="flex gap-5 flex-col">

                    @foreach ($similares as $post)

                    <a href="{{route('posts.show',$post)}}" class="
                    flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(@if($post->image){{Storage::url($post->image->url)}}
                            @endif)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                {{$post->name}}
                            </h1>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>

            {{-- contenido relacionado --}}
        </div>
    </div>
</x-app-layout>
