@extends('frontend.gastronomica.index')

@section('gastronomica-content')

<section class="relative h-[730px]  container">

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

<section class="relative overflow-hidden container">
    <div class="relative h-[850px]">
      <img
        src="{{ asset('img/naranjoso.png') }}"
        alt="Fondo Naranja"
        class="w-full h-auto block" />

      <div class="absolute inset-0 flex flex-col items-center justify-start pt-20">
        <div class="flex items-center justify-center gap-4 mt-15 mb-15">
          <h2 class="text-[#FFF7EF] font-Cubano text-[50px] uppercase">LOS RECOMENDADOS DEL MES</h2>
        </div>

        <div class="flex flex-wrap justify-center gap-16 px-6 md:px-16">
          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/pujol.png') }}" alt="pujol" class="w-full h-full object-cover">
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12">PUJOL</h3>
              <p class="font-space-grotesk-regular text-[18px]  pl-12">
                Restaurante de alta cocina <br>mexicana contemporánea,<br> galardonado con dos estrellas <br> Michelin.
              </p>
            </div>
          </div>

          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/marea.png') }}" alt="marea" class="w-full h-full object-cover">
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">LA MAREA</h3>
              <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
               Ofrece cocina de autor con <br> énfasis en mariscos frescos.
              </p>
            </div>
          </div>

          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/chava.png') }}" alt="Pujol" class="w-full h-full object-cover">
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">MI COMPA CHAVA</h3>
              <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
               Marisquería sinaloense con <br>ambiente relajado y sabores <br>auténticos del Pacífico Norte.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection