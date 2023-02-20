<x-app-layout>
    <div class="min-h-screen">


        <div class="imagen-title"
            style="background-image:url(https://www.quibdo-choco.gov.co/CabezotesModulos/quibdo5.jpg)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">Alcaldia de Quibdó</h1>
                <h1 class="text-my_blue text-xl">Archivos</h1>
            </div>
        </div>
        <div class="container py-8 max-w-6xl my-0 mx-auto">
            <h1 class="text-2xl font-medium mb-5">Archivos</h1>

            <div class="flex flex-col gap-2">
                @foreach ($archivos as $document)

                <div class="bg-white p-2 ">
                    <a href="{{Storage::url($document->document)}}" target="_blank" class="text-my_blue">
                        {{$document->name}}</a>
                </div>

                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>