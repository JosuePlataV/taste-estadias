@extends('layouts.frontend')
@section('title', 'gastronomica')

@section('content')

<section class=" bg-[#FFF7EF] container">
  <section class="relative h-[730px] overflow-hidden flex flex-col justify-center items-center text-center">
    <img src="{{ asset('img/gastronomica.png')}}" alt="Fondo" class="absolute inset-0 object-cover " />

    <div class="container relative z-10 flex flex-col items-center drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
      <h2 class="font-Cubano text-[#FFF7EF] text-[82px] leading-tight">
        DEL <span class="text-[#F27E1E]">Antojo</span>
      </h2>
      <span class="text-[#FFF7EF] font-Cubano text-[80px] leading-none drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
        Al <span class="text-[#FF3696]">DESTINO</span>
      </span>
    </div>

    <svg class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
      viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
      <path
        d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
        fill="#FFF7EF" />
    </svg>
  </section>


  <section class="relative bg-[#FFF7EF] overflow-visible container">

    <div class="relative z-10 mx-auto max-w-3xl px-6 py-16 md:py-24 text-center">
      <p class="mt-6 font-space-grotesk-regular text-[#534741] text-[20px]">
        Explora nuestra selección curada de experiencias <br>
        y lugares para saborear México.
        <br><br>
        Encuentra tu próximo destino y descubre nuevas <br>
        formas de disfrutar la gastronomía:
      </p>
    </div>

    <div class="absolute inset-0 z-50 pointer-events-none select-none">
      <img src="{{ asset('img/g-plato-1.png') }}" alt=""
        class="absolute w-[400px] top-[-250px] left-0" />
      <img src="{{ asset('img/g-plato-2.png') }}" alt=""
        class="absolute right-0 bottom-[-100px] w-[386px]" />
    </div>
  </section>


  <section class="flex flex-col items-center gap-6 bg-[#FFF7EF] relative z-50">

    <!-- FILTROS -->
    <div class="flex flex-wrap justify-center gap-6 relative z-50">

      <!-- UBICACIÓN -->
      <div class="relative group">
<select id="ubicacionSelect"
          class="bg-white/90 border-[2.5px] border-[#FF3696] text-[#534741] rounded-full px-6 py-2 w-56 text-center font-space-grotesk-regular appearance-none cursor-pointer z-[9999] transition-colors duration-300"
          onchange="cambiarUbicacion()">
          <option selected disabled>- UBICACIÓN -</option>
          <option value="cdmx">CDMX</option>
          <option value="guadalajara">GUADALAJARA</option>
          <option value="monterrey">MONTERREY</option>
          <option value="rivieraMaya">RIVIERA MAYA</option>
          <option value="michoacan">MICHOACÁN</option>
          <option value="puebla">PUEBLA</option>
          <option value="yucatan">YUCATÁN</option>
          <option value="oaxaca">OAXACA</option>
          <option value="valledeguadalupe">VALLE DE GUADALUPE</option>
          <option value="veracruz">VERACRUZ</option>
        </select>

        <span
          class="absolute right-6 top-1/2 -translate-y-1/2 w-2.5 h-2.5 border-r-[2.5px] border-b-[2.5px] border-[#F82A8B] rotate-45 transition-transform duration-300 group-focus-within:-rotate-135 pointer-events-none"></span>
      </div>

      <!-- OCASIÓN -->
      <div class="relative group">
        <select id="ocasionSelect"
          class="bg-white/90 border-[2.5px] border-[#FF3696] text-[#534741] rounded-full px-6 py-2 w-56 text-center font-space-grotesk-regular appearance-none cursor-pointer z-[9999] transition-colors duration-300 uppercase"
          onchange="cambiarOcasion()">
          <option selected disabled>- OCASIÓN -</option>
          <option value="romantico">ROMÁNTICO</option>
          <option value="familiar">FAMILIAR</option>
          <option value="negocios">DE NEGOCIOS</option>
          <option value="street">STREET FOOD</option>
          <option value="todos">TODOS</option>
        </select>
        <span
          class="absolute right-6 top-1/2 -translate-y-1/2 w-2.5 h-2.5 border-r-[2.5px] border-b-[2.5px] border-[#F82A8B] rotate-45 transition-transform duration-300 group-focus-within:-rotate-135 pointer-events-none"></span>
      </div>

      <!-- TIPO DE COMIDA -->
      <div class="relative group">
        <select id="comidaSelect"
          class="bg-white/90 border-[2.5px] border-[#FF3696] text-[#534741] rounded-full px-6 py-2 w-56 text-center font-space-grotesk-regular appearance-none cursor-pointer z-[9999] transition-colors duration-300 uppercase"
          onchange="cambiarComida()">
          <option selected disabled>- TIPO DE COMIDA -</option>
          <option value="tradicional">TRADICIONAL</option>
          <option value="alta">ALTA COCINA</option>
          <option value="vegana">VEGANA</option>
          <option value="fusion">FUSIÓN</option>
        </select>
        <span
          class="absolute right-6 top-1/2 -translate-y-1/2 w-2.5 h-2.5 border-r-[2.5px] border-b-[2.5px] border-[#F82A8B] rotate-45 transition-transform duration-300 group-focus-within:-rotate-135 pointer-events-none"></span>
      </div>

      <!-- PRECIO -->
      <div class="relative group">
        <select id="preciosSelect"
          class="bg-white/90 border-[2.5px] border-[#FF3696] text-[#534741] rounded-full px-6 py-2 w-56 text-center font-space-grotesk-regular appearance-none cursor-pointer z-[9999] transition-colors duration-300 uppercase"
          onchange="cambiarPrecio()">
          <option selected disabled>- PRECIO -</option>
          <option value="economico">$ Económico</option>
          <option value="moderado">$$ Moderado</option>
          <option value="gourmet">$$$ Gourmet</option>
          <option value="lujo">$$$$ De Lujo</option>
        </select>
        <span
          class="absolute right-6 top-1/2 -translate-y-1/2 w-2.5 h-2.5 border-r-[2.5px] border-b-[2.5px] border-[#F82A8B] rotate-45 transition-transform duration-300 group-focus-within:-rotate-135 pointer-events-none"></span>
      </div>

    </div>

  </section>

  {{-- SCRIPTS FILTROS --}}
  <script>

function cambiarUbicacion() {
  const seleccion = document.getElementById("ubicacionSelect").value;
  if (seleccion) {
    window.location.href = `/gastronomica/ubicacion/${seleccion}`;
  }
}



function cambiarOcasion() {
  const seleccion = document.getElementById("ocasionSelect").value;
  if (seleccion) {
    window.location.href = `/gastronomica/ocasion/${seleccion}`;
  }
}

function cambiarComida() {
  const seleccion = document.getElementById("comidaSelect").value;
  if (seleccion) {
    window.location.href = `/gastronomica/comida/${seleccion}`;
  }
}

function cambiarPrecio() {
  const seleccion = document.getElementById("preciosSelect").value;
  if (seleccion) {
    window.location.href = `/gastronomica/precio/${seleccion}`;
  }
}

  </script>

  <div class="mt-10">
    @yield('gastronomica-content')
  </div>

</section>
@endsection
