@extends('frontend.personalidades.index')

@section('personalidades-content')

<!-- ENRIQUE OLVERA -->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">

    <img src="{{ asset('img/p-enrique.png') }}" alt="Enrique Olvera"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          ENRIQUE OLVERA
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Chef visionario detrás de Pujol, uno de los restaurantes más reconocidos <br>
        de México y del mundo.
        Su cocina reinterpreta los sabores tradicionales <br>
        con técnicas contemporáneas, elevando ingredientes
        locales <br>a experiencias sensoriales únicas.<br>
        Ha sido galardonado con múltiples estrellas Michelin y es considerado <br>
        un referente en la evolución moderna
        de la gastronomía mexicana.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>
          Pujol (Ciudad de México, México) — Reconocido entre los 50 Best
          <span class="block">Restaurants del mundo</span>
        </li>
        <li>Cosme (Nueva York, EE.UU.) — 1 estrella Michelin</li>
        <li>Atla (Nueva York, EE.UU.)</li>
        <li>Moxi (San Miguel de Allende, México)</li>
        <li>Ensalada Olvera — proyecto editorial y gastronómico personal</li>
      </ul>
    </div>
  </div>
  <svg
    class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="rgba(83, 71, 65, 0.05)" />
  </svg>
</section>


<!-- RICARDO MUÑOZ ZURITA -->
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row-reverse items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/p-ricardo.png') }}" alt="Ricardo Muñoz Zurita"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/flor-1.svg') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]"> <!-- ← ajusta este valor -->
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          RICARDO MUÑOZ ZURITA
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Chef e investigador reconocido como el mayor antropólogo de la cocina mexicana<br>
        Ha dedicado su vida a documentar, rescatar y preservar recetas tradicionales, <br>
        consolidándose como un puente entre el pasado culinario y la gastronomía contemporánea.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>Azul Histórico (Ciudad de México, México)</li>
        <li>Azul Condesa (Ciudad de México, México)</li>
        <li>Azul y Oro (Ciudad Universitaria, UNAM)</li>
        <li>Autor de: Diccionario Enciclopédico de la Gastronomía Mexicana</li>
        <li class="flex flex-col">
        <li><span>Consultor gastronómico en proyectos de investigación y</span> </li>
        <span>rescate culinario</span>
        </li>
      </ul>
    </div>
  </div>
  <svg
    class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
</section>


<!-- Gabriela RuizA -->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/p-gabriela.png') }}" alt="Enrique Olvera"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]"> <!-- ← ajusta este valor -->
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          GABRIELA RUIZ
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Originaria de Comalcalco, Tabasco, ha elevado los sabores de su tierra a <br>
        escenarios internacionales. Su cocina combina identidad, innovación <br>
        y raíces, destacándose como una de las voces más auténticas de la <br>
        gastronomía mexicana contemporánea. <br>
        Reconocida como Chef del Año 2019, participó en Iron Chef México y ha <br>
        sido embajadora de la cocina del sureste.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>Carmela y Sal (Ciudad de México, México)</li>
        <li>
          Festival Sabores de Tabasco — curaduría y representación
          <span class="block">gastronómica</span>
        </li>
        <li>
          Embajadora de la cocina tabasqueña en proyectos culturales
          <span class="block">internacionales</span>
        </li>

      </ul>
    </div>
  </div>
  <svg
    class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="rgba(83, 71, 65, 0.05)" />
  </svg>
</section>


<!-- CARLOS GAYTÁN-->
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row-reverse items-center  gap-55 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/p-carlos.png') }}" alt="Ricardo Muñoz Zurita"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/flor-1.svg') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]"> <!-- ← ajusta este valor -->
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          CARLOS GAYTÁN
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Chef de HA’, el primer restaurante en Xcaret México en recibir una <br>
        estrella Michelin. Fusiona técnicas francesas con ingredientes <br>
        mexicanos, ofreciendo una experiencia culinaria única. <br>
        Inició su carrera en Chicago, donde obtuvo también una estrella <br>
        Michelin con su restaurante Mexique, convirtiéndose en un <br>
        referente de la cocina mexicana moderna en el extranjero.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>HA’ (Xcaret, Riviera Maya, México) — 1 estrella Michelin</li>
        <li>Tzuco (Chicago, EE.UU.)</li>
        <li>Panango Bakery (Chicago, EE.UU.)</li>
        <li>
          Mexique (Chicago, EE.UU.) — cerrado en 2018, pero ícono
          <span class="block">de su trayectoria</span>
        </li>
      </ul>
    </div>
  </div>
  <svg
    class="absolute bottom-0 left-0 w-full h-[100px] z-20 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
</section>


<!-- daniela -->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/p-daniela.png') }}" alt="Daniela Soto-Innes"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]"> <!-- ← ajusta este valor -->
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          Daniela Soto-Innes
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Originaria de Ciudad de México y formada entre México y Estados Unidos, <br>
        trabajó junto a Enrique Olvera en Pujol y Cosme antes de abrir su <br>
        propio camino. Con solo 25 años recibió el premio a Mejor Chef Femenina <br>
        del Mundo (The World’s 50 Best 2019). Su cocina celebra la tradición <br>
        mexicana con frescura, energía y una visión profundamente personal.
      </p>

      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>

      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">

        <li>Cosme (Nueva York, EE.UU.) — 1 estrella Michelin</li>
        <li>Atla (Nueva York, EE.UU.)</li>
        <li>Rubra (proyecto en desarrollo, 2025)</li>
        <li>
          Embajadora culinaria en proyectos de mentoría para jóvenes chefs
          <span class="block">latinoamericanos</span>
        </li>
      </ul>
    </div>
  </div>


</section>
@endsection