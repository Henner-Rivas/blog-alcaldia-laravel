@props(['post'])
<div>

    <article class="shadow bg-white rounded-lg overflow-hidden">
        {{-- <img src="{{Storage::url($post->image->url)}}" alt="">
        --}}
        <div>
            <img class="w-full h-72 object-cover object-center "
                src="https://a.espncdn.com/media/motion/ESPNi/2023/0118/int_230118_Is_a_Saudi_Arabia_exhibition_a_sad_ending_for_Messi_vs_Ronaldo/int_230118_Is_a_Saudi_Arabia_exhibition_a_sad_ending_for_Messi_vs_Ronaldo.jpg"
                alt="dd">
        </div>

        <div class="px-6 py-3">
            <h1>
                <a href="{{route('posts.show',$post)}}" class="font-bold text-xl">
                    {{$post->name}}
                </a>
            </h1>

            <div class="text-gray-700 text-base">
                {{$post->extract}}
            </div>

            <div class="px-6 py-2">
                @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag',$tag)}}"
                    class="inline-bock bg-gray-200 rounded-full px-3 py-1 text-sm text-black">
                    {{$tag->name}}</a>
                @endforeach
            </div>

        </div>
    </article>
</div>
