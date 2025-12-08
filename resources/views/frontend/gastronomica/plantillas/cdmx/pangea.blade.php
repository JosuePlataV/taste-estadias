@extends('frontend.gastronomica.index')

@section('gastronomica-content')

<section class="bg-[#FFF7EF] h-[1200px] flex flex-col items-center justify-center text-center">
    <div class="grid grid-cols-2 w-full">
        <img src="{{ asset('img/p-pangea.png') }}"
            alt="Fachada Pangea"
            class="w-full h-[500px] object-cover">
        <img src="{{ asset('img/p-platillos.png') }}"
            alt="Platillos Pangea"
            class="w-full h-[500px] object-cover">
    </div>

    <div class="flex items-center justify-center gap-4 mt-12">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Decoración izquierda" class="w-10">
        <h2 class="font-Cubano text-[#534741] text-[52px] uppercase tracking-wide">Pangea</h2>
        <img src="{{ asset('img/icono-derecho.png') }}" alt="Decoración derecha" class="w-10">
    </div>

    <h3 class="mt-6 font-SpaceGrotesk-Bold text-[#534741] text-[25px] uppercase">
        Acerca de este restaurante
    </h3>

    <div class="flex flex-wrap justify-center gap-4 mt-6">
        <div class="bg-[#FFF7EF] border border-[#D33882] text-[#D33882] font-space-grotesk-regular 
                flex items-center justify-center w-[340px] h-[44px] rounded-[50px] text-[18px]">
            Bueno para ocasiones especiales
        </div>
        <div class="bg-[#FFF7EF] border border-[#D33882] text-[#D33882] font-space-grotesk-regular 
                flex items-center justify-center w-[130px] h-[44px] rounded-[50px] text-[18px]">
            Elegante
        </div>
        <div class="bg-[#FFF7EF] border border-[#D33882] text-[#D33882] font-space-grotesk-regular 
                flex items-center justify-center w-[330px] h-[44px] rounded-[50px] text-[18px]">
            Ideal para disfrutar vinos finos
        </div>
    </div>

    <p class="max-w-3xl mt-10 text-[#534741] text-[18px] font-space-grotesk-regular leading-relaxed px-6">
        Pangea es un restaurante de alta cocina contemporánea dirigida <br>
        por Guillermo González Beristáin.El juego entre aroma, sabor, <br>
        color y textura en cada platillo crean una experiencia culinaria <br>
        inolvidable.En su cocina se refleja lo mejor de los ingredientes <br>
        seleccionados, siempre con un sello personal.Además posee una <br>
        de las mejores cartas de vino en México.
    </p>

    <a href="https://restaurantepangea.com/menu-restaurante-pangea/" target="_blank"
        class="mt-10 bg-[#D33882] text-[#FFF7EF] font-SpaceGrotesk-Bold text-[22px] px-9 py-2 rounded-[15px]
            shadow-md hover:opacity-85 transition-all duration-300">
        MENÚ
    </a>
</section>

{{-- carrusel --}}
<section class="bg-[#FFF7EF] py-16 flex items-center justify-center gap-8">


    <button id="prevBtn"
        class="bg-transparent rounded-full p-3 transition duration-300 focus:outline-none opacity-40">
        <img src="{{ asset('img/p-icono-derecho.png') }}" alt="Anterior" class="w-10 h-10 rotate-180">
    </button>

    <div class="overflow-hidden w-[1200px]">
        <div id="carousel"
            class="flex gap-6 transition-transform duration-700 ease-in-out">
            @foreach (['p-chuletas.png', 'p-caviar.png', 'p-queso.png', 'p-chuletas.png', 'p-caviar.png', 'p-queso.png'] as $img)
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

{{-- maps --}}
<section class="flex justify-center my-8">

    <div class="relative overflow-hidden" style="max-width:1000px; ">
        <h2 class="text-center font-SpaceGrotesk-Bold text-[30px] text-[#534741] tracking-wider mb-8">
            DETALLES
        </h2>

        <!-- maps invisible como los fantasmas de mi casa uyyy -->
        <a href="https://www.google.com/maps/place/PANGEA/@25.6500876,-100.3581593,17z/data=!3m1!4b1!4m6!3m5!1s0x8662bd95b36a19f1:0x5e5e95af1550f416!8m2!3d25.6500876!4d-100.3581593!16s%2Fg%2F11b6_9xv28"
            target="_blank"
            style="position:absolute; top:0; left:0; right:0; bottom:0; z-index:2;">
        </a>

        <!-- Iframe -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.448971625896!2d-100.3581593406715!3d25.650087631925523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bd95b36a19f1%3A0x5e5e95af1550f416!2sPANGEA!5e0!3m2!1ses-419!2smx!4v1761276833574!5m2!1ses-419!2smx"
            width="1000"
            height="350"
            style="border:0; pointer-events:none;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>


<section class="bg-[#FFF7EF] text-[#534741] font-space-grotesk-regular px-24 py-5">
    <h2 class="text-center font-SpaceGrotesk-Bold text-[30px] mb-2">
        ÁREAS DEL RESTAURANTE
    </h2>

    <div class="flex justify-center mb-14">
        <button class="border border-[#FF3696] text-[#FF3696] rounded-full px-6 py-2 text-[17px] mx-2">Terraza</button>
        <button class="border border-[#FF3696] text-[#FF3696] rounded-full px-6 py-2 text-[17px] mx-2">Interior</button>
    </div>


    <div class="flex justify-center text-[16px] leading-relaxed max-w-[1100px] mx-auto">


        <div class="w-[47%] ml-22  ">
            <div class="mb-5 relative pl-8">
                <img src="{{ asset('img/p-ubi.svg') }}" alt="Ubicación"
                    class="absolute left-0 top-[3px] w-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Ubicación</h3>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Pangea%20Parque%20Arboleda%20Av.%20Roble%20%23660%20Local%20I-101%20Col.%20Valle%20del%20Campestre%20San%20Pedro%20Garza%20Garc%C3%ADa%2C%20NLE%2066259"
                    class="underline hover:text-[#FF3696] mt-1 block">
                    Parque Arboleda Av. Roble #660 Local I-101,<br>
                    Col. Valle del Campestre, San Pedro Garza <br>García, 66259 NLE
                </a>
            </div>

            <div class=" pl-8">
                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Precios</h3>
                    <p>Más de $500 MXN</p>
                </div>

                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Ambiente</h3>
                    <p>Cena fina</p>
                </div>

                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Horarios</h3>
                    <p>Lunes - Sábados 13:00 - 00:00<br>Domingos 13:00 - 17:00</p>
                </div>

                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Página web</h3>
                    <a href="https://restaurantepangea.com/" target="_blank" class="underline text-[#FF3696]">
                        https://restaurantepangea.com/
                    </a>
                </div>

                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Opciones de pago</h3>
                    <p>AMEX, Mastercard, Visa</p>
                </div>

                <div class="mb-5">
                    <h3 class="font-SpaceGrotesk-Bold text-[18px]">Vestimenta recomendada</h3>
                    <p>De vestir</p>
                </div>
            </div>
        </div>

        <div class="w-[47%] pl-10">
            <div class="mb-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Galardonado</h3>
                <p>MICHELIN 1 STAR 2025<br>MICHELIN 1 STAR 2024</p>
            </div>

            <div class="mb-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Número de teléfono</h3>
                <a href="tel:+528181146601" class="text-[#FF3696] underline">81 8114 6601</a>
            </div>

            <div class="mb-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Cocina</h3>
                <p>Internacional, Mexicana contemporánea</p>
            </div>

            <div class="mb-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Detalles del estacionamiento</h3>
                <p>Servicio de Valet Parking</p>
            </div>

            <div class="mb-5">
                <h3 class="font-SpaceGrotesk-Bold text-[18px]">Adicional</h3>
                <p>
                    Banquete, Bar completo, Cargo por <br>
                    descorche, Cervezas, Cócteles, Comida <br>
                    al aire libre, Comida al aire libre, Comida <br>
                    para llevar, Sala para fumar, Salón <br>
                    privado, Trae tu propio vino, Vinos, <br>
                    Zona exterior para fumadores.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection