@extends('frontend.gastronomica.index')

@section('gastronomica-content')
<section class="relative overflow-hidden container">
  <div class="relative py-14">
    <div class="flex justify-center items-center relative  mb-14">
      <h2 class="flex items-center gap-2 font-Cubano text-[30px] md:text-[50px] text-[#534741] uppercase">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
        CDMX
        <img src="{{ asset('img/icono-derecho.png') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
      </h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-15 justify-items-center px-10 md:px-16">
      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/pujol.png') }}" alt="pujol" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12">PUJOL</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Restaurante de alta cocina <br>mexicana contemporánea,<br> galardonado con dos estrellas <br>Michelin.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/marea.png') }}" alt="marea" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">LA MAREA</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Ofrece cocina de autor con <br>énfasis en mariscos frescos.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/chava.png') }}" alt="mi compa chava" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">MI COMPA CHAVA</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Marisquería sinaloense con <br>ambiente relajado y sabores <br>auténticos del Pacífico Norte.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/mayoras.png') }}" alt="pujol" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">La Casa de las Mayoras</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Restaurante de alta cocina <br>mexicana contemporánea, <br>galardonado con dos estrellas <br>Michelin.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px]rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/mercado.png') }}" alt="mercado" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Kiosco Verde</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Especializado en pescados y <br>mariscos frescos, ideal para una <br>comida ligera junto al mar.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px]rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/puerto.png') }}" alt="puerto Santo" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">Puerto Santo Juárez</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Ofrece una experiencia <br>gastronómica de alta calidad <br>con vistas panorámicas.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/levadura.png') }}" alt="levadura" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">Levadura de Olla</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Restaurante galardonado con <br>una estrella Michelin, que ofrece<br> cocina oaxaqueña tradicional <br>con un enfoque contemporáneo.
          </p>
        </div>
      </div>

      <div class="relative ww-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/danzantes.png') }}" alt="Los Danzantes" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Los Danzantes</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Conocido por su cocina <br>mexicana creativa y ambiente <br>elegante.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/casa.png') }}" alt="Casa Oaxaca El Restaurante" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Casa Oaxaca <br>El Restaurante</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Ofrece una experiencia culinaria <br> auténtica con ingredientes <br>locales y técnicas tradicionales.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/pangeaq.png') }}" alt="pangea" class="w-full h-full object-cover">

        {{-- lleva plantillas-cmdx-pangea --}}
        <a href="{{ url('/plantillas/cdmx/pangea') }}" class="absolute top-4 right-4 z-20">
          <img src="{{ asset('img/flechas.svg') }}" alt="Ver Pangea"
            class="w-6 h-6 hover:scale-110 transition-transform duration-200">
        </a>

        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">Pangea</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Restaurante de alta cocina <br>mexicana contemporánea, <br>
            reconocido por su innovación <br>y calidad.
          </p>
        </div>
      </div>


      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/tetemate.png') }}" alt="tetemate" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Tatemate</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Ofrece una experiencia <br>gastronómica única con un <br>enfoque en ingredientes locales <br>y técnicas culinarias modernas.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/Tanaka.png') }}" alt="Señor Tanaka" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Señor Tanaka</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Restaurante japonés de alta <br>gama, reconocido por su sushi <br>de calidad excepcional.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection