@extends('frontend.gastronomica.index')

@section('gastronomica-content')


{{-- ================= Moderado ================= --}}
<section class="bg-[#FFF7EF] py-16 flex flex-col items-center gap-8">
    <h2 class="flex items-center gap-2 font-Cubano text-[30px] md:text-[50px] text-[#534741] uppercase">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Flor" class="w-10 ">
        $$ MODERADO
        <img src="{{ asset('img/icono-derecho.png') }}" alt="Flor" class="w-12 ">
    </h2>

    <div class="flex items-center justify-center gap-6">
        <button id="prevAlta" class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-40">
            <img src="{{ asset('img/p-icono-derecho.png') }}" alt="Anterior" class="w-12 rotate-180">
        </button>

        <div class="overflow-hidden w-[1300px]">
            <div id="carouselAlta" class="flex justify-center  gap-6 transition-transform duration-700 ease-in-out">

                {{-- CARD 1 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/t-casa.png') }}" alt="La Casa de TOÑO" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[35px] left-0 bg-[#F27E1E] text-[#FFF7EF] font-SpaceGrotesk-Bold px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        OAXACA
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 uppercase">La Casa de TOÑO</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                           Sabor casero y ambiente <br>cálido donde cada comida se <br>siente como en casa.
                        </p>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/t-pocito.png') }}" alt="El Pocito" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[35px] left-0 bg-[#F27E1E] text-[#FFF7EF] font-SpaceGrotesk-Bold  px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        CANCÚN
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 uppercase">El Pocito</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                            Platillos tradicionales en un <br>rincón relajado para disfrutar en <br>familia.
                        </p>
                    </div>
                </div>

                {{-- CARD 3 --}}
                <div class="relative w-[400px] h-[550px] rounded-[40px] overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/t-olla.png') }}" alt="LA OLLA" class="w-full h-full object-cover">
                    <span
                        class="absolute top-[35px] left-0 bg-[#F27E1E] text-[#FFF7EF] font-SpaceGrotesk-Bold px-[25px] py-[3px] rounded-r-[5px] uppercase tracking-wider"
                        style="font-size:12px;">
                        OAXACA
                    </span>
                    <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
                    <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
                        <h3 class="font-SpaceGrotesk-Bold text-[26px] pl-5 mb-1 uppercase">LA OLLA</h3>
                        <p class="font-space-grotesk-regular text-[16px] mb-6 pl-5">
                           Cocina oaxaqueña auténtica <br>que celebra las raíces en cada <br>reunión familiar.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <button id="nextAlta" class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-100">
            <img src="{{ asset('img/p-icono-derecho.png') }}" alt="Siguiente" class="w-12">
        </button>
    </div>
</section>


@endsection


