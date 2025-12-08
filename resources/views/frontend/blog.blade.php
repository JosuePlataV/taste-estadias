@extends('layouts.frontend')
@section('title', 'blog')


@section('content' )
<section class="relative h-[730px] overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/foto-fondo.png') }}"alt="Fondo" class="absolute inset-0  object-cover -z-10" />
  <div class="relative z-10 flex flex-col items-center ">

    <span class="text-[#F48E3B] font-SpaceGrotesk-Bold text-[25px] leading-none  mb-15">
      NUESTRO ARTÍCULO DEL MES
    </span>

    <h2 class="font-Cubano text-[#FFF7EF] text-[40px] leading-tight">
      LA IMPORTANCIA DE LAS SALSAS EN LAS
    </h2>

    <span class="text-[#FF3696] font-Cubano text-[85px] leading-none
                 drop-shadow-[0_5px_2px_rgba(0,0,0,0.45)]">
      RECETAS MEXICANAS
    </span>

    <div class="flex flex-col items-center mt-3 space-y-1 font-bold">
      <span class="text-[#F48E3B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
      <span class="text-[#F48E3B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
      <span class="text-[#F48E3B] font-SpaceGrotesk-Regular text-[22px] leading-none">V</span>
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
<section class="bg-[#FFF7EF] container">


  <section class="relative bg-[#FFF7EF] h-[700px] overflow-hidden px-16 pt-20 overflow-visible">

    <div class="max-w-5xl mx-auto relative z-10">

      <h2 class="text-[#FF3696] font-Cubano text-[40px] ">
        RECETAS
      </h2>

      <div class="max-w-[620px] mx-auto ">
        <p class="text-[#534741] font-SpaceGrotesk-Bold text-[25px] leading-snug mb-4">
          Un mexicano no concibe la idea <br>
          de un taco sin su limón y su salsita.
        </p>

        <p class="text-[#534741] font-SpaceGrotesk-Regular text-[20px] leading-relaxed mb-4">
          Más que un simple acompañamiento, las salsas son <br>
          el alma de nuestras recetas: realzan sabores, equilibran <br>
          contrastes y cuentan la historia de nuestra cocina. <br>
          Ya sea suave o con ese picor que roba suspiros, forman <br>
          parte de nuestro día a día.
        </p>

        <p class="text-[#534741] font-SpaceGrotesk-Regular text-[20px] leading-relaxed mb-4">
          Por eso, en <span class="text-[#FF3696] font-SpaceGrotesk-Bold">Taste Mexico</span> no podíamos dejar de compartir <br>
          contigo algunas recetas que celebran esta tradición.
        </p>

        <p class="text-[#534741] font-SpaceGrotesk-Regular text-[20px] leading-relaxed mb-8">
          Toma nota y descubre cómo preparar estas salsas <br>
          mexicanas que transforman cualquier bocado en una <br>
          experiencia inolvidable.
        </p>

        <a href="#"
          class="block mx-auto text-[#FF3696] font-SpaceGrotesk-Bold text-[20px] text-center">
          Seguir Leyendo >>>
        </a>

      </div>
    </div>


    <div class="absolute inset-0 z-[60] pointer-events-none select-none overflow-visible">

      <img src="{{ asset('img/pimienta.png') }}"
        alt="Pimienta"
        class="absolute -top-[160px] right-[46px] w-[370px] rotate-[15deg] z-[70]" />

      <img src="{{ asset('img/tomates.png') }}"
        alt="Tomate verde"
        class="absolute top-[130px] right-[60px] w-[340px] z-[60]" />

      <img src="{{ asset('img/pimienta-negra.png') }}"
        alt="Pimienta negra"
        class="absolute bottom-[72px] right-[122px] w-[247px] z-[60]" />

      <img src="{{ asset('img/molcajete.png') }}"
        alt="Molcajete"
        class="absolute bottom-[-200px] right-[13px] w-[520px] z-[60]" />

    </div>

  </section>





  <section class="relative overflow-hidden container">
    <div class="relative w-full">
      <img
        src="{{ asset('img/fondo-naranja.svg') }}"
        alt="Fondo Naranja"
        class="w-full h-auto block" />

      <div class="absolute inset-0 flex flex-col items-center justify-start pt-20">
        <div class="flex items-center justify-center gap-4 mb-17">
          <img src="{{ asset('img/flor-1.svg') }}" alt="" class="w-12 h-12">
          <h2 class="text-[#FFF7EF] font-Cubano text-[50px] uppercase">DESTACADAS</h2>
          <img src="{{ asset('img/flor-2.svg') }}" alt="" class="w-12 h-12">
        </div>

        <div class="flex flex-wrap justify-center gap-16 px-6 md:px-16">
          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/semillas.svg') }}" alt="Cacao" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#080808]/52"></div>
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-lg">El cacao mexicano, nuevo<br> Patrimonio Cultural de la<br> Humanidad</h3>
              <p class="font-space-grotesk-regular text-sm mt-2">
                La UNESCO declaró al cacao mexicano <br> como Patrimonio Cultural Inmaterial. <br>
                Más que un ingrediente, es un símbolo de identidad mesoamericana que <br>conecta tradición, historia y futuro.
              </p>
            </div>
          </div>

          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/frutas.svg') }}" alt="Mercados CDMX" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#080808]/52"></div>
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-lg">Los mercados de la CDMX<br> que todo viajero debe<br>conocer</h3>
              <p class="font-space-grotesk-regular text-sm mt-2">
                De la Merced a San Juan, los mercados<br> capitalinos son una ventana al corazón <br>gastronómico de México: ingredientes<br> únicos, sabores locales y el caos<br> vibrante que alimenta a la ciudad.
              </p>
            </div>
          </div>

          <div class="relative w-[370px] h-[500px] rounded-[40px] overflow-hidden">
            <img src="{{ asset('img/restaurante.svg') }}" alt="Pujol" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#080808]/52"></div>
            <img src="{{ asset('img/flechas.svg') }}" alt="" class="absolute top-4 right-4 w-6 h-6 z-20">
            <div class="absolute bottom-0 p-6 text-[#FFF7EF] z-20">
              <h3 class="font-SpaceGrotesk-Bold text-lg">Pujol recupera la cima en <br>Latin America’s 50 Best<br> Restaurants</h3>
              <p class="font-space-grotesk-regular text-sm mt-2">
                El restaurante Pujol de Enrique Olvera<br> vuelve al primer lugar de la lista más<br> prestigiosa de la región, consolidando a<br> México como epicentro de la innovación<br> culinaria en Latinoamérica.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-[2300px] bg-[#FFF7EF] container">
    <nav class="flex justify-center items-center gap-8 font-SpaceGrotesk-Bold text-[#534741] text-[17px] pt-10">
      <div class="flex items-center gap-3">
        <a href="{{ url('blog') }}"
          class="px-5 py-2.5 rounded-[16px] transition transform duration-300
            {{ request()->is('blog') || request()->is('blog/*') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
          TODO
        </a>
      </div>

      <div class="flex items-center gap-3">
        <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
        <a href="{{ url('/noticias') }}"
          class="px-5 py-2.5 rounded-[16px] transition transform duration-300
                {{ request()->is('noticias') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
          NOTICIAS
        </a>
      </div>

      <div class="flex items-center gap-3">
        <img src="{{ asset('img/punto-amarillo.svg') }}" alt="Decoración amarilla" class="w-3 h-3 pointer-events-none select-none">
        <a href="{{ url('/recetas') }}"
          class="px-5 py-2.5 rounded-[16px] transition transform duration-300
                {{ request()->is('recetas') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
          RECETAS
        </a>
      </div>

      <div class="flex items-center gap-3">
        <img src="{{ asset('img/punto-rosa.svg') }}" alt="Decoración rosa" class="w-3 h-3 pointer-events-none select-none">
        <a href="{{ url('/opinion') }}"
          class="px-5 py-2.5 rounded-[16px] transition transform duration-300
                {{ request()->is('opinion') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
          OPINIÓN
        </a>
      </div>

      <div class="flex items-center gap-3">
        <img src="{{ asset('img/punto-amarillo.svg') }}" alt="Decoración amarilla" class="w-3 h-3 pointer-events-none select-none">
        <a href="{{ url('/guias') }}"
          class="px-5 py-2.5 rounded-[16px] transition transform duration-300
                {{ request()->is('guias') ? 'bg-[#695E59]/20' : 'hover:bg-[#695E59]/20' }}">
          GUÍAS
        </a>
      </div>
    </nav>

    <section class="bg-[#FFF7EF] py-14">
      <div class="flex flex-wrap justify-center gap-[30px] relative z-10">

        <div class="flex flex-wrap justify-center gap-[80px]">
          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/1-1.svg') }}" alt="Cacao mexicano" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Noticias</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                MÉXICO LIDERA EN LA LISTA <br> DE LATIN AMERICA’S 50 BEST<br> RESTAURANTS 2025
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                México vuelve a brillar en la escena<br>
                gastronómica internacional al<br>
                encabezar la lista de Latin America’s<br>
                50 Best Restaurants 2025.<br>
                Un reconocimiento que confirma<br>
                la fuerza, creatividad y tradición de<br>
                nuestra cocina en el panorama global.
              </p>
              <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>


          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/puchero.svg') }}" alt="Mole de olla" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Recetas</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                ¿CÓMO PREPARAR UN MOLE DE <br>
                OLLA CON RECETA DE ABUELA <br>
                POBLANA?
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-4">
                El mole de olla es de esos platillos que <br>
                saben a casa, tradición y a historias <br>
                contadas alrededor de la mesa.
                <br>
                <br>
                Te compartimos cómo prepararlo paso <br>
                a paso para que disfrutes en tu mesa <br>
                un clásico de la cocina mexicana.
              </p>
              <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>


          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/3-3.svg') }}" alt="Cocina de la milpa" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Opinión</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                LA PARADOJA DE LA ALTA <br>
                COCINA MEXICANA: LUJO CON <br>
                INGREDIENTES DE LA MILPA
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                La alta cocina mexicana ha <br>
                conquistado al mundo con propuestas <br>
                sofisticadas que sorprenden por su <br>
                creatividad.
                Sin embargo, detrás de muchos de <br>
                estos platillos de lujo, los protagonistas <br>
                siguen siendo los mismos: ingredientes <br>
                humildes de la milpa.
              </p>
              <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center gap-[80px] mt-8">
          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/4-4.svg') }}" alt="Mercado Oaxaca" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] ">Guía</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                48 HORAS PARA SABOREAR <br>
                OAXACA: DEL MERCADO AL <br>
                FINE DINING
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                En 48 horas, puedes recorrer <br>
                mercados llenos de color y aromas, <br>
                descubrir cocinas tradicionales que <br>
                guardan secretos de generaciones y <br>
                terminar en restaurantes de fine <br>
                dining que reinterpretan la cocina <br>
                oaxaqueña con creatividad y <br>
                elegancia.
              </p>
              <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>


          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/5-5.svg') }}" alt="Chile patrimonio" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Noticias</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                EL CHILE, NUEVO PATRIMONIO <br>
                CULTURAL DE LA UNESCO
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                Del fuego prehispánico a las cocinas <br>
                contemporáneas, el chile ha sido <br>
                siempre el corazón del sabor mexicano. <br>
                <br>
                Hoy, la UNESCO lo reconoce como <br>
                patrimonio cultural inmaterial,<br>
                celebrando siglos de tradición que <br>
                viven en cada bocado.
              </p>
              <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>


          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/6-6.svg') }}" alt="Tacos de cochinita" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Recetas</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                TACOS DE COCHINITA EN <br>
                VERSIÓN CASERA CON <br>
                TIPS DE MARINADO
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                La cochinita pibil es uno de los grandes <br>
                tesoros de la cocina yucateca, y llevarla <br>
                a casa es más fácil de lo que imaginas. <br>
                <br>
                Te compartimos cómo preparar tacos <br>
                irresistibles con tips de marinado que <br>
                realzan todo su sabor y jugosidad.
              </p>
              <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[14px]  pl-33">Seguir Leyendo >>></a>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center gap-[80px] mt-8">
          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/7-7.svg') }}" alt="Mezcal" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Opinión</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                ¿ES EL MEZCAL <br>
                EL NUEVO VINO?
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                El mezcal ha pasado de ser un secreto <br>
                guardado en las comunidades <br>
                oaxaqueñas a conquistar barras y <br>
                mesas en todo el mundo. <br>
                <br>
                Su complejidad, ritual y versatilidad lo <br>
                han llevado a compararse con el vino. <br>
                ¿Estamos frente a la nueva bebida <br>
                estrella de la gastronomía?
              </p>
              <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[14px] pl-33">Seguir Leyendo >>></a>
            </div>
          </div>

          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/8-8.svg') }}" alt="Festival queso y chocolate" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#F27E1E] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Guías</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                FESTIVAL DEL QUESO Y CHOCOLATE <br>
                2025 DESDE $30: COMIDA AL <br>
                CARBÓN, MEZCAL Y MÁS
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-10">
                Si eres amante de las experiencias <br>
                gastronómicas, no te puedes perder <br>
                el Festival del Queso y Chocolate 2025,<br>
                donde no sólo probarás esta <br>
                deliciosa combinación, sino también <br>
                disfrutarás de actividades especiales.
              </p>
              <a href="#" class="text-[#F27E1E] font-SpaceGrotesk-Bold text-[14px]  pl-33">Seguir Leyendo >>></a>
            </div>
          </div>

          <div class="w-[350px] h-[520px] bg-[#FFFFFF] rounded-[10px] drop-shadow-[0_2px_4px_rgba(83,71,65,0.25)] overflow-hidden">
            <div class="relative">
              <img src="{{ asset('img/9-9.svg') }}" alt="Guía Michelin" class="w-[350px] h-[200px] object-cover">
              <div class="absolute bottom-0 right-0 w-[109px] h-[27px] bg-[#D33882] flex items-center justify-center rounded-tl-[8px]">
                <span class="text-[#FFF7EF] font-SpaceGrotesk-Bold text-[15px] uppercase">Opinión</span>
              </div>
            </div>
            <div class="m-10">
              <h3 class="font-SpaceGrotesk-Bold text-[15px] text-[#534741] leading-snug mb-2">
                CÓMO LA GUÍA MICHELIN ESTÁ <br>
                REDEFINIENDO LOS ESTÁNDARES <br>
                GASTRONÓMICOS EN MÉXICO
              </h3>
              <p class="font-space-grotesk-regular text-[#534741] text-[14px] leading-snug mb-3">
                Desde la llegada de la Guía Michelin, <br>
                los restaurantes mexicanos han <br>
                elevado sus estándares en servicio,<br>
                presentación y creatividad, <br>
                diversificando la oferta en ciudades <br>
                como CDMX, Oaxaca y Monterrey. <br>
                La introducción y consolidación de la <br>
                Guía Michelin en México marcado...
              </p>
              <a href="#" class="text-[#D33882] font-SpaceGrotesk-Bold text-[14px]  pl-33">Seguir Leyendo >>></a>
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