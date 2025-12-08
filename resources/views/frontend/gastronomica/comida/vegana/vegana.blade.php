@extends('frontend.gastronomica.index')

@section('gastronomica-content')


{{-- ================= VEGANA ================= --}}
<section class="bg-[#FFF7EF] py-16 flex flex-col items-center gap-8">
        <h2 class="flex items-center gap-2 font-Cubano text-[30px] md:text-[50px] text-[#534741] uppercase">
        <img src="{{ asset('img/flor-1.svg') }}" alt="Flor" class="w-10 ">
        VEGANA
        <img src="{{ asset('img/flor-2.svg') }}" alt="Flor" class="w-12 ">
    </h2>

    <div class="flex items-center justify-center gap-6">
        <button id="prevVegana" class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-40">
           <img src="{{ asset('img/rosaaa.png') }}" alt="Anterior" class="w-12 rotate-180">
        </button>

        <div class="overflow-hidden w-[1300px]">
            <div id="carouselVegana" class="flex justify-center gap-6 transition-transform duration-700 ease-in-out">
                                {{-- CARD 1 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden ">
                    <img src="{{ asset('img/pansitos.png') }}" alt="Panadería Rosetta" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[43px] left-0 bg-[#D33882] text-[#FFF7EF] font-SpaceGrotesk-Bold   px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        CDMX
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 uppercase">Panadería Rosetta</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                            Ofrece opciones veganas <br>en su menú.
                        </p>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/nader.png') }}" alt="Café Nader" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[35px] left-0 bg-[#D33882] text-[#FFF7EF] font-SpaceGrotesk-Bold  px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        CANCÚN
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 35px uppercase">Café Nader</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                            Conocido por sus opciones <br>veganas y vegetarianas.
                        </p>
                    </div>
                </div>

                {{-- CARD 3 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/hierba.png') }}" alt="Hierba Dulce" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[35px] left-0 bg-[#D33882] text-[#FFF7EF] font-SpaceGrotesk-Bold px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        OAXACA
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 uppercase">Hierba Dulce</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                            Restaurante vegetariano con <br>opciones veganas.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <button id="nextVegana" class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-100">
            <img src="{{ asset('img/rosaaa.png') }}" alt="Siguiente" class="w-12">
        </button>
    </div>
</section>

@endsection


