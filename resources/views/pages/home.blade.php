<x-app-layout>

    @include('components/slider-home')

    <div class=" pt-4 bg-gray-200 w-full ">
        <div class="flex max-w-7xl my-0 mx-auto justify-center flex-col items-center">

            <h2 class=" font-extrabold  text-center text-3xl py-4">NOTICIAS DE LA SEMANA</h2>
            <div class="flex gap-3 py-5 flex-wrap justify-center my-0 mx-auto">
                <a href={{route('posts.show')}} class="w-[400px] flex md:w-[500px]">
                    <div class="relative w-[220px] ">
                        <img src="https://cdn.britannica.com/35/238335-050-2CB2EB8A/Lionel-Messi-Argentina-Netherlands-World-Cup-Qatar-2022.jpg"
                            alt="Messi" class="w-full">
                        <span class="bg-gray-100 text-my_red text-[16px] font-bold absolute top-[0px] p-1">22 nov
                            2022</span>
                    </div>
                    <div class=" bg-white w-[220px] md:w-[250px] p-2">
                        <h3 class="font-bold pb-1"> Argentina se fue abajo</h3>
                        <p class="text-sm text-justify">Leonel Messi en Qatar 2022, EN VIVO, se busca", la gastada en un
                            medio
                            mexicano
                            al capitán
                            argentino que genero miles de reacciones</p>
                    </div>
                </a>
                <a href={{route('posts.show')}} class="w-[400px] flex md:w-[500px]">
                    <div class="relative w-[220px] ">
                        <img src="https://cdn.britannica.com/35/238335-050-2CB2EB8A/Lionel-Messi-Argentina-Netherlands-World-Cup-Qatar-2022.jpg"
                            alt="Messi" class="w-full">
                        <span class="bg-gray-100 text-my_red text-[16px] font-bold absolute top-[0px] p-1">22 nov
                            2022</span>
                    </div>
                    <div class=" bg-white w-[220px] md:w-[250px] p-2">
                        <h3 class="font-bold pb-1"> Argentina se fue abajo</h3>
                        <p class="text-sm text-justify">Leonel Messi en Qatar 2022, EN VIVO, se busca", la gastada en un
                            medio
                            mexicano
                            al capitán
                            argentino que genero miles de reacciones</p>
                    </div>
                </a>
                <a href={{route('posts.show')}} class="w-[400px] flex md:w-[500px]">
                    <div class="relative w-[220px] ">
                        <img src="https://cdn.britannica.com/35/238335-050-2CB2EB8A/Lionel-Messi-Argentina-Netherlands-World-Cup-Qatar-2022.jpg"
                            alt="Messi" class="w-full">
                        <span class="bg-gray-100 text-my_red text-[16px] font-bold absolute top-[0px] p-1">22 nov
                            2022</span>
                    </div>
                    <div class=" bg-white w-[220px] md:w-[250px] p-2">
                        <h3 class="font-bold pb-1"> Argentina se fue abajo</h3>
                        <p class="text-sm text-justify">Leonel Messi en Qatar 2022, EN VIVO, se busca", la gastada en un
                            medio
                            mexicano
                            al capitán
                            argentino que genero miles de reacciones</p>
                    </div>

                </a>
                <a href={{route('posts.show')}} class="w-[400px] flex md:w-[500px]">
                    <div class="relative w-[220px] ">
                        <img src="https://cdn.britannica.com/35/238335-050-2CB2EB8A/Lionel-Messi-Argentina-Netherlands-World-Cup-Qatar-2022.jpg"
                            alt="Messi" class="w-full">
                        <span class="bg-gray-100 text-my_red text-[16px] font-bold absolute top-[0px] p-1">22 nov
                            2022</span>
                    </div>
                    <div class=" bg-white w-[220px] md:w-[250px] p-2">
                        <h3 class="font-bold pb-1"> Argentina se fue abajo</h3>
                        <p class="text-sm text-justify">Leonel Messi en Qatar 2022, EN VIVO, se busca", la gastada en un
                            medio
                            mexicano
                            al capitán
                            argentino que genero miles de reacciones</p>
                    </div>
                </a>

            </div>
        </div>

        <hr>

    </div>

    <div class=" py-8">
        <div class="flex flex-col max-w-7xl my-0 mx-auto justify-center items-center">
            <h3 class=" font-extrabold  text-center text-4xl py-4">Ultimos rticulos</h2>

                <div class="flex flex-wrap gap-6 items-center justify-center">
                    @include('posts/index')
                    @include('posts/index')
                    @include('posts/index')
                    @include('posts/index')
                    @include('posts/index')
                    @include('posts/index')

                </div>

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
    </div>
</x-app-layout>
