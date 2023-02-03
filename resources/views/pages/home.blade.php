<x-app-layout>

    @include('components/slider-home')

    <div class=" pt-4 bg-gray-200 w-full ">
        <div class="flex max-w-6xl my-0 mx-auto justify-center flex-col items-center">

            <h2 class="title-main">NOTICIAS DE LA SEMANA</h2>


            <div class="flex gap-3 py-5 flex-wrap justify-center my-0 mx-auto">

                @foreach ($posts as $post)
                <a href={{route('posts.show',$post)}} class="w-[400px] flex md:w-[550px]">
                    <div class="relative w-[220px] ">
                        <img src="@if($post->image){{Storage::url($post->image->url)}}  @endif" alt="Messi"
                            class="w-full h-full object-cover ">
                        <span
                            class="bg-gray-100 text-my_red text-[16px] font-bold absolute top-[0px] p-1">{{$post->updated_at->format('d/m/Y')}}</span>
                    </div>
                    <div class=" bg-white w-[250px] md:w-[280px] p-2 f">

                        <h3 class="font-bold pb-1"> {{$post->name}}</h3>

                        <p class="text-sm text-justify">
                        <div class="flex">
                            {!! html_entity_decode(Str::limit($post->extract, 90, '...')) !!}
                        </div>
                        </p>

                        @foreach ($post->tags as $tag)
                        <span href="{{route('posts.tag',$tag)}}"
                            class=" cursor-pointer   text-white text-[15px] font-medium mr-2 px-2 py-0.6 rounded  bg-{{$tag->color}}">{{$tag->name}}</span>
                        @endforeach
                    </div>
                </a>

                @endforeach



            </div>

            <div class="py-5 w-full px-5">
                {{$posts->links()}}
            </div>
        </div>


    </div>

    {{-- <div class=" py-8">
        <div class="flex flex-col max-w-7xl my-0 mx-auto justify-center items-center">

            <nav aria-label="Page navigation example" class="py-5">
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="#"
                            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 ">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div> --}}
</x-app-layout>
