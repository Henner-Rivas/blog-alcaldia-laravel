<div class="bg-white">
    @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {

            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    @endpush



    <div class="swiper mySwiper2 max-w-6xl">
        <div class="swiper-wrapper my-3">
            <div class="swiper-slide">
                <a href="https://www.ejercito.mil.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/22.png') }}" alt="ejercito">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.armada.mil.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/23.png') }}" alt="armada">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://www.lexbase.co/">
                    <img src="{{ Vite::asset('resources/images/20.png') }}" alt="">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://www.mintic.gov.co/portal/604/w3-channel.html" target="_blank">
                    <img src="{{ Vite::asset('resources/images/4.png') }}" alt="mintic">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://horalegal.inm.gov.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/7.png') }}" alt="horalegal">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.quibdo-choco.gov.co/Style%20Library/images/logos/8.png" target="_blank">
                    <img src="{{ Vite::asset('resources/images/8.png') }}" alt="">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.sisben.gov.co/">
                    <img src="{{ Vite::asset('resources/images/13.png') }}" alt="sisben">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://www.policia.gov.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/17.png') }}" alt="policia">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.quibdo-choco.gov.co/Style%20Library/images/logos/28.png" target="_blank">
                    <img src="{{ Vite::asset('resources/images/28.png') }}" alt="quibdo">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://www.choco.gov.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/46.png') }}" alt="choco">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="http://www.1cero1.com/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/33.png') }}" alt="1cero1">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.simit.org.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/32.png') }}" alt="simit">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.armada.mil.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/30.png') }}" alt="armada">
                </a>

            </div>
            <div class="swiper-slide">
                <a href="https://www.nomasfilas.gov.co/" target="_blank">
                    <img src="{{ Vite::asset('resources/images/27.png') }}" alt="">
                </a>

            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>





    @push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
      slidesPerView: 1,
      spaceBetween: 4,
      loop: true,
      autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        "@0.00": {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        "@0.75": {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        "@1.00": {
          slidesPerView: 6,
          spaceBetween: 40,
        },
        "@1.50": {
          slidesPerView: 9,
          spaceBetween: 50,
        },
      },
    });
    </script>
    @endpush

</div>
<hr>

<footer class="flex  flex-col gap-8 w-full bottom-0 mt-4 ">



    <div class="flex justify-around gap-3 mx-0 my-auto ">
        <div class="flex justify-around gap-5 max-w-7xl flex-wrap  ">
            <div class="flex flex-col gap-6 ">
                <h3 class="font-bold text-my_blue text-lg text-center">ALCALDÍA DE QUIBDÓ
                </h3>

                <div class="flex flex-col gap-3">
                    <a href="https://www.colombia.co/" target="_blank">
                        <img src="{{ Vite::asset('resources/images/mas pais.png') }}" class="w-[160px]">

                    </a>

                    <a href="http://sac2.gestionsecretariasdeeducacion.gov.co/app_Login/?sec=116" target="_blank">

                        <img src="{{ Vite::asset('resources/images/sac.png') }}" class="w-[160px]">
                    </a>
                    <a href="https://empleadosquibdo.com/login" target="_blank">

                        <img src="{{ Vite::asset('resources/images/desprendible22.png') }}" class="w-[160px]">

                    </a>

                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h2 class="font-bold text-my_blue text-lg text-center">CONTACTO INFORMACIÓN

                </h2>

                <div class="flex gap-2 flex-col">
                    <p>
                        <i class="fa-solid fa-location-pin mr-1 text-my_blue"></i>
                        NIT: 891680011-0
                    </p>
                    <p>
                        <i class="fa-solid fa-location-pin mr-1 text-my_blue"></i> Carrera 2 # 24A - 32
                    </p>
                    <p>
                        <i class="fa-solid fa-location-pin mr-1 text-my_blue"></i> Código Postal 270001
                    </p>
                    <p>
                        <i class="fa-solid fa-phone mr-1 text-my_blue"></i>
                        Teléfono:034 6725731
                    </p>
                    <p>
                        <i class="fa-solid fa-blender-phone mr-1 text-my_blue"></i>
                        Línea gratuita: Próximamente
                    </p>
                    <p> <i class="fa-regular fa-envelope mr-1 text-my_blue"></i>Email: contacto@quibdo-choco.gov.co
                    </p>

                    <a href="http://sac2.gestionsecretariasdeeducacion.gov.co/app_Login/?sec=116" target="_blank"
                        class="py-2 px-3 text-white bg-my_blue rounded text-center w-[80px]">PQRD</a>

                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h3 class="font-bold text-my_blue text-lg text-center">LINKS DE INTERÉS

                </h3>

                <div class="flex gap-2 flex-col">
                    <a href="https://www.quibdo-choco.gov.co/Paginas/Politicas-de-Privacidad-y-Condiciones-de-Uso.aspx"
                        target="_blank"><i class="fa-solid fa-arrow-right mr-1 text-my_blue"></i> Políticas de
                        Privacidad y
                        Condiciones de Uso.
                    </a>
                    <a href="https://www.quibdo-choco.gov.co/Paginas/Politicas-Editoriales-y-de-Actualizacion.aspx"><i
                            target="_blank" class="fa-solid fa-arrow-right mr-1 text-my_blue"></i> Políticas Editoriales
                        y de
                        Actualización.
                        .
                    </a> <a href="https://www.quibdo-choco.gov.co/Paginas/Notificaciones-Judiciales.aspx"><i
                            class="fa-solid fa-arrow-right mr-1 text-my_blue"></i> Notificaciones Judiciales.

                    </a>
                    <div><i class="fa-solid fa-arrow-right mr-1 text-my_blue"></i>
                        <!-- Modal toggle -->
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button">
                            Otras sedes
                        </button>

                    </div>



                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 bg-white">
                                        Otras sedes
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Cerrar</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y- bg-white">
                                    <b>
                                        Hospital Ismael Roldan Valencia

                                    </b> <br />
                                    <b>Teléfono: </b> (+57) (4) 6710101<br />
                                    <b>Sitio Web: </b> http://www.hospitalismaelroldan.gov.co <br />
                                    <b> Horario:</b> Atención al Usuario 24 horas
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center justify-center p-  space-x-2 border-t text-white border-gray-200 rounded-b py-2 bg-my_blue">

                                    <button data-modal-hide="defaultModal" type="button"
                                        class="text-black bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h2 class="font-bold text-my_blue text-lg  text-center">INFORMACIÓN ADICIONAL

                </h2>

                <div class="flex flex-col gap-3 ">
                    <p class="max-w-[300px] "> <i class="fa-regular fa-square-check mr-1 text-my_blue "></i>
                        Horario atención: <span> Lunes a Viernes de 8:00 a. m. a 12:00 m. y de 2:00 p. m. a 6:00 p. m
                        </span>
                    </p>



                    <p class="max-w-[350px]">


                        <i class="fa-regular fa-square-check mr-1 text-my_blue "></i>

                        <span>Numero de visitas: @livewire('counter')
                        </span>


                    </p>



                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-8 items-center flex-wrap py-3">


        <a href="https://www.youtube.com/channel/UCScgBjdHinCJ3QE9TRG11Gg" target="_blank"
            class="flex flex-col gap-2 rounded-[50%] items-center bg-my_blue p-4 hover:bg-my_red">
            <i class="fa-brands fa-youtube text-white text-[18px]"></i>

        </a>
        <a href="https://web.facebook.com/AlcaldiaQuibdo/?_rdc=1&_rdr/" target="_blank"
            class="flex flex-col rounded-[50%] gap-2 items-center bg-my_blue p-4 hover:bg-[#3B5998]">
            <i class="fa-brands fa-facebook text-[18px]  text-white"></i>

        </a>
        <a href="https://twitter.com/AlcaldiaQuibdo" target="_blank"
            class="flex flex-col rounded-[50%] gap-2 items-center bg-my_blue p-4 hover:bg-[#00ACEE]">
            <i class="fa-brands fa-twitter text-[18px]  text-white"></i>

        </a>

    </div>


    <div class="h-[60px] bg-light_blue text-white    w-full box-border  ">
        <div class="h-[60px] flex max-w-7xl justify-between items-center justify-items-center my-0 mx-auto">
            <div class="h-[100%]">
                <a href="https://www.quibdo-choco.gov.co/Paginas/default.aspx" target="_blank">

                    <img src="{{ Vite::asset('resources/images/logo4.png') }}" class="h-full w-full">
                </a>
            </div>
            <div>
                <a href="https://www.gov.co/" target="_blank">

                    <img src="{{ Vite::asset('resources/images/logo_gov.png') }} " class="h-[50px] w-full">
                </a>

            </div>
        </div>
    </div>
</footer>