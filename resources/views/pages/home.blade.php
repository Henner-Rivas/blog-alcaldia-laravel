<x-app-layout>

    @include('components/slider-home')

    <div class=" pt-4 bg-gray-200 w-full ">
        <div class="flex max-w-7xl my-0 mx-auto justify-center flex-col items-center">

            <h2 class="title-main">NOTICIAS DE LA SEMANA</h2>


            <div class="flex gap-3 py-5 flex-wrap justify-center my-0 mx-auto">

                @foreach ($posts as $post)
                <a href={{route('posts.show',$post)}} class="w-[400px] flex md:w-[550px]">
                    <div class="relative w-[220px] ">
                        <img src="@if($post->image) {{Storage::url($post->image->url  )}} @else https://caracoltv.brightspotcdn.com/dims4/default/3749817/2147483647/strip/true/crop/1500x839+0+0/resize/1000x559!/quality/90/?url=http%3A%2F%2Fcaracol-brightspot.s3.amazonaws.com%2Fe5%2F35%2Fa26ffe6c4119b2aab033e0b13a93%2Fquibdo-festival-atrato-detonante.jpg @endif"
                            alt="Messi" class="w-full h-full object-cover ">
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


</x-app-layout>