@props(['post'])
<div>

    <article class="shadow bg-white rounded-lg overflow-hidden">
        <div>

            <img src="@if($post->image){{Storage::url($post->image->url)}}
                @endif" alt="{{$post->name}}" class="rounded h-[15rem] w-full object-cover">
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
                    class="bg-[{{$tag->color}}] cursor-pointer   text-white text-[15px] font-medium mr-2 px-2 py-0.6 rounded">{{$tag->name}}</a>
                @endforeach
            </div>

        </div>
    </article>
</div>
