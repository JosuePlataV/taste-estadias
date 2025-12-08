@extends('frontend.academy.index')

@section('academy-content')

<section class="bg-[#FFF7EF] py-20">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6 text-[#534741]">

    <div class="group overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)] rounded-[20px]">
        <img src="{{ asset('img/pan-queso.png') }}" alt="Pastel Azteca" class="w-full object-cover">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0 rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[25px]">
        Receta de pastel <br>
        azteca con nopales,<br>
        saludable y deliciosa</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px]">
          Prueba esta fácil y deliciosa <br>
          versión del pastel azteca con <br>
          nopales. Aprende cómo hacer <br>
          esta receta saludable y <br>
          deliciosa. Si eres fanática de la <br>
          comida mexicana, pero al mismo <br>
          tiempo estás cuidando tu figura, <br>
          esta opción de platillo es para ti.
        </p>
      </div>
    </div>

  
    <div class="group  overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)]  rounded-[20px]">
        <img src="{{ asset('img/cocinero-azul.png') }}" alt="Chef Zurita" class="w-full object-cover ">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0  rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[25px]">Cocina mexicana e <br>
        identidad cultural - <br>
        Chef Zurita</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px]">
          Un viaje visual y reflexivo con el <br>
          Chef Zurita en el que la gastronomía <br>
          se convierte en espejo de nuestra <br>
          identidad. Explora cómo la cocina <br>
          mexicana narra historias de cultura, <br>
          memoria y pertenencia, desde sus <br>
          raíces hasta su expresión <br>
          contemporánea.
        </p>
      </div>
    </div>


    <div class="group overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)]  rounded-[20px]">
        <img src="{{ asset('img/ensalada.png') }}" alt="Recetas Antiinflamatorias" class="w-full object-cover  rounded-[13px]">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0  rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase text-[25px]">4 fáciles y saludables <br>
        recetas de cenas <br>
        antiinflamatorias</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px]">
          ¿Quieres cenar ligero pero delicioso? <br>
          Checa estas recetas de cenas <br>
          antiinflamatorias para preparar un <br>
          menú semanal económico. Desde <br>
          una ensalada de garbanzo hasta un <br>
          nopal empapelado, checa estas 4 <br>
          recetas de cenas antiinflamatorias <br>
          para el menú semanal.
        </p>
      </div>
    </div>


    <div class="group  overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)]  rounded-[20px]">
        <img src="{{ asset('img/abuelita.png') }}" alt="Cocina Tradicional Mexicana" class="w-full object-cover  rounded-[13px]">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0  rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase text-[25px]">La cocina <br>tradicional mexicana</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px] pt-10">
          Una cultura comunitaria, <br>
          ancestral y viva; el paradigma de <br>
          Michoacán son una expresión de <br>
          la identidad comunitaria y <br>
          permiten fortalecer los vínculos <br>
          sociales y consolidar el <br>
          sentimiento de identidad a nivel <br>
          nacional, regional y local.
        </p>
      </div>
    </div>

    <div class="group  overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)]  rounded-[20px]">
        <img src="{{ asset('img/cacao.png') }}" alt="El Cacao" class="w-full object-cover  rounded-[13px]">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0  rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase text-[25px]">El cacao: <br>del ritual al <br>chocolate</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px] pt-4">
          Explora la historia del cacao como <br>
          ingrediente sagrado, su papel en <br>
          ceremonias prehispánicas y su <br>
          evolución hasta convertirse en <br>
          uno de los productos más <br>
          emblemáticos del mundo.
        </p>
      </div>
    </div>

    <div class="group overflow-hidden transition">
      <div class="relative shadow-[0_4px_6px_rgba(0,0,0,0.1)]  rounded-[20px]">
        <img src="{{ asset('img/señor-negro.png') }}" alt="Enrique Olvera" class="w-full object-cover  rounded-[13px]">
        <div class="absolute inset-0 bg-[#534741]/50 flex items-center justify-center transition duration-300 group-hover:opacity-0  rounded-[13px]">
          <img src="{{ asset('img/play.png') }}" alt="Play" class="w-14 h-14">
        </div>
      </div>
      <div class="p-5">
        <h3 class="font-SpaceGrotesk-Bold uppercase text-[25px]">El sabor tiene memoria <br>
        Clase con Enrique <br>
        Olvera</h3>
        <p class="font-space-grotesk-regular leading-relaxed text-[17px]">
          El chef Enrique Olvera comparte <br>
          cómo los recuerdos, los ingredientes <br>
          y la técnica se entrelazan en su <br>
          cocina. Entre fogones, Olvera prepara <br>
          un platillo representativo mientras <br>
          reflexiona sobre el valor de la <br>
          simplicidad, el respeto al producto y <br>
          la importancia de cocinar con <br>
          propósito.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
