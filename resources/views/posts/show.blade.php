<x-app-layout>

    <div class="container my-0 mx-auto md:px-8 py-5 gap-5">

        <div class=" max-w-7xl">

            <h1 class="text-4xl font-semibold text-opacity-20"> {{$post->name}}dd</h1>


            <div class="text-lg text-gray-500">
                {{$post->extract}}
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 my-8 ">

            {{-- contenido pricipal --}}
            <div class="col-span-3 md:col-span-2 ">
                <img class="w-full h-[400px] bg-cover bg-center object-cover"
                    src="@if($post->image){{Storage::url($post->image->url)}} @endif">
                <div class="text-base text-gray-700">

                    {{$post->body}}
                </div>

            </div>

            <div class="col-span-3  md:md:col-span-1">
                <h3>Articulos relacionados con deporte</h3>

                <div class="flex gap-5 flex-col">
                    <div class="
                    flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                La violencia en el barri el cabi
                            </h1>
                        </div>
                    </div>
                    <div class="
                    flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                La violencia en el barri el cabi
                            </h1>
                        </div>
                    </div>
                    <div class="
                    flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                La violencia en el barri el cabi
                            </h1>
                        </div>
                    </div>
                    <div class="
                    flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                La violencia en el barri el cabi
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- contenido relacionado --}}
        </div>
    </div>
</x-app-layout>
