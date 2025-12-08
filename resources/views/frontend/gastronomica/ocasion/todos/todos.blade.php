@extends('frontend.gastronomica.index')

@section('gastronomica-content')

<section class="relative overflow-hidden container">
  <div class="relative py-14">
    <div class="flex justify-center items-center relative  mb-14">
      <h2 class="flex items-center gap-2 font-Cubano text-[30px] md:text-[50px] text-[#534741] uppercase">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
        TODOS
        <img src="{{ asset('img/icono-derecho.png') }}" alt="Flor" class="w-9 h-9 md:w-12 md:h-12">
      </h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-15 justify-items-center px-10 md:px-16">
      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-pujol.png') }}" alt="pujol" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">Balcones del Zócalo</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Cena íntima con vista al <br>corazón de la ciudad y <br>sabores que enamoran.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-maria.png') }}" alt="marea" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">María Dolores</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Alta cocina mexicana en un <br>ambiente sereno y sofisticado <br>junto al mar.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-dantes.png') }}" alt="Los Danzantes" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Los Danzantes</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Sabores creativos y atmósfera <br>elegante para noches que se <br>recuerdan.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-casa.png') }}" alt="toño" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">La Casa de TOÑO</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Sabor casero y ambiente <br>cálido donde cada comida se <br>siente como en casa.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px]rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-pocito.png') }}" alt="El Pocito" class="object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">El Pocito</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Platillos tradicionales en un <br>rincón relajado para disfrutar en <br>familia.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px]rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-olla.png') }}" alt="LA OLLA" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1">LA OLLA</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Cocina oaxaqueña auténtica <br>que celebra las raíces en cada <br>reunión familiar.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-Quintonil.png') }}" alt="Quintonil" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">Quintonil</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Restaurante galardonado con <br>una estrella Michelin, que ofrece <br>cocina oaxaqueña tradicional <br>con un enfoque contemporáneo.
          </p>
        </div>
      </div>

      <div class="relative ww-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-cua.png') }}" alt="t-cua" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Cüa</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            Sabores modernos y ambiente <br>sofisticado ideal para cerrar <br>acuerdos.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/levadura.png') }}" alt="Casa Oaxaca El Restaurante" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Levadura de Olla</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Ofrece una experiencia culinaria <br>auténtica con ingredientes <br>locales y técnicas tradicionales.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-tacos.png') }}" alt="pangea" class="w-full h-full object-cover">
          <img src="{{ asset('img/flechas.svg') }}" alt="Ver Pangea"
            class="w-6 h-6 hover:scale-110 transition-transform duration-200">
        </a>

        <div class="absolute bottom-0 pb-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-12 uppercase">Tacos de Canasta <br> Los Especiales</h3>
          <p class="font-space-grotesk-regular text-[18px] pl-12">
            Sabor clásico y callejero en <br>cada taco al vapor.
          </p>
        </div>
      </div>


      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-gringas.png') }}" alt="tetemate" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-10 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Taquería Los <br>Chachalacos</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-7 pl-5">
            El punto favorito para tacos al <br>pastor con alma caribeña.
          </p>
        </div>
      </div>

      <div class="relative w-[430px] h-[560px] rounded-[40px] overflow-hidden">
        <img src="{{ asset('img/t-tlayulas.png') }}" alt="Tlayudas Doña Lupe" class="w-full h-full object-cover">
        <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
        <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
          <h3 class="font-SpaceGrotesk-Bold text-[30px] pl-5 mb-1 uppercase">Tlayudas Doña Lupe</h3>
          <p class="font-space-grotesk-regular text-[18px] mb-6 pl-5">
            Tlayudas tradicionales hechas al <br>momento, puro sabor <br>oaxaqueño.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection