@extends('frontend.academy.index')

@section('academy-content')

    <section class="bg-[#FFF5EF] py-12 px-6">
      <div class="max-w-6xl mx-auto">
        <!-- Encabezado -->
        <div class="flex justify-center items-center gap-4 mb-10">
          <img src="{{ asset('img/icono-izquierdo.png') }}" alt="icono" class="w-12 h-12">
          <h2 class="text-[48px] font-Cubano text-[#534741]">
            <span class="text-[#FF3696]">BOLSA DE</span> TRABAJO
          </h2>
          <img src="{{ asset('img/icono-derecho.png') }}" alt="icono" class="w-12 h-12">
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          @foreach ([
          ['tag'=>'Contrata Varios Candidatos','puesto'=>'AYUDANTE GENERAL DE COCINA','ubicacion'=>'Mr. Pampas - Cancún, Quintana Roo.','link'=>'https://mx.indeed.com/viewjob?jk=3f63c54d05780818&from=shareddesktop_copy'],
          ['tag'=>'Contrata Varios Candidatos','puesto'=>'COCINERO INDUSTRIAL','ubicacion'=>'35079, Gómez Palacio, Dgo.','link'=>'https://mx.indeed.com/viewjob?jk=0db6f88217df08ef&from=shareddesktop_copy'],
          ['tag'=>'Urge Contratar','puesto'=>'COCINERO B','ubicacion'=>'Ladys BBQ - Monterrey, N. L.','link'=>'https://mx.indeed.com/viewjob?jk=e6692d9166fa4786&from=shareddesktop_copy'],
          ['tag'=>'Contrata Varios Candidatos','puesto'=>'COCINERO BANQUETES','ubicacion'=>'Casino de Monterrey A C - Monterrey, N. L.','link'=>'https://mx.indeed.com/viewjob?jk=981bb975e3859fc9&from=shareddesktop_copy'],
          ['tag'=>'Nuevo Empleo','puesto'=>'AUXILIAR DE COCINA','ubicacion'=>'Hotel Mesaluna - Juárez, Chih.','link'=>'https://mx.indeed.com/viewjob?jk=998c6fa600e3a2d2&from=shareddesktop_copy'],
          ['tag'=>'Nuevo Empleo','puesto'=>'COCINERA (O) B','ubicacion'=>'RESTAURANTE MAZZE - El Campanario, Qro.','link'=>'https://mx.indeed.com/viewjob?jk=882070f0971e17d6&from=shareddesktop_copy'],
          ['tag'=>'Urge Contratar','puesto'=>'SUPERVISOR DE TURNO COCINA','ubicacion'=>'Grupo Norteño de Servicios - San Pedro Garza García, N. L.','link'=>'https://mx.indeed.com/viewjob?jk=57c5291f753de2b5&from=shareddesktop_copy'],
          ['tag'=>'Nuevo Empleo','puesto'=>'ENCARGADO DE COCINA','ubicacion'=>'Restaurante La Lola - COLIMA.','link'=>'https://mx.indeed.com/viewjob?jk=ce018c1b2d2190fa&from=shareddesktop_copy'],
          ['tag'=>'Urge Contratar','puesto'=>'SUPERVISOR DE TURNO COCINA','ubicacion'=>'Grupo Norteño de Servicios - San Pedro Garza García, N. L.','link'=>'https://mx.indeed.com/viewjob?jk=57c5291f753de2b5&from=shareddesktop_copy'],
          ['tag'=>'Nuevo Empleo','puesto'=>'ENCARGADO DE COCINA','ubicacion'=>'Restaurante La Lola - COLIMA.','link'=>'https://mx.indeed.com/viewjob?jk=ce018c1b2d2190fa&from=shareddesktop_copy'],
          ] as $trabajo)
          <div class="bg-white rounded-2xl p-6 "
            style="box-shadow: 0 4px 4px rgba(0,0,0,0.25);">
            
            <div class="inline-block bg-[#FF3696]/20 font-Space-Grotesk-Medium text-[#D33882] text-[14px] px-3 py-1 rounded-md mb-3">
              {{ $trabajo['tag'] }}
            </div>

            
            <h3 class="text-[22px] font-SpaceGrotesk-Bold text-[#534741] mb-3">
              {{ $trabajo['puesto'] }}
            </h3>

            
            <div class="flex items-start gap-2 text-[#534741] text-[18px] font-space-grotesk-regular mb-4">
              <img src="{{ asset('img/ubi-delgada.png') }}" alt="Ubicación" class=" h-5 mt-1">
              <div>
                <span class="font-SpaceGrotesk-Bold  text-[21px]">Ubicación</span><br>
                {{ $trabajo['ubicacion'] }}
              </div>
            </div>

            <!-- Botón -->
            <a href="{{ $trabajo['link'] }}"
              target="_bg-[#534741]"
              class="flex items-center gap-2 text-[#534741] text-[15px] font-space-grotesk-regular pt-3 hover:text-[#D33882] transition">
              <img src="{{ asset('img/palomita.png') }}" alt="icon" class="w-4 h-4">
              <span class="underline underline-offset-2">Postúlate Rápidamente</span>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection
