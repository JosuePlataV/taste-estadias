@extends('frontend.personalidades.index')

@section('personalidades-content')

<!-- i-maestro.png  -->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/i-maestro.png ') }}" alt="i-maestro.png "
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          Massimo Bottura <span class=" text-[22px]">(Italia)</span>
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Massimo Bottura, originario de Módena, revolucionó la cocina italiana <br>
        reinterpretando platos clásicos con un lenguaje contemporáneo. Su estilo <br>
        mezcla tradición con arte moderno, música y filosofía. Con Osteria <br>
        Francescana logró que la gastronomía italiana se convirtiera en narrativa <br>
        cultural global.
      </p>

      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>Osteria Francescana (Módena, Italia) — 3 estrellas Michelin</li>
        <li>Gucci Osteria da Massimo Bottura (Florencia, Italia) — 1 estrella Michelin</li>
        <li>Gucci Osteria (Beverly Hills, EE.UU.)</li>
        <li>Gucci Osteria (Tokio, Japón)</li>
        <li>Gucci Osteria (Seúl, Corea del Sur)</li>
        <li>Franceschetta58 (Módena, Italia)</li>
        <li>Torno Subito (Dubái, Singapur y Miami)</li>
        <li>Casa Maria Luigia (Módena, Italia)</li>
        <li>Al Gatto Verde (Cavallino, Italia)</li>
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


<!-- Joan Roca (España) -->
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row-reverse items-center  gap-45 bg-transparent p-8 h-[700px] w-[1250px]">

    <img src="{{ asset('img/i-joan.png') }}" alt="Joan Roca"
      class="h-[550px] w-auto rounded-[50px] object-cover">

    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/flor-1.svg') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          Joan Roca <span class=" text-[22px]">(España)</span>
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Con sus hermanos Josep y Jordi, Joan Roca ha puesto a Girona en <br>
        el mapa gastronómico mundial. El Celler de Can Roca combina la<br> memoria familiar, la
        cocina catalana y la vanguardia técnica. Su <br>
        hospitalidad y compromiso con la sostenibilidad lo han convertido <br>
        en referente de la alta cocina europea.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>El Celler de Can Roca (Girona, España) — 3 estrellas Michelin</li>
        <li>Rocambolesc (heladerías en varias ciudades de España)</li>
        <li>Casa Cacao (hotel boutique y chocolatería en Girona)</li>
        <li>Normal (Girona, España)</li>
        <li>Mas Marroch (Girona, espacio para eventos)</li>
        <li>Esperit Roca (Sant Julià de Ramis, Girona)</li>
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


<!-- René Redzepi (Dinamarca)-->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/i-rene.png') }}" alt="René Redzepi"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          René Redzepi <span class=" text-[22px]">(Dinamarca)</span>
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Fundador de Noma, Redzepi cambió la historia de la gastronomía<br>
        contemporánea al colocar la cocina nórdica en el centro del<br>
        mundo culinario. Su filosofía se basa en la estacionalidad,<br>
        ingredientes locales y técnicas de fermentación, marcando<br>
        escuela para toda una generación de chefs.
      </p>
      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>Noma (Copenhague, Dinamarca) — 3 estrellas Michelin</li>
        <li>Pop-ups internacionales (Japón, Australia, México)</li>
        <li>
          Noma Projects (plataforma de investigación y productos
          <span class="block">fermentados)</span>
        </li>
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


<!--Dominique Crenn (Francia / EuA)-->
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row-reverse items-center  gap-55 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/i-dominique.png') }}" alt="Dominique Crenn"
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/flor-1.svg') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          Dominique Crenn <span class=" text-[22px]">(Francia / EUA)</span>
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Primera mujer chef en EE.UU. en lograr tres estrellas Michelin, <br>
        Dominique Crenn combina poesía, memoria y sostenibilidad en sus<br>
        menús. Su cocina es una carta íntima, inspirada en su infancia en<br>
        Francia y en su vida en California. Su activismo también ha <br>
        marcado pauta en el rol de la mujer en la alta cocina.
      </p>

      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>
      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">
        <li>Atelier Crenn (San Francisco, EE.UU.) — 3 estrellas Michelin</li>
        <li>Bar Crenn (San Francisco, EE.UU.) — 1 estrella Michelin</li>
        <li>Petit Crenn (San Francisco, EE.UU., actualmente cerrado)</li>
        <li>Golden Poppy (París, Francia)</li>
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


<!--Gastón Acurio (Perú)-->
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-center  gap-25 bg-transparent p-8 h-[700px] w-[1250px]">
    <img src="{{ asset('img/i-gaston.png') }}" alt="Gastón Acurio "
      class="h-[550px] w-auto rounded-[50px] object-cover">
    <div class="flex flex-col text-left">
      <div class="flex items-start gap-2 relative">
        <img src="{{ asset('img/icono-izquierdo.png') }}"
          alt="Icono decorativo"
          class="w-[35px] relative top-[-8px]">
        <h2 class="font-Cubano text-[#534741] text-[40px] uppercase leading-tight mb-4">
          Gastón Acurio
        </h2>
      </div>
      <p class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed max-w-[600px] mb-4">
        Embajador de la cocina peruana en el mundo, Acurio logró que el <br>
        ceviche, los ajíes y los sabores andinos fueran protagonistas de la alta <br>
        cocina. Su visión es democrática: desde fine dining hasta formatos <br>
        casuales, siempre impulsando el orgullo peruano y la diversidad <br>
        biológica del país.
      </p>

      <p class="font-SpaceGrotesk-Bold text-[#534741] text-[16px]">Restaurantes / proyectos:</p>

      <ul class="font-Space-Grotesk-Medium text-[#534741] text-[15px] leading-relaxed list-disc ml-5">

        <li>Astrid y Gastón (Lima, Perú)</li>
        <li>La Mar (Lima, San Francisco, Miami, Bogotá, Santiago, entre otros)</li>
        <li>Tanta (Lima, Madrid, Chicago y más ciudades)</li>
        <li>Panchita (Lima, Perú)</li>
        <li>Chicha (Cusco y Arequipa, Perú)</li>
        <li>Madam Tusan (Lima, Perú)</li>
        <li>Bachiche (Lima, Perú)</li>
      </ul>
    </div>
  </div>
</section>
@endsection