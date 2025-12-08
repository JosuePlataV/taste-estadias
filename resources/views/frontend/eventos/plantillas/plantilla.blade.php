@extends('layouts.frontend')
@section('title', 'plantilla')


@section('content' )
<section class="relative h-[730px] overflow-hidden flex flex-col justify-center items-center text-center container">
    <img src="{{ asset('img/eventosfondo.png') }}" alt="Fondo" class="absolute inset-0  object-cover -z-10" />
    <div class="container relative z-10 flex flex-col items-center">
        <h2 class="font-SpaceGrotesk-Bold text-[#FFF7EF] text-[40px] leading-tight">
            Conectando personas, sabores y culturas
        </h2>
        <span class="text-[#F27E1E] font-Cubano text-[85px] leading-none drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
            EN CADA<span class="text-[#FF3696]"> EVENTO</span>
        </span>
    </div>

    <svg
        class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
        viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
        <path
            d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
            fill="#FFF7EF" />
    </svg>
</section>

<section class="bg-[#FFF7EF]   container">
    <section class="w-full bg-[#FFF7EF] py-10 container">
        <div class="max-w-4xl mx-auto px-6 text-center text-[#534741]">

          
            <div class="flex items-center justify-center gap-2 mb-6">
                <img src="{{ asset('img/flor-1.svg') }}" alt="Flor izquierda" class="w-9">
                <h1 class="font-Cubano text-[50px] leading-none">
                    FERIA DEL MOLE
                </h1>
                <img src="{{ asset('img/flor-2.svg') }}" alt="Flor derecha" class="w-10">
            </div>

          
            <div class="flex flex-col md:flex-row justify-center gap-16 m-12 text-[#534741]">

                <
                <div class="flex flex-col text-left">
                 
                    <div class="flex items-center gap-1">
                        <img src="{{ asset('img/calendario.svg') }}" alt="Calendario" class="w-4 h-4">
                        <p class="font-SpaceGrotesk-Bold uppercase text-[16px] leading-tight">
                            FECHA
                        </p>
                    </div>
                  
                    <p class="font-space-grotesk-regular text-[16px] leading-tight">
                        3 - 26 de octubre
                    </p>
                </div>

                <div class="flex flex-col text-left">
                  
                    <div class="flex items-center gap-1">
                        <img src="{{ asset('img/ubi-rosa.svg') }}" alt="Ubicación" class="w-4 h-4">
                        <p class="font-SpaceGrotesk-Bold uppercase text-[16px] leading-tight">
                            UBICACIÓN
                        </p>
                    </div>
                   
                    <p class="font-space-grotesk-regular text-[16px] leading-tight">
                        San Pedro Atocpan, Milpa Alta, CDMX.
                    </p>
                </div>

            </div>

       
            <p class="font-space-grotesk-regular text-[16px] leading-relaxed max-w-3xl mx-auto">
                La Feria Nacional del Mole celebra su edición número 48 en este 2025 con <br>
                una experiencia gastronómica que incluirá un recorrido por las distintas <br>
                variedades de uno de los platillos más típicos de la cocina mexicana. <br>
            </p>

        </div>
    </section>


    {{-- carrusel --}}
    <section class="flex items-center justify-center gap-8">


        <button id="prevBtn"
            class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-40">
            <img src="{{ asset('img/p-icono-derecho.png') }}" alt="Anterior" class="w-10 h-10 rotate-180">
        </button>

        <div class="overflow-hidden w-[1200px]">
            <div id="carousel"
                class="flex gap-7 transition-transform duration-700 ease-in-out ">
                @foreach (['1-mole.svg', '2-mole.svg', '3-frijoles.svg'] as $img)
                <div class="min-w-[350px] h-[350px]  overflow-hidden flex-shrink-0">
                    <img src="{{ asset('img/' . $img) }}" alt="Platillo" class="w-full h-full object-cover">
                </div>
                @endforeach
            </div>
        </div>
        <button id="nextBtn"
            class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-100">
            <img src="{{ asset('img/p-icono-derecho.png') }}" alt="Siguiente" class="w-10 h-10">
        </button>
    </section>


    <section class="w-full bg-[#FFF7EF] py-10">
        <div class="max-w-3xl mx-auto px-6 text-center text-[#534741]">
            <p class="font-space-grotesk-regular text-[16px] leading-relaxed mb-4">
                La Feria del Mole de San Pedro Atocpan es una de las celebraciones <br>
                gastronómicas más importantes de la Ciudad de México.
            </p>

            <p class="font-space-grotesk-regular text-[16px] leading-relaxed mb-4">
                Cada año, reúne a familias, turistas y amantes de la cocina mexicana <br>
                para disfrutar del tradicional mole en sus distintas variedades, <br>
                acompañado de música, danza y actividades culturales.
            </p>

            <p class="font-space-grotesk-regular text-[16px] leading-relaxed">
                Un evento lleno de sabor y tradición que enaltece el patrimonio <br>
                culinario de Milpa Alta.
            </p>
        </div>
    </section>




    <section class="flex justify-center my-8">


        <div style="position:relative; width:848px; height:450px;">

            <!-- maps invisible como los fantasmas de mi casa uyyy -->
            <a href="https://www.google.com/maps/place/Feria+del+Mole/@19.2146886,-99.0532472,17z"
                target="_blank"
                style="position:absolute; top:0; left:0; right:0; bottom:0; z-index:2;">
            </a>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.5538342397704!2d-99.05337172501893!3d19.21468008201865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce05c083af9ca1%3A0x3200dcee08aec2b0!2sFeria%20del%20Mole!5e0!3m2!1ses-419!2smx!4v1763254029573!5m2!1ses-419!2smx" width="848" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>



    <section class="w-full bg-[#FFF7EF] py-15 ">
        <div class="max-w-4xl mx-auto px-6 text-[#534741]">


            <h2 class="text-center font-SpaceGrotesk-Bold text-[30px]  mb-8">
                DETALLES
            </h2>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-8 text-[16px]">

                <div class="space-y-4">
                    <div>
                        <p class="font-SpaceGrotesk-Bold  text-[18px]">Ubicación</p>
                        <p class="font-space-grotesk-regular">
                            Tula, Nushtla, Milpa Alta, 12220 San Pedro <br>
                            Atocpan, CDMX.
                        </p>
                    </div>

                    <div>
                        <p class="font-SpaceGrotesk-Bold text-[18px]">Precio</p>
                        <p class="font-space-grotesk-regular ">
                            Gratuita de lunes a jueves y un donativo <br>
                            de $20 pesos de viernes a domingo.
                        </p>
                    </div>

                    <div>
                        <p class="font-SpaceGrotesk-Bold text-[18px]">Actividades adicionales</p>
                        <p class="font-space-grotesk-regular">
                            Presentaciones de grupos musicales, <br>
                            danza folclórica, lucha libre, actividades <br>
                            infantiles, venta de artesanías y licores, y <br>
                            en algunos casos, globos aerostáticos.
                        </p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div>
                        <p class="font-SpaceGrotesk-Bold text-[18px]">Horarios</p>
                        <p class="font-space-grotesk-regular">
                            Generalmente abre desde temprano <br>hasta la noche.
                        </p>
                    </div>

                    <div>
                        <p class="font-SpaceGrotesk-Bold text-[18px]">Página web</p>
                        <a
                            href="https://ferianacionaldelmole.com.mx/"
                            target="_blank"
                            class="font-space-grotesk-regular text-[#D33882] hover:underline hover:decoration-[#D33882] focus:underline focus:decoration-[#D33882] underline-offset-2">
                            https://ferianacionaldelmole.com.mx/
                        </a>
                    </div>


                    <div>
                        <p class="font-SpaceGrotesk-Bold text-[18px]">Variedad</p>
                        <p class="font-space-grotesk-regular">
                            Más de 22 restaurantes y puestos <br>
                            participantes, con opciones de moles <br>
                            tradicionales (almendrado, rojo, verde, <br>
                            pipián), de frutas, y vegetarianos/veganos. 
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>

@endsection