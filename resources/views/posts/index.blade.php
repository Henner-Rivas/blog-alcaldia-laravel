@foreach ($posts as $post)


<a href={{route('posts.show',$post)}} class="flex flex-col hover:scale-105 shadow p-2 w-[300px]
gap-2">
    <div>
        <h1 class="font-bold text-[16px]"> {{$post->name}}
        </h1>
    </div>
    <div>
        <img src="@if($post->image){{Storage::url($post->image->url)}} @else
         https://www.wradio.com.co/resizer/kzjQ_Rdxlv-4I0sVQarXw9uYDoM=/650x488/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/ZFF6URDHXBHB5F2N2I7T3JMJJQ.jpeg
         @endif" alt="{{$post->name}}" class="rounded">
        {{-- <div class="rounded" alt="{{$post->name}}" style=" background-image: url(@if($post->image){{Storage::url($post->image->url)}} @else
            https://www.wradio.com.co/resizer/kzjQ_Rdxlv-4I0sVQarXw9uYDoM=/650x488/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/ZFF6URDHXBHB5F2N2I7T3JMJJQ.jpeg
            @endif)">
        </div> --}}
    </div>
    <div class="flex gap-1 flex-col">
        <p class="py-0 my-0 "> Contenido asociado a:
        </p>
        <div>
            <span class="bg-blue-200 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">Seguidad</span>
            <span class="bg-red-200 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">Red</span>
            <span class="bg-green-200 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded  ">Green</span>

            <span
                class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Dark</span>
        </div>

    </div>
    <div>
        <p class="p-0 m-0">Por: Alcaldia de Quibdió</p>
        <span class="text-sm text-gray-500  text-right"> 30 nov 2022</span>
    </div>


</a>
@endforeach
