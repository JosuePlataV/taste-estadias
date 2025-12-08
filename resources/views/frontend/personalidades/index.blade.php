@extends('layouts.frontend')
@section('title', 'personalidades')

@section('content')

<section class=" bg-[#FFF7EF] container">
<section class="relative h-[690px] overflow-hidden flex flex-col justify-center items-center text-center">
  <img src="{{ asset('img/personalidades.png')}}" alt="Fondo" class="absolute inset-0 object-cover "/>

  <div class="container relative z-10 flex flex-col items-center">
    <h2 class="font-Cubano text-[#FFF7EF] text-[40px] leading-tight">
      Los protagonistas del
    </h2>
    <span class="text-[#F27E1E] font-Cubano text-[85px] leading-none drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
      ARTE<span class="text-[#FF3696]">CULINARIO</span>
    </span>
  </div>

  <svg class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
</section>


<section class=" bg-[#FFF7EF] container">
  <nav class="flex justify-center items-center gap-8 font-SpaceGrotesk-Bold text-[#534741] text-[17px] pt-10">


    <div class="flex items-center gap-3">
      <a href="{{ url('personalidades/nacionales') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('personalidades/nacionales*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        NACIONAL
      </a>
    </div>


    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('personalidades/internacionales') }}"
        class="px-5 py-2.5 rounded-[16px] transition transform duration-300
        {{ request()->is('personalidades/internacionales*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        INTERNACIONAL
      </a>
    </div>
</section>

<section class="relative bg-[#FFF7EF] overflow-visible container">

  <div class="relative z-10 mx-auto max-w-3xl px-6 py-16 md:py-24 text-center">
    <p class="mt-6 font-space-grotesk-regular text-[#534741] text-[20px]">
      Conoce a los chefs y visionarios que están
      <br>redefiniendo la gastronomía mexicana.
      <br><br>
      Desde las raíces hasta la innovación, cada uno <br>
      representa una historia de sabor, cultura y evolución
    </p>

    <div class="flex flex-col items-center mt-15 space-y-1 font-bold">
      <span class="text-[#F82A8B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
      <span class="text-[#F82A8B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
      <span class="text-[#F82A8B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
    </div>
  </div>

  <div class="absolute inset-0 z-50 pointer-events-none select-none">
    <img src="{{ asset('img/tomatep.png') }}" alt=""
      class="absolute w-[400px] top-[-250px] left-0" />


    <img src="{{ asset('img/sarten.png') }}" alt=""
      class="absolute right-0 bottom-[-112px] w-[336px]" />
  </div>
</section>

<div class="mt-10">
  @yield('personalidades-content')
</div>
</section>
@endsection