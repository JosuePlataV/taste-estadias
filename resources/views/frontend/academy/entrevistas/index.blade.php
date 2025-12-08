@extends('frontend.academy.index')

@section('academy-content')
{{-- ENTREVISTAS --}}
<section class="bg-[#FFF7EF] py-16 flex justify-center">
  <div class="w-[1023px]">
  

    <div class="grid grid-cols-3 gap-10 justify-items-center">
      
      {{-- 1 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden ">
          <img src="{{ asset('img/Group127.svg') }}" alt="Entrevista a Enrique Olvera" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br> Enrique Olvera
        </p>
      </div>

      {{-- 2 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden">
          <img src="{{ asset('img/Group-128.svg') }}" alt="Entrevista a Chef Zurita" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br>Chef Zurita
        </p>
      </div>

      {{-- 3 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden ">
          <img src="{{ asset('img/Group-129.svg') }}" alt="Entrevista a Gabriela Ruiz" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br>Gabriela Ruiz
        </p>
      </div>

      {{-- 4 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden ">
          <img src="{{ asset('img/Group-130.svg') }}" alt="Entrevista a Carlos Gaytán" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br>Carlos Gaytán
        </p>
      </div>

      {{-- 5 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden ">
          <img src="{{ asset('img/Group-131.svg') }}" alt="Entrevista a Enrique Olvera" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br>Enrique Olvera
        </p>
      </div>

      {{-- 6 --}}
      <div class="flex flex-col items-center">
        <div class="relative w-[280px] h-[380px] rounded-[30px] overflow-hidden">
          <img src="{{ asset('img/Group-132.svg') }}" alt="Entrevista a Gastón Acurio" class="w-full h-full object-cover">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="absolute inset-0 m-auto w-[60px] h-[60px]">
        </div>
        <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px] uppercase mt-3 text-center">
          Entrevista a <br>Gastón Acurio
        </p>
      </div>

    </div>
  </div>
</section>
@endsection
