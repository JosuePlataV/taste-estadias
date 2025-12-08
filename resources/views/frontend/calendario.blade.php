@extends('layouts.frontend')
@section('title', 'calendario')


@section('content' )

<section class="relative h-[690px]  overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/fondo-calendario.png') }}" alt="Fondo"
    class="absolute inset-0 object-cover -z-10" />
  <svg class="absolute bottom-0 left-0 w-full h-[100px] -z-10 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
  
</section>

<section class="bg-[#FFF7EF] container">

<section class="relative h-[800px] flex flex-col items-center container z-30 -translate-y-[500px] container">
  <div class="relative flex items-center justify-center mb-8 gap-16">
    {{-- Botón anterior --}}
    <button id="prev-month" class="relative w-10 hover:scale-110 transition transform mt-4">
      <img src="{{ asset('img/rosaaa.png') }}" alt="Mes anterior" class="w-10  rotate-180">
    </button>

    {{-- Título del mes --}}
    <h2 id="month-title" class="font-Cubano text-[80px] text-[#FFF7EF] tracking-wide uppercase select-none">
      Octubre
    </h2>

    {{-- Botón siguiente --}}
    <button id="next-month" class="relative w-10 hover:scale-110 transition transform mt-4">
      <img src="{{ asset('img/rosaaa.png') }}" alt="Mes siguiente" class="w-10 ">
    </button>
  </div>

{{-- Cabecera de días --}}
<div class="relative w-[1300px] mx-auto mb-5 container">
  <div class="grid grid-cols-7 text-center font-SpaceGrotesk-Bold text-[#FFF7EF] uppercase text-[16px] tracking-wide">
    <div>Lunes</div>
    <div>Martes</div>
  <div>Miércoles</div>
    <div>Jueves</div>
    <div>Viernes</div>
    <div>Sábado</div>
    <div>Domingo</div>
  </div>

  {{-- Puntos entre las divisiones --}}
  <img src="{{ asset('img/punto-amarillo.png') }}"
       class="absolute top-1/2 left-[172px] -translate-y-1/2 w-4 h-4 pointer-events-none">
  <img src="{{ asset('img/punto-rosa.png') }}"
       class="absolute top-1/2 left-[360px] -translate-y-1/2 w-4 h-4 pointer-events-none">
  <img src="{{ asset('img/punto-amarillo.png') }}"
       class="absolute top-1/2 left-[548px] -translate-y-1/2 w-4 h-4 pointer-events-none">
  <img src="{{ asset('img/punto-rosa.png') }}"
       class="absolute top-1/2 left-[738px] -translate-y-1/2 w-4 h-4 pointer-events-none">
  <img src="{{ asset('img/punto-amarillo.png') }}"
       class="absolute top-1/2 left-[924px] -translate-y-1/2 w-4 h-4 pointer-events-none">
  <img src="{{ asset('img/punto-rosa.png') }}"
       class="absolute top-1/2 left-[1112px] -translate-y-1/2 w-4 h-4 pointer-events-none">
</div>





{{-- Contenedor del calendario --}}
<div class="relative w-[1320px] h-auto bg-[#FFFFFF] rounded-[15px] border-[1px] border-[#CCCCCC] container ">
  <div id="calendar"></div>
</div>



{{-- Card emergente --}}
<div id="event-card"
     class="hidden absolute bottom-10 left-1/2 -translate-x-1/2 w-[430px] bg-[#FFFFFF]  rounded-[10px] overflow-hidden transition-all duration-300 z-50 shadow-[0_8px_30px_rgba(0,0,0,0.08),0_2px_10px_rgba(0,0,0,0.06)] ">

  <img id="card-img" src="{{ asset('img/c-mole.png') }}" alt="Imagen evento"
       class="w-full h-[180px] object-cover">

  <!-- Contenido -->
  <div class="p-5">
    <h3 id="card-title" class="font-SpaceGrotesk-Bold text-[#534741] text-xl leading-tight"></h3>
    <p id="card-daterange" class="text-sm font-space-grotesk-regular text-[#534741] mt-1"></p>

<!-- Ubicaci0n -->
<div class="mt-3">
  <div class="flex items-center gap-2">
    <img src="{{ asset('img/ubi-delgada.png') }}" alt="Ubicación" class="w-3 h-4">
    <p class="font-SpaceGrotesk-Bold text-[#534741] text-[14px] leading-none">Ubicación</p>
  </div>

  <p id="card-location"
     class="mt-1 text-[14px] text-[#534741] font-space-grotesk-regular leading-snug break-words"></p>
</div>

    <p id="card-desc" class="text-sm mt-4 text-[#534741] font-space-grotesk-regular leading-snug"></p>
  </div>
</div>


  {{-- Filtros --}}
  <div class="flex gap-5 mt-10 text-[#534741] font-Space-Grotesk-Medium">
    <button data-filter="all" class="filter-btn bg-[#695E59]/20 px-5 py-3 rounded-[16px] hover:scale-105 transition">TODO</button>
    <button data-filter="nacional" class="filter-btn flex items-center gap-2 px-5 py-2 rounded-xl">
      <span class="inline-block w-4 h-4 bg-[#D33882] rounded-[5px]"></span> EVENTOS NACIONALES
    </button>
    <button data-filter="internacional" class="filter-btn flex items-center gap-2 px-5 py-2 rounded-xl">
      <span class="inline-block w-4 h-4 bg-[#F27E1E] rounded-[5px]"></span> EVENTOS INTERNACIONALES
    </button>
    <button data-filter="destacado" class="filter-btn flex items-center gap-2 px-5 py-2 rounded-xl">
      <span class="inline-block w-4 h-4 bg-[#534741] rounded-[5px]"></span> EVENTO DESTACADO DEL MES
    </button>
  </div>
</section>


<section class="relative w-full h-[210px] bg-[#FFF7EF] overflow-hidden">

  <img
    src="{{ asset('img/molelineas.png') }}"
    alt="Línea decorativa"
    class="absolute inset-x-0 top-1/2 -translate-y-1/2 w-full h-auto object-cover"
  />

  <img
    src="{{ asset('img/mole.svg') }}"
    alt="Plato de mole"
    class="absolute right-6 bottom-2 w-[330px] h-[230px] object-contain z-10"
  />
</section>




</section>

@endsection