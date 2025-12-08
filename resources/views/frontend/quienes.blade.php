@extends('layouts.frontend')
@section('title', 'quienes')


@section('content')


<section class="relative h-[730px] overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/fondo-quienes.jpg') }}"
    alt="Fondo"
    class="absolute inset-0 w-full  object-cover -z-10" />

  <div class="relative ">
    <h2 class="font-SpaceGrotesk-Bold text-[#FFF7EF] text-[50px] leading-none -mb-2 ">
      Un viaje real por la
    </h2>
    <div class="flex items-baseline gap-8">
      <span class="text-[#F27E1E] font-Cubano text-[100px] leading-none tracking-[-0.01em]
                 drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
        COCINA
      </span>
      <span class="text-[#FF3696] font-Cubano text-[100px] leading-none tracking-[-0.01em]
                drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
        MEXICANA
      </span>
    </div>
  </div>
  <svg class="pointer-6vents-none absolute bottom-0 left-0 w-full h-[100px] z-20"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0,70  C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
</section>


<section class="relative bg-[#FFF7EF] overflow-visible container">

  <div class="relative z-10 mx-auto max-w-3xl px-6 py-16 md:py-24 text-center">
    <img src="{{ asset('img/vector-vertical.png') }}"
      alt="" class="mx-auto mb-6 w-20" />

    <p class="font-space-grotesk-regular leading-relaxed text-[#534741]/90 text-[20px] ">
      En <span class="text-[#D33882] font-SpaceGrotesk-Bold">Taste México</span> creemos que la gastronomía <br>
      no es una tendencia pasajera ni una simple lista <br> de recomendaciones.
    </p>

    <p class="mt-6 font-SpaceGrotesk-Bold text-[#534741] text-[20px]">
      Es una expresión cultural <span class="font-space-grotesk-regular  text-[#534741]">viva que se manifiesta<br>
        en cada plato, en cada técnica transmitida de <br>
        generación en generación y en <span class="font-SpaceGrotesk-Bold text-[#534741] text-[20px]">cada historia que <br>
          se sirve en la mesa</span>.
    </p>

    <p class="mt-6 font-space-grotesk-regular leading-relaxed text-[#534741]/90 text-[20px]">
      Nuestro propósito es conectar a viajeros y<br>
      comensales con la riqueza auténtica de México:<br>
      <span class="font-SpaceGrotesk-Bold">calle, campo y ciudad</span>, desde la fonda de la esquina<br>
      hasta las cocinas más reconocidas del país.
    </p>
  </div>

  <div class="absolute inset-0 z-50 pointer-events-none select-none">
    <img src="{{ asset('img/plato1.png') }}" alt=""
      class="absolute w-[220px] top-[-130px] left-0" />

    <img src="{{ asset('img/plato2.png') }}" alt=""
      class="absolute left-[160px] top-[-95px] w-[290px]" />

    <img src="{{ asset('img/plato3.png') }}" alt=""
      class="absolute right-[284px] top-[-75px] w-[270px]" />

    <img src="{{ asset('img/plato4.png') }}" alt=""
      class="absolute right-0 -top-[200px] w-[380px]" />

    <img src="{{ asset('img/plato6.png') }}" alt=""
      class="absolute left-[150px] bottom-[-35px] w-[415px]" />

    <img src="{{ asset('img/plato7.png') }}" alt=""
      class="absolute right-0 bottom-[-7px] w-[260px]" />
  </div>


</section>
<!-- rancho -->
<section class="relative isolate overflow-hidden h-[780px] container">
  <div class="absolute inset-0 -z-10">
    <img
      src="{{ asset('img/rancho.png') }}"
      alt="Rancho"
      class="h-[720px] w-full object-cover" />
  </div>
  <svg
    class="pointer-events-none absolute top-[-1px] left-0 w-full h-[105px] -scale-y-100 z-10"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0,70  C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
  <div class="container mx-auto h-full px-6">
    <div class="h-full flex items-center">
      <div class="max-w-3xl ml-195 text-[#FFF7EF]">
        <div class="relative">
          <img
            src="{{ asset('img/flor-1.svg') }}"
            alt=""
            class="pointer-events-none absolute -left-[52px] top-1 h-11 w-11" />

          <h2 class="text-[45px] leading-none">
            <span class="font-Cubano">EL</span>
            <span class="font-Cubano text-[#FF3696]"> ORIGEN</span>
          </h2>
        </div>
        <h3 class="mt-5 font-SpaceGrotesk-Bold  text-[22px]">
          Todo comienza en la tierra:
        </h3>
        <p class="mt-3 font-Space-Grotesk-Medium text-[22px]">
          El maíz, el chile, el cacao o el mezcal no son solo<br>
          ingredientes: <span class="font-SpaceGrotesk-Bold">son herencia, identidad y memoria.</span>
        </p>
        <p class="mt-6 font-Space-Grotesk-Medium text-[22px]">
          Nos enfocamos en <span class="font-SpaceGrotesk-Bold">rescatar el valor del producto</span> y de<br>
          las manos que lo cultivan, porque entendemos que la<br>
          gastronomía es el resultado de un ecosistema <span class="font-SpaceGrotesk-Bold">que <br> involucra al campo, al productor y a la tradición.</span><br>
        </p>
      </div>
    </div>
  </div>
</section>



<!-- taquero -->
<section class="relative isolate overflow-hidden h-[850px] -mt-[129px] container">
 
  <div class="absolute top-[-7px] left-0 w-full z-20">
    <img src="{{ asset('img/puntos-1.png') }}" alt="línea blanca" class="w-full">
    <img src="{{ asset('img/punto-rosa.svg') }}" alt="punto rosa"
         class="absolute top-[15px] left-150  w-9 h-9">
  </div>

  <div class="absolute">
    <img src="{{ asset('img/taquero.png') }}" alt="Taquero" class="object-cover" />
  </div>

  <div class="container mx-auto h-full px-6 ml-25">
    <div class="h-full flex items-center">
      <div class="relative max-w-2xl text-[#FFF7EF] ml-[64px] md:ml-[96px] z-30">
        <img src="{{ asset('img/icono-izquierdo.png') }}" class="pointer-events-none absolute -left-[52px] top-1 w-11 h-11" alt="">
        <h2 class="text-[50px] leading-none">
          <span class="font-Cubano">LA</span>
          <span class="font-Cubano text-[#F27E1E]">COMUNIDAD</span>
        </h2>
        <p class="mt-7 text-[22px] leading-relaxed font-Space-Grotesk-Medium">
          <span class="font-SpaceGrotesk-Bold">Taste México</span> es un punto de encuentro donde <br>
          conviven voces que rara vez se escuchan en <br>
          conjunto: cocineras tradicionales, chefs, <br>
          productores, historiadores y viajeros curiosos.
        </p>
        <p class="mt-7 text-[22px] leading-relaxed font-Space-Grotesk-Medium">
          Creemos que <span class="font-SpaceGrotesk-Bold">la gastronomía es una cadena viva</span><br>
          donde cada eslabón cuenta, y nuestro objetivo es <br>
          dar visibilidad a todos ellos para construir una <br>
          narrativa completa y honesta.
        </p>
      </div>
    </div>
  </div>
</section>




<!-- chef -->
<section class="relative isolate overflow-hidden h-[900px] -mt-[100px] container">
    <div class="absolute top-[1px] left-0 w-full z-20">
    <img src="{{ asset('img/puntos-1.png') }}" alt="línea blanca" class="w-full">
    <img src="{{ asset('img/punto-amarillo.svg') }}" alt="punto amarillo"
         class="absolute top-[57px] left-280 w-9 h-9">
  </div>
  <div class="absolute">
    <img src="{{ asset('img/chef.png') }}" alt="Chef" class=" object-cover" />
  </div>
  <div class="container mx-auto h-full px-6">
    <div class="h-full flex items-center">
      <div class="relative max-w-2xl text-[#FFF7EF] ml-auto mr-[170px] ">
        <img src="{{ asset('img/flor-1.svg') }}"
          class="pointer-events-none absolute -left-[52px] top-1 w-11 h-11" alt="">
        <h2 class="text-[50px] leading-none">
          <span class="font-Cubano">EL</span>
          <span class="font-Cubano text-[#FF3696]"> experiencia</span>
        </h2>
        <p class="mt-7 text-[22px] leading-relaxed font-Space-Grotesk-Medium">
          No buscamos solo mostrar qué se come,<br>
          sino<span class="font-SpaceGrotesk-Bold">cómo se construye cada bocado. </span><br>
        </p>
        <p class="mt-7 text-[22px] leading-relaxed font-Space-Grotesk-Medium">
          La cocina mexicana es un viaje que comienza en <br>
          <span class="font-SpaceGrotesk-Bold">el origen de los ingredientes,</span>pasa por las manos <br>
          de quienes los transforman y culmina en la mesa. <br>
          Cada platillo es un relato que habla de territorio,<br>
          historia y cultura; un puente entre lo cotidiano y<br>
          lo excepcional.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- amigos  FALTA  COMPONER  LINEA DE COLOR BLACO Y POSIONES  OVERLAY-->
<section class="relative isolate overflow-hidden h-[850px] -mt-[120px] container">
    <div class="absolute top-[1px] left-0 w-full z-20">
    <img src="{{ asset('img/puntos-1.png') }}" alt="línea blanca" class="w-full">
    <img src="{{ asset('img/punto-rosa.svg') }}" alt="punto rosa"
         class="absolute top-[15px] left-150  w-9 h-9">
  </div>

  <div class="absolute">
    <img src="{{ asset('img/amigos.png') }}" alt="Amigos" class=" object-cover" />
  </div>

  <div class="container mx-auto h-full px-6">
    <div class="h-full flex items-center">
      <div class="relative text-[#FFF7EF] ml-[125px] mt-10">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          class=" absolute -left-[52px] top-1 w-11 h-11" alt="">
        <h2 class="text-[50px] leading-none">
          <span class="font-Cubano">LA</span>
          <span class="font-Cubano text-[#F27E1E]">VISION</span>
        </h2>
        <p class="mt-12 text-[21px] leading-relaxed font-Space-Grotesk-Medium">
          Aspiramos a consolidarnos como una plataforma
          <br>que celebre y preserve la diversidad gastronómica
          <br>de México, <span class="font-SpaceGrotesk-Bold">creando una comunidad activa y global</span>
          <br>en torno al buen comer.
          <br><br>
          Queremos inspirar a viajeros, locales y expertos
          <br> <span class="font-SpaceGrotesk-Bold">a descubrir la cocina mexicana desde su raíz,</span>
          <br>entendiendo que detrás de cada experiencia
          <br>culinaria hay un contexto cultural que merece
          <br>contarse.
        </p>
      </div>
    </div>
    <svg class="pointer-events-none absolute bottom-0 left-0 w-full h-[100px] z-10"
      viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70  C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
        fill="#FFF7EF" />
    </svg>
  </div>
</section>

<section class="w-full py-14 container bg-[#FFF7EF]">
  <div class="flex items-center justify-center gap-4 mb-12">
    <img src="img/icono-izquierdo.png" alt="" class="w-11 h-11">
    <h2 class="text-[50px] font-Cubano tracking-tight">
      <span class="text-[#FF3696]">NUESTRA</span>
      <span class="text-[#534741]"> PROMESA</span>
    </h2>
    <img src="img/icono-derecho.png" alt="" class="w-11 h-11">
  </div>

  <div class="max-w-7xl mx-auto grid grid-cols-4 gap-10 items-start place-items-center">
    <!-- Item 1 -->
    <article class="flex flex-col items-center text-center">
      <div class="relative flex items-center justify-center w-[230px] h-[230px] mb-6">
        <img src="img/circulos.svg" alt="Círculo" class="absolute inset-0 w-[260px] object-contain z-0">
        <img src="img/hamburguesa.svg" alt="Hamburguesas" class="relative z-10 w-[200px] h-[200px] object-cover rounded-full">
      </div>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-base leading-6 max-w-[260px]">
        Mostrar lo mejor de México
        <br>sin filtros ni clichés.
      </p>
    </article>

    <!-- Item 2 -->
    <article class="flex flex-col items-center text-center">
      <div class="relative flex items-center justify-center w-[230px] h-[230px] mb-6">
        <img src="img/circulos.svg" alt="Círculo" class="absolute inset-0 w-[260px] object-contain z-0">
        <img src="img/2-personas.svg" alt="Investigación" class="relative z-10 w-[200px] h-[200px] object-cover rounded-full">
      </div>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-base leading-6 max-w-[280px]">
        Ser un referente confiable y 
        <br>curado para quienes 
        <br>buscan profundidad, autenticidad
        <br> y conexión real en sus viajes 
        <br>culinarios.
      </p>
    </article>

    <!-- Item 3 -->
    <article class="flex flex-col items-center text-center">
      <div class="relative flex items-center justify-center w-[230px] h-[230px] mb-6">
        <img src="img/circulos.svg" alt="Círculo" class="absolute inset-0 w-[260px] object-contain z-0">
        <img src="img/nav-tacos.svg" alt="Comunidad" class="relative z-10 w-[200px] h-[200px] object-cover rounded-full">
      </div>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-base leading-6 max-w-[280px]">
        Construir una comunidad 
        <br> que valore el origen y el 
        <br> contexto detrás de cada 
        <br>experiencia gastronómica.
      </p>
    </article>

    <!-- Item 4 -->
    <article class="flex flex-col items-center text-center">
      <div class="relative flex items-center justify-center w-[230px] h-[230px] mb-6">
        <img src="img/circulos.svg" alt="Círculo" class="absolute inset-0 w-[260px] object-contain z-0">
        <img src="img/cocinero.svg" alt="Didáctica" class="relative z-10 w-[200px] h-[200px] object-cover rounded-full">
      </div>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-base leading-6 max-w-[300px]">
        Didáctica, proveer contenido de 
        <br>valor y generar vínculos entre las 
        <br> instituciones culinarias de México,
        <br> para consolidar una visión clara y ser 
        <br> referente en la experiencia 
        <br> gastronómica.
      </p>
    </article>
  </div>
</section>
@endsection