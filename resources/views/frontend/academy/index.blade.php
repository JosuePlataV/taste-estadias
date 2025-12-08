@extends('layouts.frontend')
@section('title', 'academy')

@section('content')

<section class="relative h-[690px] overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/academy.svg') }}" alt="Fondo" class="absolute inset-0  object-cover -z-10" />
  <div class="relative z-10 flex flex-col items-center ">
    <h2 class="font-Cubano text-[#FFF7EF] text-[40px] leading-tight">
      El conocimiento se cocina
    </h2>
    <span class="text-[#F27E1E] font-Cubano text-[85px] leading-none
                 drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
      EN <span class="text-[#FF3696] ">COMUNIDAD</span>
    </span>
  </div>

  <div>
    <svg class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
      viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
      <path
        d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
        fill="#FFF7EF" />
    </svg>
  </div>
</section>

<section class="relative bg-[#FFF7EF] overflow-visible container">

    <div class="relative z-10 mx-auto max-w-3xl px-6 py-16 md:py-24 text-center">
      <img src="{{ asset('img/vector-rosa.png') }}"
        alt="" class="mx-auto mb-6 w-20" />



      <p class="mt-6 font-space-grotesk-regular text-[#534741] text-[20px]">
        Aquí el conocimiento se sirve en mesa
        <br>compartida, y cada receta, taller, entrevista u
        <br>oportunidad laboral es una forma de seguir
        <br>aprendiendo juntos.
      </p>

      <p class="mt-6 font-space-grotesk-regular leading-relaxed text-[#534741]/90 text-[20px]">
        <span class="font-SpaceGrotesk-Bold text-[#FF3696]">Food Academy </span>,reúne a quienes viven la <br>
        cocina desde todas sus formas: estudiantes,<br>
        chefs, productores, investigadores y amantes <br>
        del buen comer.
      </p>
    </div>
     <div class="absolute inset-0 z-50 pointer-events-none select-none">
      <img src="{{ asset('img/huevos.png') }}" alt=""
        class="absolute w-[350px] top-[-225px] left-0" />

      <img src="{{ asset('img/condimento.png') }}" alt=""
        class="absolute left-[0px] top-[191px] w-[192px]" />

      <img src="{{ asset('img/tabla.png') }}" alt=""
        class="absolute right-[0px] top-[-208px] w-[350px]" />

      <img src="{{ asset('img/harina.png') }}" alt=""
        class="absolute right-0 top-[195px] w-[192px]" />

      <img src="{{ asset('img/palita.png') }}" alt=""
        class="absolute left-[0px] bottom-[-116px] w-[367px]" />

      <img src="{{ asset('img/mazo.png') }}" alt=""
        class="absolute right-0 bottom-[-112px] w-[336px]" />
    </div>
  </section>




<section class=" bg-[#FFF7EF] container">
  <nav class="flex justify-center items-center gap-8 font-SpaceGrotesk-Bold text-[#534741] text-[17px] pt-10">

    {{-- BOLSA DE TRABAJO --}}
    <div class="flex items-center gap-3">
      <a href="{{ url('academy/bolsa') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('academy/bolsa*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        BOLSA DE <br>TRABAJO
      </a>
    </div>

    {{-- VIDEOS --}}
    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('academy/videos') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('academy/videos*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        VIDEOS
      </a>
    </div>

    {{-- VINCULACIONES --}}
    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-amarillo.svg') }}" alt="Decoración amarilla" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('academy/vinculaciones') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('academy/vinculaciones*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        VINCULACIONES <br>ESCOLARES Y CURSOS
      </a>
    </div>

    {{-- RECETAS --}}
    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('academy/recetas') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('academy/recetas*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        RECETAS
      </a>
    </div>

    {{-- ENTREVISTAS --}}
    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-amarillo.svg') }}" alt="Decoración amarilla" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('academy/entrevistas') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('academy/entrevistas*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        ENTREVISTAS
      </a>
    </div>

  </nav>

  {{-- Contenido --}}
  <div class="mt-10">
    @yield('academy-content')
  </div>
</section>
@endsection