@extends('frontend.academy.index')

@section('academy-content')
 
<section class="bg-[#FFF7EF] py-16">
  <div class="max-w-5xl mx-auto px-6 text-[#534741]">

    
    <p class="font-space-grotesk-regular mb-12 text-center text-[18px]">
      <span class="font-SpaceGrotesk-Bold">El conocimiento gastronómico</span> no se queda en el mantel: se comparte en <br>
      aulas, talleres y cocinas colectivas. Aquí damos visibilidad a convenios <br>
      con universidades, escuelas de gastronomía y proyectos culturales que <br>
      buscan impulsar nuevas generaciones de cocineros, investigadores y <br>
      creativos.
    </p>

    <p class="font-space-grotesk-regular mb-14 text-center text-[18px]">
      Además, <span class="font-SpaceGrotesk-Bold">encontrarás cursos y talleres especializados:</span> desde cocina <br>regional hasta maridajes contemporáneos. Todo con el mismo enfoque de <br> 
      <span class="text-[#FF3696] font-SpaceGrotesk-Bold">Taste México:</span> <span  class="font-SpaceGrotesk-Bold"> aprender desde la raíz.</span>
    </p>

   
<div class="flex flex-col gap-8">

 
  <div class="relative flex flex-row bg-[#FFFFFF] rounded-[20px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden w-[700px] h-[220px] mx-auto">
    <img src="{{ asset('img/chescito.png') }}" alt="Taller DIF Puebla" class="w-[220px] h-[220px] object-cover">
    <div class="pl-10 pt-5 pr-5 flex flex-col">
      <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[16px] leading-tight">
        Talleres gratuitos del DIF Puebla
      </h3>
      <p class="font-space-grotesk-regular text-[16px] leading-relaxed">
        El DIF de Puebla, a través del Centro de<br>
        Capacitación y Desarrollo (Cecade), organiza<br>
        talleres de repostería (gastronomía) en juntas<br>
        auxiliares de la ciudad, del 12 de agosto al 25 de<br>
        noviembre de 2025.
      </p>
    </div>

    <a href="https://www.angulo7.com.mx/2025/noticias-puebla/dif-puebla-capital-dara-talleres-gratis-de-gastronomia-y-estilismo-donde/637643/"
       target="_blank"
       class="absolute bottom-[17px] right-[88px] text-[#D33882] font-SpaceGrotesk-Bold">
       Ver más >>>
    </a>
  </div>


  <div class="relative flex flex-row bg-[#FFFFFF] rounded-[20px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden w-[700px] h-[220px] mx-auto">
    <img src="{{ asset('img/aspic.png') }}" alt="Curso ASPIC" class="w-[220px] h-[220px] object-cover">
    <div class="pl-10 pt-5 pr-5 flex flex-col">
      <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[16px] leading-tight">
        Curso gastronomía mexicana contemporánea
      </h3>
      <p class="font-space-grotesk-regular text-[16px] leading-relaxed">
        En CDMX, curso de ~30 horas que mezcla<
        tradición<br> e innovación en platos mexicanos,
        con temario <br>variado (snacks, técnicas
        modernas, ingredientes<br> tradicionales,
        fusiones) ofrecido por el Instituto<br>
        Gastronómico ASPIC.
      </p>
    </div>

    <a href="https://aspic.edu.mx/cursos-de-gastronomia/gastronomia-mexicana-contemporanea/?utm_source=chatgpt.com" target="_blank"
       class="absolute bottom-[17px] right-[88px] text-[#D33882] font-SpaceGrotesk-Bold">
       Ver más >>>
    </a>
  </div>

  <div class="relative flex flex-row bg-[#FFFFFF] rounded-[20px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden w-[700px] h-[220px] mx-auto">
    <img src="{{ asset('img/cafesito.png') }}" alt="Curso de Barismo" class="w-[220px] h-[220px] object-cover">
    <div class="pl-10 pt-5 pr-5 flex flex-col">
      <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[16px] leading-tight">
        Cursos de gastronomía general<br>
        snacks / barismo / mixología – emcebar
      </h3>
      <p class="font-space-grotesk-regular text-[16px] leading-relaxed">
        Tienen modalidades presenciales y online,
        con<br> cursos de snacks salados y dulces,
        barismo,<br> coctelería. Sedes en Ciudad de
        México, Puebla y <br>Guadalajara. Cursos
        sabatinos, entre semana o <br>intensivos
        de un día.
      </p>
    </div>

    <a href="https://www.cursosgastronomia.com.mx/?utm_source=chatgpt.com" target="_blank"
       class="absolute bottom-[17px] right-[88px] text-[#D33882] font-SpaceGrotesk-Bold">
       Ver más >>>
    </a>
  </div>

  
  <div class="relative flex flex-row bg-[#FFFFFF] rounded-[20px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden w-[700px] h-[220px] mx-auto">
    <img src="{{ asset('img/muchachas.png') }}" alt="Diplomado Cultura Mexicana" class="w-[220px] h-[220px] object-cover">
    <div class="pl-10 pt-5 pr-5 flex flex-col">
      <h3 class="font-SpaceGrotesk-Bold uppercase mb-2 text-[16px] leading-tight">
        Especialización en cultura<br>
        y gastronomía mexicana
      </h3>
      <p class="font-space-grotesk-regular text-[16px] leading-relaxed">
        Diplomado «intensivo» con sesiones 100 %<br>
        prácticas + teoría (historia, cultura) que cubre<br>
        distintas épocas de la cocina mexicana;
        duración<br> de 4 semanas, incluye recetarios,
        ingredientes,<br> etc. Fechas en 2025.
      </p>
    </div>

    <a href="https://www.esgamex.com/intensivopas?utm_source=chatgpt.com" target="_blank"
       class="absolute bottom-[17px] right-[88px] text-[#D33882] font-SpaceGrotesk-Bold">
       Ver más >>>
    </a>
  </div>

</div>


</section>
@endsection