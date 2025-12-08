@extends('layouts.frontend')
@section('title', 'home')


@section('content')
<section class="bg-[#FFF7EF] container ">


  <section class="relative z-30 h-[690px] overflow-hidden flex flex-col justify-center items-center text-center container ">
    <div class="absolute inset-0 -z-10">
      <img src="{{ asset('img/1.svg') }}" alt="Fondo" class="w-full h-full object-cover">
    </div>

    <div class="w-full max-w-3xl">
      <div class="flex items-center bg-[#FFF7EF]/20 rounded-full px-3 py-2">
        <div class="flex items-center flex-1 bg-[#FFFFFF] rounded-full shadow-md overflow-hidden px-1 py-1">
          <input
            type="text"
            placeholder="Encuentra tu próxima experiencia gastronómica"
            class="flex-1 px-3 py-2 text-[#534741] placeholder:text-[#534741] outline-none">
        </div>
        <img src="{{ asset('img/Vector.png') }}" alt="Ubicación" class="ml-3 w-7 h-9">
      </div>
    </div>
    <svg class="pointer-6vents-none absolute bottom-0 left-0 w-full h-[100px] z-20"
      viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70  C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
        fill="#FFF7EF" />
    </svg>
  </section>



  <section class="h-[590px] px-6 py-7 mt-19">


    <div class=" absolute -bottom-20  right-10 z-30 ">
      <img src="{{ asset('img/Foto-chile.png') }}" alt="Plato" class="w-80">
    </div>

    <h2 class="flex items-center justify-center gap-4 text-center text-[50px] md:text-[50px] font-Cubano mb-12">
      <img src="{{ asset('img/icono-izquierdo.png') }}" alt="" class="w-8 h-8 md:w-10 md:h-10">
      <span>
        <span class="text-[#F82A8B]">NUEVAS</span>
        <span class="text-[#534741]"> RECOMENDACIONES</span>
      </span>
      <img src="{{ asset('img/icono-derecho.png') }}" alt="" class="w-8 h-8 md:w-10 md:h-10">
    </h2>

    <div class="relative">

      <img src="img/Lineas-continuas.svg"
        alt="Lineas continuas"
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-0">

      <div class="absolute right-12 mt-31 ">
        <img src="img/Boton-next.svg" alt="next" class="h-[60px] md:h-[60px]">
      </div>

      <div class="flex flex-wrap justify-center gap-[30px] relative z-10">
        <div class="w-[285px] h-[410px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="img/cards-1.svg" alt="Pangea" class="w-[285px]  h-[150px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[18px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-xs">Monterrey</span>
            </div>
          </div>

          <div class="p-3">
            <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741] mb-3">PANGEA</h3>

            <div class="flex gap-2 mb-3">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Ubicación</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Parque Arboleda Av. Roble <br>
                  #660 Local I-101, Col. Valle <br>
                  del Campestre, San Pedro <br>
                  Garza García, 66259 NLE
                </p>
              </div>
            </div>

            <div class="flex gap-2">
              <img src="{{ asset('img/icono-reloj.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Horario</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Lun–Sáb 13:00–00:00
                </p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Dom 13:00–17:00
                </p>
              </div>
            </div>
          </div>
        </div>


        <!-- segunda-->
        <div class="w-[285px]  h-[410px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="img/cards-2.svg" alt="Esquina Común" class="w-[285px]  h-[150px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[18px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-xs">CDMX</span>
            </div>
          </div>

          <div class="p-3">
            <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741] mb-3">ESQUINA COMÚN</h3>


            <div class="flex gap-2 mb-3">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Ubicación</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Fernando Montes de Oca 86 <br>
                  Colonia Condesa Cuauhtémoc, <br>
                  Ciudad de México, 06140 CDMX
                </p>
              </div>
            </div>


            <div class="flex gap-2">
              <img src="{{ asset('img/icono-reloj.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Horario</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Vie: 18:00-22:00</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Sáb: 12:00-22:00</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Dom: 13:00-19:00</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tercera-->
        <div class="w-[285px]  h-[410px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="img/cards-3.svg" alt="Esquina Común" class="w-[285px] h-[150px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[18px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-xs">Guadalajara</span>
            </div>
          </div>

          <div class="p-3">
            <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741] mb-3">BRUNA</h3>


            <div class="flex gap-2 mb-3">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Ubicación</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Lerdo de Tejada #2418, <br>
                  Col. Lafayette, <br>
                  Guadalajara, 49150 JAL
                </p>
              </div>
            </div>


            <div class="flex gap-2">
              <img src="{{ asset('img/icono-reloj.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Horario</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Lun, Dom 14:00–23:00</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Mar, Mié 14:00–00:00</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Jue–Sáb 14:00–01:00</p>
              </div>
            </div>
          </div>
        </div>

        <!-- cuarta-->
        <div class="w-[285px]  h-[410px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="img/cards-4.svg" alt="Esquina Común" class="w-[285px]  h-[150px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[18px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-xs">Riviera Maya</span>
            </div>
          </div>

          <div class="p-3">
            <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741] mb-3">CASA AMATE</h3>


            <div class="flex gap-2 mb-3">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Ubicación</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">
                  Carretera Federal Cancún- <br>
                  Playa Del Carmen Km. 298, <br>
                  Playa del Carmen-Solidaridad, <br>
                  Playa del Carmen, 77710 ROO
                </p>
              </div>
            </div>


            <div class="flex gap-2">
              <img src="{{ asset('img/icono-reloj.svg') }}" alt="" class="w-4 h-4 mt-[3px]">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] mb-[2px]">Horario</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Happy Hour:</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Todos los días 17:00–18:00</p>
                <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug">Cena: Todos los días 18:00–22:00</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <section class="relative w-full py-24 bg-[#FFF7EF] container">
    <img src="{{ asset('img/elote.svg') }}" alt="Elote"
      class="absolute left-0 top-0 w-40 md:w-86 lg:w-86">

    <div class="flex justify-center items-center relative z-10 mt-16 mb-19">
      <h2 class="flex items-center gap-2 font-Cubano text-[30px] md:text-[50px] text-[#534741] uppercase">
        <img src="{{ asset('img/flor-1.svg') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
        Destinos <span class="text-[#F27E1E]">con sazón</span>
        <img src="{{ asset('img/flor-2.svg') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
      </h2>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-y-12 gap-x-6 px-6 md:px-16 uppercase">
      @php
      $destinos = [
      ['img' => 'cdmx.svg', 'nombre' => 'CDMX'],
      ['img' => 'guadalajara.svg', 'nombre' => 'Guadalajara'],
      ['img' => 'monterrey.svg', 'nombre' => 'Monterrey'],
      ['img' => 'rivera-maya.svg', 'nombre' => 'Riviera Maya'],
      ['img' => 'michoacan.svg', 'nombre' => 'Michoacán'],
      ['img' => 'puebla.svg', 'nombre' => 'Puebla'],
      ['img' => 'yucatan.svg', 'nombre' => 'Yucatán'],
      ['img' => 'oaxaca.svg', 'nombre' => 'Oaxaca'],
      ['img' => 'valledeguadalupe.svg', 'nombre' => 'Valle de Guadalupe'],
      ['img' => 'veracruz.svg', 'nombre' => 'Veracruz'],
      ];
      @endphp

      @foreach ($destinos as $destino)
      <div class="flex flex-col items-center text-center">
        <!-- Contenedor circular -->
        <div class="relative w-46 h-46 flex items-center justify-center">
          <!-- Fondo círculo -->
          <img src="{{ asset('img/Circulos.svg') }}" alt="Círculo"
            class="absolute inset-0 w-full h-full">
          <!-- Imagen destino -->
          <img src="{{ asset('img/' . $destino['img']) }}" alt="{{ $destino['nombre'] }}"
            class="w-38 h-38 rounded-full object-cover relative">
        </div>
        <!-- Texto -->
        <p class="mt-4 font-SpaceGrotesk-Bold text-[#534741]">
          {{ $destino['nombre'] }}
        </p>
      </div>
      @endforeach

    </div>
  </section>


  <section class="relative bg-[#FFF7EF] h-[913px] container">
    <!-- Fondo Rosa -->
    <div class="relative bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/fondo-rosa.png') }}');">

      <!-- Taco flotante más grande y arriba -->
      <img src="{{ asset('img/tacos.svg') }}"
        alt="Taco"
        class="absolute -top-28 right-0 w-[270px] md:w-[320px] z-10">

      <!-- Título -->
      <div class="flex items-center justify-center gap-4 pt-30">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="" class="w-12 h-12">
        <h2 class="text-[#FFF7EF] font-Cubano text-[50px] uppercase">Nuestro Blog</h2>
        <img src="{{ asset('img/icono-derecho.png') }}" alt="" class="w-12 h-12">
      </div>

      <div class="flex justify-center space-x-[80px] px-6 md:px-16 py-12 pt-22">
        <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
          <img src="{{ asset('img/semillas.svg') }}" alt="Cacao" class="w-[370px] h-[550px] object-cover">
          <div class="absolute inset-0 bg-[#080808]/52 rounded-[40px]"></div>
          <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
          <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
            <h3 class="font-SpaceGrotesk-Bold text-lg">El cacao mexicano, nuevo<br> Patrimonio Cultural de la<br> Humanidad</h3>
            <p class="font-space-grotesk-regular text-sm mt-2">
              La UNESCO declaró al cacao mexicano <br> como Patrimonio Cultural Inmaterial. <br>
              Más que un ingrediente, es un símbolo de identidad mesoamericana que <br>coneca tradición, historia y futuro.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
          <img src="{{ asset('img/frutas.svg') }}" alt="Mercados CDMX" class="w-[370px] h-[550px] object-cover">
          <div class="absolute inset-0 bg-[#080808]/52 rounded-[40px]"></div>
          <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
          <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
            <h3 class="font-SpaceGrotesk-Bold text-lg">Los mercados de la CDMX<br> que todo viajero debe<br>conocer</h3>
            <p class="font-space-grotesk-regular text-sm mt-2">
              De la Merced a San Juan, los mercados<br> capitalinos son una ventana al corazón <br>gastronómico de México: ingredientes<br> únicos, sabores locales y el caos<br> vibrante que alimenta a la ciudad.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
          <img src="{{ asset('img/restaurante.svg') }}" alt="Pujol" class="w-[370px] h-[550px] object-cover">
          <div class="absolute inset-0 bg-[#080808]/52 rounded-[40px]"></div>
          <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
          <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
            <h3 class="font-SpaceGrotesk-Bold text-lg">Pujol recupera la cima en <br>Latin America’s 50 Best<br> Restaurants</h3>
            <p class="font-space-grotesk-regular text-sm mt-2">
              El restaurante Pujol de Enrique Olvera<br> vuelve al primer lugar de la lista más<br> prestigiosa de la región, consolidando a<br> México como epicentro de la innovación<br> culinaria en Latinoamérica.
          </div>
        </div>
      </div>
      <!-- Botón más abajo -->
      <div class="flex justify-center mt-12 pb-24 relative z-20">
        <a href="#"
          class="bg-[#F27E1E] text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold px-8 py-6 rounded-[15px] shadow-md relative z-30">
          VER MÁS EN EL BLOG >>
        </a>
      </div>

    </div>
  </section>


  <!-- Contenedor principal -->
  <section class="relative h-[1600px] mx-auto container ">
    <!-- Fondo con overlay -->
    <div class="absolute inset-0">
      <img src="img/fondo-3.jpg" class="w-full h-full object-cover" alt="Fondo">
      <div class="absolute inset-0 bg-[#080808]/60 "></div>
    </div>

    <!-- Contenido -->
    <div class="relative z-10 flex flex-col items-center justify-center px-6 ">

      <!-- Título -->
      <div class="flex items-center gap-4 mt-34">
        <img src="img/flor-1.svg" alt="Flor 1" class="w-10 h-10">
        <h2 class="text-[50px] font-Cubano text-[#FFF7EF]">SABORES CON VOZ</h2>
        <img src="img/flor-2.svg" alt="Flor 2" class="w-10 h-10">
      </div>

      <!-- Fila 1 -->
      <div class="flex gap-25 mt-40">
        <!-- Card -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo.svg" alt="Chef" class="w-[140px] h-[140px]  rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">Massimo Bottura</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">Italia | Europa</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular "> Osteria Francescana</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696] ">“</span>La comida no solo es<br> comida, es arte, emoción<br> y cultura.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>

        <!-- Card 2 -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo-1.svg" alt="Chef" class="w-[140px] h-[140px] rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">René Redzepi</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">Dinamarca | Europa</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular"> Noma</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696]">“</span>La creatividad surge<br> de la curiosidad, no de<br> la tradición.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>

        <!-- Card 3 -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo-2.svg" alt="Chef" class="w-[140px] h-[140px] rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">Joan Roca</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">España | Europa</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular"> El Celler de Can Roca</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696]">“</span>La gastronomía es una<br> forma de compartir<br> emociones y recuerdos.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>
      </div>

      <!-- Fila 2 -->
      <div class="flex gap-25 mt-40">
        <!-- Card Enrique -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo-3.svg" alt="Chef" class="w-[140px] h-[140px] rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">Enrique Olvera</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">México | Latinoamérica</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular">Pujol</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696]">“</span>La cocina mexicana es<br> infinita; cada plato es una<br> historia que merece ser<br> contada.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>

        <!-- Card Dominique -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo-4.svg" alt="Chef" class="w-[140px] h-[140px] rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">Dominique Crenn</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">Francia | Europa</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular"> Atelier Crenn</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696]">“</span>La cocina es poesía; cada<br> ingrediente cuenta una<br> historia.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>

        <!-- Card Gastón -->
        <div class="w-[350px] h-[440px] bg-[#080808]/51 rounded-[25px] flex flex-col items-center text-center p-6">
          <img src="img/foto-Massimo-5.svg" alt="Chef" class="w-[140px] h-[140px] rounded-[598px] -mt-[90px]">
          <h3 class="mt-6 text-[30px] font-SpaceGrotesk-Bold text-[#FFF7EF]">Gastón Acurio</h3>
          <p class="text-[#FFF7EF] text-[20px] font-space-grotesk-regular">Perú | Latinoamérica</p>
          <p class="text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold  mt-6">Restaurante:</p>
          <p class="text-[#FFF7EF] text-[20px]  font-space-grotesk-regular"> Astrid y Gastón</p>
          <p class="mt-8 text-base font-SpaceGrotesk-Bold text-[#FFF7EF] text-[20px]">
            <span class="text-[#FF3696]">“</span>La cocina peruana es el<br> puente entre nuestra<br> historia y nuestra<br> creatividad.<span class="text-[#F48E3B]">”</span>
          </p>
        </div>
      </div>
      <div class="flex justify-center mt-18  relative z-20">
        <a href="#"
          class="bg-[#FF3696] text-[#FFF7EF] text-[20px] font-SpaceGrotesk-Bold px-8 py-6 rounded-[15px] shadow-md relative z-60">
          CONOCE SUS HISTORIAS >>
        </a>
      </div>
    </div>
    <svg class="pointer-6vents-none absolute bottom-0 left-0 w-full h-[100px] "
      viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70  C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
        fill="#FFF7EF" />
    </svg>
  </section>

  <section class="relative bg-[#FFF7EF] px-[40px]">

    <div class="relative max-w-[1200px] mx-auto flex flex-col-reverse md:flex-row items-center md:items-center py-8 gap-[25px]">

      <div class="flex flex-col justify-center w-full md:w-1/2 text-center md:text-left">
        <h2 class="text-[38px] font-Cubano text-[#534741]">
          <img src="img/icono-izquierdo.png" alt="icono" class="inline w-10 h-10">
          <span class="text-[#FF3696]">DEL ANTOJO</span> AL DESTINO
          <img src="img/icono-derecho.png" alt="icono" class="inline w-10 h-10">
        </h2>

        <p class="mt-6 text-[18px] font-space-grotesk-regular text-[#000000] leading-relaxed pl-10">
          La cocina mexicana es un universo que se vive en <br>
          cada rincón: desde un taco de esquina hasta un <br>
          menú de degustación que viaja por los sentidos.
        </p>
        <p class="mt-4 text-[18px] font-space-grotesk-regular text-[#000000] leading-relaxed pl-10">
          <span class="font-SpaceGrotesk-Bold text-[#D33882]">Nuestra Guía Gastronómica</span>
          reúne lo mejor de cada<br> experiencia, para que descubras que comer no es<br>
          solo llenar el plato, sino conocer historias,<br>
          tradiciones y <span class="font-SpaceGrotesk-Bold text-[#D33882]">nuevas formas de saborear México.</span>
        </p>

        <!-- Encuentra tu próximo destino -->
        <h3 class="mt-8 font-Cubano text-[#534741] text-[18px] pl-10">ENCUENTRA TU PRÓXIMO DESTINO POR:</h3>

        <div class="flex flex-wrap items-center justify-center md:justify-start gap-6 mt-6 pl-10">
          <!-- Opción 1 -->
          <div class="flex flex-col items-center">
            <img src="img/ubi.png" alt="Ubicación" class="w-10 h-10 mb-2">
            <span class="font-SpaceGrotesk-Bold text-[#534741]">UBICACIÓN</span>
          </div>
          <div class="pt-12">
            <img src="img/punto-rosa.png" alt="punto rosa" class="w-3 h-3">
          </div>


          <!-- Opción 2 -->
          <div class="flex flex-col items-center">
            <img src="img/calendario.png" alt="Ocasión" class="w-10 h-10 mb-2">
            <span class="font-SpaceGrotesk-Bold text-[#534741]">OCASIÓN</span>
          </div>
          <div class="pt-12">
            <img src="img/punto-amarillo.png" alt="punto rosa" class="w-3 h-3">
          </div>

          <!-- Opción 3 -->
          <div class="flex flex-col items-center">
            <img src="img/cubiertos.png" alt="Tipo de comida" class="w-10 h-10 mb-2">
            <span class="font-SpaceGrotesk-Bold text-[#534741]">TIPO DE COMIDA</span>
          </div>
          <div class="pt-12">
            <img src="img/punto-rosa.png" alt="punto rosa" class="w-3 h-3">
          </div>

          <!-- Opción 4 -->
          <div class="flex flex-col items-center">
            <img src="img/ticket.png" alt="Precio" class="w-10 h-10 mb-2">
            <span class="font-SpaceGrotesk-Bold text-[#534741]">PRECIO</span>
          </div>
        </div>
      </div>


      <div class="relative flex justify-center items-center w-full md:w-1/2">
        <img src="img/circulo-grande.png" alt="Círculo borde" class="absolute w-[450px] h-[450px]">
        <div class="absolute bg-[#F48E3B] rounded-full w-[400px] h-[400px]"></div>

        <img src="img/libro.png" alt="Guía Gastronómica" class="relative w-[520px] h-auto z-10">
      </div>

    </div>

  </section>


  <section class="container">

    <div class="h-[980px] px-6 md:px-0 py-7">


      <h2 class="flex items-center justify-center gap-4 text-center text-[50px] md:text-[50px] font-Cubano mb-12 mt-20">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="" class="w-8 h-8 md:w-10 md:h-10">
        <span>
          <span class="text-[#F82A8B]">PRÓXIMOS</span>
          <span class="text-[#534741]">EVENTOS</span>
        </span>
        <img src="{{ asset('img/icono-derecho.png') }}" alt="" class="w-8 h-8 md:w-10 md:h-10">
      </h2>

      <div class="relative">

        <img src="img/Lineas-continuas.svg"
          alt="Lineas continuas"
          class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-0">

        <div class="absolute right-11 mt-52  ">
          <img src="img/Boton-next.svg" alt="next" class="h-[60px] md:h-[60px]">
        </div>

        <div class="flex flex-wrap justify-center gap-[30px] relative z-10">
          <div class="w-[298.99px] h-[525px]  bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="img/p-1.png" alt="Elote" class="w-[298.99px] h-[197.48px] object-cover">
            </div>
            <div class="p-5">
              <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741]">LATINO<br>GASTRONOMIC 2025</h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-5">4–6 de septiembre</p>
              <div class="flex items-start gap-1">
                <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
                <div>
                  <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
                </div>
              </div>
              <div class="flex items-star mb-5">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Puebla, México</p>
              </div>


              <div class="flex items-start gap-2">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug">Congreso internacional que <br> rinde homenaje al cacao y<br> reúne a chefs y expertos en<br> gastronomía latina.</p>
              </div>
            </div>
          </div>

          <!-- segunda-->
          <div class="w-[298.99px] h-[525px]  bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="img/p-2.png" alt="platos" class="w-[298.99px] h-[197.48px] object-cover">
            </div>
            <div class="p-5">
              <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741]">VIZAG FOOD <br>FESTIVAL</h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-5">5–7 de septiembre</p>
              <div class="flex items-start gap-1">
                <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
                <div>
                  <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
                </div>
              </div>
              <div class="flex items-star mb-5">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Visakhapatnam, India</p>
              </div>


              <div class="flex items-start gap-2">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug">Festival con más de 30 puestos <br>de comida que ofrecen una <br> mezcla de cocinas locales e <br> internacionales, además de <br> presentaciones culturales y<br> concursos culinarios.</p>
              </div>
            </div>
          </div>
          <!-- Tercera-->
          <div class="w-[298.99px] h-[525px]  bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="img/p-3.png" alt="copa" class="w-[298.99px] h-[197.48px] object-cover">
            </div>
            <div class="p-5">
              <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741]">MARTINI EXPO</h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-8">12–13 de septiembre</p>
              <div class="flex items-start gap-1">
                <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
                <div>
                  <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
                </div>
              </div>
              <div class="flex items-star mb-8">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Nueva York, EE. UU.</p>
              </div>


              <div class="flex items-start gap-2">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug">Exposición dedicada al <br>martini, con catas, seminarios <br>y presentaciones de <br> bartenders reconocidos.</p>
              </div>
            </div>
          </div>
          <!--cuarta-->
          <div class="w-[298.99px] h-[525px]  bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="img/p-4.png" alt="juegomecanico" class="w-[298.99px] h-[197.48px] object-cover">
            </div>
            <div class="p-5">
              <h3 class="font-SpaceGrotesk-Bold text-[16px] text-[#534741]">THE BIG E</h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-5">12–28 de septiembre</p>
              <div class="flex items-start gap-1">
                <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
                <div>
                  <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
                </div>
              </div>
              <div class="flex items-star mb-5">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px]">West Springfield, <br>Massachusetts, EE. UU.</p>
              </div>


              <div class="flex items-start gap-2">
                <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug">Feria que celebra la herencia <br>agrícola de Nueva Inglaterra,<br> con una amplia variedad de <br> alimentos y espectáculos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>



  <!-- Bloque naranja -->
  <section class="relative bg-[#FFF7EF]">
    <!-- Contenedor principal -->
    <div class="relative bg-[#F27E1E]">
      <div class="w-[1520px] h-[400px]  relative">

        <!-- Título -->
        <h2 class="font-Cubano text-[60px] text-[#F27E1E] absolute -top-17 ml-20 ">
          NEWSLETTER
        </h2>

        <div class="text-[#FFF7EF] max-w-[600px] ml-20 pt-10">
          <h3 class="font-SpaceGrotesk-Bold text-[20px] ">
            Sé parte de la comunidad que <br> celebra la gastronomía mexicana
          </h3>
          <p class="font-space-grotesk-regular text-[17px] leading-relaxed pt-6 pb-15">
            Únete a nuestra comunidad y recibe directamente en tu correo <br> electrónico las últimas noticias,
            recetas exclusivas, entrevistas <br> con chefs, eventos y tendencias del mundo gastronómico <br> mexicano.
            Mantente al día y descubre sabores, historias y <br>experiencias únicas que sólo Taste México puede ofrecer.
          </p>

          <form action="#" method="POST"
            class="flex items-center w-full max-w-md bg-[#FFF7EF]/20 rounded-full overflow-hidden pl-3">

            <input type="email" placeholder="Correo electrónico"
              class="flex-1 bg-[#FFFFFF] rounded-full  overflow-hidden px-2 py-2 pl-10 text-[#534741] placeholder-[#534741] font-space-grotesk-regular focus:outline-none" />

            <button type="submit"
              class="flex items-center gap-2 text-[#FFF7EF] px-6 py-3 font-space-grotesk-regular rounded-full">
              Suscribirme
              <span class="flex items-center justify-center w-8 h-8 rounded-full">
                <img src="{{ asset('img/flecha-directa.png') }}" alt="flecha" class="w-7 h-7">
              </span>
            </button>
          </form>
        </div>
      </div>

      <div class="relative">
        <img src="{{ asset('img/collage.png') }}"
          alt="Collage"
          class="absolute bottom-[calc(var(--spacing)*-1)] right-0 w-[650px] h-auto pointer-events-none">
      </div>
    </div>
  </section>
</section>




@endsection