@extends('layouts.frontend')
@section('title', 'eventos')


@section('content' )
<section class="relative h-[730px] overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/eventosfondo.png') }}" alt="Fondo" class="absolute inset-0  object-cover -z-10" />
  <div class="container relative z-10 flex flex-col items-center">
    <h2 class="font-SpaceGrotesk-Bold text-[#FFF7EF] text-[40px] leading-tight">
      Conectando personas, sabores y culturas
    </h2>
    <span class="text-[#F27E1E] font-Cubano text-[85px] leading-none drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
      EN CADA<span class="text-[#FF3696]"> EVENTO</span>
    </span>
  </div>

  <svg
    class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
</section>


<section class="h-[2070px] bg-[#FFF7EF] container">
  <nav class="flex justify-left items-center gap-8 font-SpaceGrotesk-Bold text-[#534741] text-[17px] pt-18 ml-38">
    <div class="flex items-center gap-3">
      <a href="{{ url('blog') }}"
        class="px-3 py-0.5 rounded-[10px] transition transform duration-300
            {{ request()->is('blog') || request()->is('blog/*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        TODO
      </a>
    </div>

    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('/noticias') }}"
        class="px-3 py-0.5 rounded-[10px] transition transform duration-300
                {{ request()->is('noticias') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        NACIONAL
      </a>
    </div>


    <div class="flex items-center gap-3">
      <img src="{{ asset('img/punto-amarillo.svg') }}" alt="Decoración amarilla" class="w-3 h-3 pointer-events-none select-none">
      <a href="{{ url('/recetas') }}"
        class="px-3 py-0.5 rounded-[10px] transition transform duration-300
                {{ request()->is('recetas') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
        INTERNACIONAL
      </a>
    </div>

    <div class="relative">
      <img src="{{ asset('img/filtro.svg') }}" alt="Cacao mexicano" class=" h-[15px] object-cover">
    </div>
  </nav>

  <section class="bg-[#FFF7EF] py-14">
    <div class="flex flex-wrap justify-center gap-[30px] relative z-10">

      <div class="flex flex-wrap justify-center gap-[80px]">
        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/cacao1.svg') }}" alt="Cacao mexicano" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[30px] bg-[#D33882] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">NACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741]">LATINO<br>GASTRONOMIC 2025</h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">4–6 de septiembre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Puebla, México</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-12">Congreso internacional que rinde <br> homenaje al cacao y reúne a chefs <br>
              y expertos en gastronomía latina.</p>

            <a href="https://latinogastronomic.com/" class="text-[#D33882] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>



        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/Vizag.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[140px] h-[30px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">INTERNACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase">Vizag Food <br> Festival</h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">5-7 de septiembre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Visakhapatnam, India</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-2">
              Festival con más de 30 puestos <br>
              de comida que ofrecen una mezcla de <br> cocinas locales e internacionales,<br>
              además de presentaciones culturales <br>
              y concursos culinarios.</p>

            <a href="https://www.instagram.com/reel/DOA80JYCWNQ/" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>


        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/Martini.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[140px] h-[30px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">INTERNACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase mb-7">Martini Expo </h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">12-13 de septiembre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Nueva York, EE. UU.</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-12">Exposición dedicada al martini, con <br> catas, seminarios y presentaciones <br> de bartenders reconocidos.</p>

            <a href="https://martiniexpo.com/schedule.html" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center gap-[80px] mt-8">
        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/Big.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[140px] h-[30px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">INTERNACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase mb-4">The Big E </h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">12-28 de septiembre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">West Springfield, Massachusetts, EE. UU.</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-15">Feria que celebra la herencia agrícola <br>de Nueva Inglaterra, con una amplia <br>variedad de alimentos y espectáculos.</p>

            <a href="https://www.thebige.com/" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>


        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/FERIA.svg') }}" alt="Cacao mexicano" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[30px] bg-[#D33882] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">NACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase mb-4">FERIA DEL MOLE </h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">3 - 26 de octubre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">San Pedro Atocpan, Milpa Alta, CDMX.</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug ">La Feria Nacional del Mole celebra <br>su edición número 48 en este 2025 con <br>una experiencia gastronómica que <br>
              incluirá un recorrido por las distintas <br>variedades de uno de los platillos más <br>típicos de la cocina mexicana.</p>

            <a href="{{ route('eventos.plantilla') }}"  class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>


        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/PROVEEDORES.svg') }}" alt="Cacao mexicano" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[30px] bg-[#D33882] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">NACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase">EXPO PROVEEDORES<br>Gastronomía</h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">1-2 de octubre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">WTC, Veracruz</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-7">El punto de encuentro donde la <br>gastronomía, la hotelería y la <br>repostería se unen para mostrar lo <br> mejor de la industria. </p>

            <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>

      </div>
      <div class="flex flex-wrap justify-center gap-[80px] mt-8">
        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/ANUGA.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[140px] h-[30px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">INTERNACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase mb-4">ANUGA </h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">4 - 8 de octubre de 2025</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Koelnmesse en Colonia, Alemania.</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-10">ANUGA es una de las ferias más <br>importantes del mundo en el sector de <br>alimentos y bebidas, celebrada en <br>Colonia (Alemania).</p>

            <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>

        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/Gastronomika.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[140px] h-[30px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">INTERNACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase">San Sebastián <br>Gastronomika</h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">6 - 8 de octubre de 2025</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">San Sebastián, País Vasco, España</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug mb-7">
              San Sebastián Gastronomika es un <br>
              congreso internacional de gastronomía <br>
              que reúne a chefs, expertos y amantes <br>
              del buen comer.</p>

            <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[15px] pl-46">Ir a evento >>></a>
          </div>
        </div>

        <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
          <div class="relative">
            <img src="{{ asset('img/Foro.svg') }}" alt="Cacao mexicano" class="w-[350px] h-[200px] object-cover">
            <div class="absolute bottom-0 right-0 w-[109px] h-[30px] bg-[#D33882] flex items-center justify-center rounded-tl-[6px]">
              <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">NACIONAL</span>
            </div>
          </div>
          <div class="mt-5 ml-8">
            <h3 class="font-SpaceGrotesk-Bold text-[19px] text-[#534741] uppercase">Foro Nacional de <br>Gastronomía & Turismo </h3>
            <p class="font-space-grotesk-regular text-[#534741] text-[15px] mb-3">9 - 11 de octubre</p>
            <div class="flex items-start gap-1">
              <img src="{{ asset('img/icono-ubicacion.svg') }}" alt="" class="w-4 h-4">
              <div>
                <p class="font-SpaceGrotesk-Bold text-[15px] text-[#534741]">Ubicación</p>
              </div>
            </div>
            <div class="flex items-star mb-3">
              <p class="font-space-grotesk-regular text-[#534741] text-[15px]">Centro Cultural del Ferrocarril, Hidalgo</p>
            </div>

            <p class="font-space-grotesk-regular text-[#534741] text-[15px] leading-snug ">
              A lo largo de tres días se llevarán a cabo <br>
              conferencias, talleres especializados, <br>
              experiencias inmersivas, para fortalecer <br>
              vínculos entre la academia y la industria, <br>
              y promover la innovación en el panorama <br>
              culinario mexicano.</p>

            <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[15px] pl-46 mb-10">Ir a evento >>></a>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section><!-- Sin funcion -->
    <div class="flex items-center justify-center gap-3 mt-10">

      <button class="flex items-center justify-center hover:opacity-40 transition">
        <img src="img/Boton-next.svg" alt="Anterior" class="w-12 h-12 rotate-180">
      </button>

      <div class="flex items-center gap-2 text-[#6B5147] font-medium">
        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:text-[#FF007F]">1</button>
        <button class="w-8 h-8 flex items-center justify-center rounded-md bg-[#DCD1C4]">2</button>
        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:text-[#FF007F]">3</button>
        <span class="px-1">...</span>
        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:text-[#FF007F]">8</button>
      </div>
      <button class="flex items-center justify-center hover:opacity-40 transition">
        <img src="img/Boton-next.svg" alt="Siguiente" class="w-12 h-12">
      </button>

    </div>
  </section>
</section>





</section>
@endsection