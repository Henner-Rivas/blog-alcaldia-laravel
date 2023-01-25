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
                    class="inline-bock bg-gray-200 rounded-full px-3 py-1 text-sm text-black">
                    {{$tag->name}}</a>
                @endforeach
            </div>

        </div>
    </article>
</div>
