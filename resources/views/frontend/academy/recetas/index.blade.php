@extends('frontend.academy.index')

@section('academy-content')

<section class="bg-[#FFF7EF] container">


<section>
            <div class="flex justify-center items-center gap-4 mb-10">
          <img src="{{ asset('img/icono-izquierdo.png') }}" alt="icono" class="w-12 h-12">
          <h2 class="text-[48px] font-Cubano text-[#534741]">
            <span class="text-[#FF3696]">NUESTRAS</span> RECETAS
          </h2>
          <img src="{{ asset('img/icono-derecho.png') }}" alt="icono" class="w-12 h-12">
        </div>



            <p class="font-space-grotesk-regular mb-12 text-center text-[18px]">
      Cada receta es más que una lista de pasos: es un relato de familia, <br>
      territorio y memoria. <br><br>
      Aquí compartimos preparaciones tradicionales: como un mole de olla <br>
      poblano o unos tacos de cochinita caseros, junto a versiones creativas <br>
      que dialogan con técnicas modernas.
      <br><br>
      El objetivo no es solo cocinar, sino entender qué hay detrás de cada <br>
       ingrediente y cómo se conecta con la historia gastronómica de México.
    </p>


</section>
 
    {{--primera --}}
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-start gap-10 bg-transparent p-8  h-[700px] w-[1023px]">
    
    {{-- IMAGEN DEL PLATILLO --}}
    <img src="{{ asset('img/pibil.svg') }}" alt="Cochinita Pibil" class="h-[550px] rounded-[50px] object-cover">

    {{-- CONTENIDO DE TEXTO --}}
    <div class="flex flex-col gap-4">
      <div class="flex items-center gap-2">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Icono decorativo" class="w-[30px]">
        <h2 class="font-Cubano text-[#534741] text-[28px] uppercase leading-tight">
          COCHINITA PIBIL <span class="text-[#F7931E] text-[22px]">(Yucatán)</span>
        </h2>
      </div>

      <div class="text-[#534741]">
        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mb-1">INGREDIENTES (6 porciones):</h3>
        <ul class="font-space-grotesk-regular text-[15px] leading-relaxed list-disc list-inside">
          <li>1½ kg de carne de cerdo (pierna o lomo)</li>
          <li>200 g de pasta de achiote</li>
          <li>1 taza de jugo de naranja agria (o mezcla de naranja dulce con un <br>poco de limón)</li>
          <li>½ taza de vinagre blanco</li>
          <li>4 dientes de ajo</li>
          <li>1 cucharadita de comino</li>
          <li>1 hoja de plátano (opcional, para envolver)</li>
          <li>Sal al gusto</li>
        </ul>

        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mt-3 mb-1">PREPARACIÓN:</h3>
        <ol class="font-space-grotesk-regular text-[15px] leading-relaxed list-decimal list-inside">
          <li>Licuar el achiote con el jugo de naranja, vinagre, ajo, comino y sal.</li>
          <li>Marinar la carne cortada en trozos grandes por mínimo 6 horas <br>(ideal toda la noche).</li>
          <li>Envolver en hoja de plátano y colocar en una charola para hornear.</li>
          <li>Hornear tapado a 180 °C por 3–4 horas, hasta que la carne esté <br> muy suave.</li>
          <li>Deshebrar y servir en tacos con cebolla morada encurtida.</li>
        </ol>
      </div>
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




 
    {{-- segundo --}}
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row items-start gap-10 bg-transparent p-8   h-[800px] w-[1023px]">
    
   
    <img src="{{ asset('img/pozole.svg') }}" alt="Pozole" class="h-[550px] rounded-[50px] object-cover">
   
    <div class="flex flex-col gap-4">
      <div class="flex items-center gap-2">
        <img src="{{ asset('img/flor-1.svg') }}" alt="Icono decorativo" class="w-[30px]">
        <h2 class="font-Cubano text-[#534741] text-[28px] uppercase leading-tight">
          POZOLE <span class="text-[#FF3696] text-[22px]">(Guerrero / Jalisco)</span>
        </h2>
      </div>

      <div class="text-[#534741]">
        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mb-1">INGREDIENTES (8 porciones):</h3>
        <ul class="font-space-grotesk-regular text-[15px] leading-relaxed list-disc list-inside">
          <li>1 kg de maíz pozolero pre-cocido</li>
          <li>1½ kg de carne de cerdo (espinazo, pierna o cabeza)</li>
          <li>4 chiles guajillo secos</li>
          <li>4 chiles ancho secos</li>
          <li>3 dientes de ajo</li>
          <li>1 cebolla blanca</li>
          <li>Lechuga romana picada</li>
          <li>Rábanos en rodajas</li>
          <li>Orégano seco, chile piquín y limón al gusto</li>
        </ul>

        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mt-3 mb-1">PREPARACIÓN:</h3>
        <ol class="font-space-grotesk-regular text-[15px] leading-relaxed list-decimal list-inside">
          <li>Cocer el maíz en agua con un poco de cal (si es crudo) o <br>brusar ya pre-cocido.</li>
          <li>Cocer la carne con ajo y cebolla hasta que esté suave; <br>deshebrar y reservar.</li>
          <li>Desvenar y remojar los chiles; licuarlos con ajo y un<br> poco de caldo. Colar.</li>
          <li>Agregar la salsa al caldo con maíz y carne, sazonar con <br>sal y hervir 30 minutos.</li>
          <li>Servir con rábanos, lechuga, cebolla picada, orégano y <br>chile al gusto.</li>
        </ol>
      </div>
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
 
    {{-- ytercero --}}
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-start gap-10 bg-transparent p-8 h-[700px] w-[1023px]">
    

    <img src="{{ asset('img/mole-poblano.svg') }}" alt="Cochinita Pibil" class="h-[550px] rounded-[50px] object-cover">

 
    <div class="flex flex-col gap-4">
      <div class="flex items-center gap-2">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Icono decorativo" class="w-[30px]">
        <h2 class="font-Cubano text-[#534741] text-[28px] uppercase leading-tight">
          MOLE PLOBANO  <span class="text-[#F7931E] text-[22px]">(PUEBLA)</span>
        </h2>
      </div>

      <div class="text-[#534741]">
        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mb-1">INGREDIENTES (6 porciones):</h3>
        <ul class="font-space-grotesk-regular text-[15px] leading-relaxed list-disc list-inside">
<li>2 pechugas de pollo cocidas</li>
<li>6 chiles mulato, 4 pasilla, 4 anchos (sin semillas)</li>
<li>2 tortillas de maíz doradas</li>
<li>½ bolillo frito</li>
<li>50 g de almendras, 50 g de pasas</li>
<li>1 tablilla de chocolate de mesa</li>
<li>1 jitomate y ½ cebolla asados</li>
<li>2 dientes de ajo</li>
<li>½ cucharadita de canela, clavo y pimienta negra</li>
<li>1 litro de caldo de pollo</li>
<li>Sal al gusto</li>

        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mt-3 mb-1">PREPARACIÓN:</h3>
        <ol class="font-space-grotesk-regular text-[15px] leading-relaxed list-decimal list-inside">
          <li>Tostar los chiles sin quemarlos y remojar en agua caliente.</li>
<li>Freír almendras, pasas, bolillo y tortillas.</li>
<li>Licuar los chiles con jitomate, cebolla, ajo, especias y pan/tortilla.</li>
<li>Freír la pasta en poco aceite, añadir caldo y cocinar 40 minutos.</li>
<li>Incorporar el chocolate y ajustar de sal.</li>
<li>Servir sobre pollo cocido con arroz blanco.</li>
        </ol>
      </div>
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

 
    {{-- cuarto --}}
<section class="relative flex justify-center bg-[rgba(83,71,65,0.05)] py-12">
  <div class="flex flex-row items-start gap-10 bg-transparent p-8   h-[800px] w-[1023px]">
   
    <img src="{{ asset('img/tlayulas.svg') }}" alt="Pozole" class="h-[550px] rounded-[50px] object-cover">

   
    <div class="flex flex-col gap-4">
      <div class="flex items-center gap-2">
        <img src="{{ asset('img/flor-1.svg') }}" alt="Icono decorativo" class="w-[30px]">
        <h2 class="font-Cubano text-[#534741] text-[28px] uppercase leading-tight">
          TLAYUDAS <span class="text-[#FF3696] text-[22px]">(OAXACA)</span>
        </h2>
      </div>

      <div class="text-[#534741]">
        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mb-1">INGREDIENTES (8 porciones):</h3>
        <ul class="font-space-grotesk-regular text-[15px] leading-relaxed list-disc list-inside">
          4 tlayudas (tortillas gigantes y crujientes de maíz)</li>
<li>200 g de asiento (manteca con residuos de chicharrón)</li>
<li>250 g de tasajo (carne seca asada)</li>
<li>250 g de chorizo o cecina enchilada</li>
<li>250 g de quesillo (queso Oaxaca)</li>
<li>Frijoles refritos al gusto</li>
<li>Col o lechuga picada</li>
<li>Salsa al gusto</li>
        </ul>

        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mt-3 mb-1">PREPARACIÓN:</h3>
        <ol class="font-space-grotesk-regular text-[15px] leading-relaxed list-decimal list-inside">
          <li>Untar las tlayudas con asiento y frijoles refritos.</li>
<li>Colocar el quesillo deshebrado y calentar en comal <br> hasta que se derrita.</li>
<li>Añadir tasajo y chorizo previamente asados.</li>
<li>Doblar la tlayuda a la mitad o servir abierta, con col y <br>salsa.</li>
        </ol>
      </div>
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

    {{--quinta --}}
<section class="relative flex justify-center bg-[#FFF7EF] py-12">
  <div class="flex flex-row items-start gap-10 bg-transparent p-8  h-[600px] w-[1023px]"">
    
  
    <img src="{{ asset('img/birria.svg') }}" alt="Cochinita Pibil" class="h-[550px] rounded-[50px] object-cover">

    
    <div class="flex flex-col gap-4">
      <div class="flex items-center gap-2">
        <img src="{{ asset('img/icono-izquierdo.png') }}" alt="Icono decorativo" class="w-[30px]">
        <h2 class="font-Cubano text-[#534741] text-[28px] uppercase leading-tight">
          BIRRIA <span class="text-[#F7931E] text-[22px]">(JALISCO)</span>
        </h2>
      </div>

      <div class="text-[#534741]">
        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mb-1">INGREDIENTES (6 porciones):</h3>
        <ul class="font-space-grotesk-regular text-[15px] leading-relaxed list-disc list-inside">
        <li>1 ½ kg de carne de chivo (puede mezclarse con res)</li>
<li>5 chiles guajillo, 3 chiles ancho, 2 chiles pasilla</li>
<li>3 dientes de ajo, ½ cebolla</li>
<li>1 rama de canela, 3 clavos de olor, 1 pizca de orégano y comino</li>
<li>½ taza de vinagre de manzana</li>
<li>2 jitomates asados</li>
<li>Sal al gusto</li>
<li>Tortillas de maíz para acompañar</li>
        </ul>

        <h3 class="font-SpaceGrotesk-Bold text-[15px] uppercase mt-3 mb-1">PREPARACIÓN:</h3>
        <ol class="font-space-grotesk-regular text-[15px] leading-relaxed list-decimal list-inside">
          Desvenar y remojar los chiles; licuar con jitomates, ajo, <br> cebolla, especias y vinagre.</li>
<li>Marinar la carne con la salsa por 12 horas.</li>
<li>Cocinar en horno tapado o en olla a fuego lento con la <br>marinada, 3–4 horas.</li>
<li>Servir como caldo o deshebrar para tacos, con cebolla,  <br> cilantro y limón.</li>
        </ol>
      </div>
    </div>
  </div>

</section>
@endsection

