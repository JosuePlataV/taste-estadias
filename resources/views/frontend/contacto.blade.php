@extends('layouts.frontend')
@section('title', 'contacto')


@section('content' )

<section class="relative h-[690px]  overflow-hidden flex flex-col justify-center items-center text-center container">
  <img src="{{ asset('img/contacto.svg') }}" alt="Fondo"
    class="absolute inset-0 object-cover -z-10" />
  <svg class="absolute bottom-0 left-0 w-full h-[100px] -z-10 pointer-events-none"
    viewBox="0 0 1200 120" preserveAspectRatio="none" aria-hidden="true">
    <path
      d="M0,70 C399,200 400,-40 730,70 C1150,230 1200,-80 1440,40 L1810,120 L0,180 Z"
      fill="#FFF7EF" />
  </svg>
  
</section>

<section class="bg-[#FFF7EF] container">

 <div
  class="relative h-[300px] max-w-[1200px] mx-auto flex flex-row justify-between items-start z-30 -translate-y-[500px]">

  <div class="flex flex-col justify-between w-[520px] text-left text-[#FFF7EF] mt-20">

    <div>
      
      <p class="font-Cubano text-[37px] leading-[38px] mb-[4px]">
        <span class="text-[#FF3696]">¿</span>NOS SENTAMOS A LA MESA
      </p>
      <p class="font-Cubano text-[55px] leading-[38px] mb-[110px]  ml-5">
        Y LO PLATICAMOS<span class="text-[#FF3696]">?</span>
      </p>

    
      <p class="font-Cubano text-[50px] leading-[26px] mb-[30px] ml-5">
        CONTÁCTANOS
      </p>

    
      <div class="flex items-center gap-[30px] mb-[16px] ml-5">
        <button>
          <img src="{{ asset('img/face.svg') }}" alt="Facebook" class="h-[40px]" />
        </button>
        <button>
          <img src="{{ asset('img/insta.svg') }}" alt="Instagram" class=" h-[40px]" />
        </button>
        <button>
          <img src="{{ asset('img/yotube.svg') }}" alt="YouTube" class=" h-[40px]" />
        </button>
        <button>
          <img src="{{ asset('img/TikTok.svg') }}" alt="TikTok" class="h-[40px]" />
        </button>
      </div>

   
      <p class="font-space-grotesk-regular  text-[20px] leading-[22px] mb-[100px] ml-5">
        contacto@tastemexico.com
      </p>
    </div>


    <div class="mt-[40px]">
      <p class="font-space-grotesk-regular text-[16px] leading-[20px] text-[#534741] max-w-[420px] mb-[20px] ml-5">
        Si eres una marca, cadena de restaurantes, evento…  <br>
        y quieres contactarnos para un proyecto comercial <br>
        especial, preparamos este media kit para ti.
      </p>

      <button
        class="font-SpaceGrotesk-Bold text-[16px] leading-[20px] bg-[#FF3696] text-[#FFF7EF] rounded-[10px] px-[60px] py-[14px] ml-5">
        Media Kit
      </button>
    </div>
  </div>


  <div class="w-[560px] h-[650px] bg-[#F27E1E] rounded-[30px] px-[40px] pt-[40px] pb-[24px] text-left flex flex-col justify-between mt-22">
    <form class="space-y-[18px]">
 
      <div>
        <label class="font-SpaceGrotesk-Bold text-[14px] leading-[18px] text-[#FFF7EF] block mb-[6px]">
          Nombre:
        </label>
        <input
          type="text"
          class="w-full h-[44px] rounded-[4px] border border-[#FFF7EF] bg-[#F27E1E] px-[12px] font-Roboto-Regular text-[14px] leading-[18px] text-[#FFF7EF] placeholder:text-[#FFE2C2]" />
      </div>

   
      <div>
        <label class="font-SpaceGrotesk-Bold text-[14px] leading-[18px] text-[#FFF7EF] block mb-[6px]">
          Correo Electrónico:
        </label>
        <input
          type="email"
          class="w-full h-[44px] rounded-[4px] border border-[#FFF7EF] bg-[#F27E1E] px-[12px] font-Roboto-Regular text-[14px] leading-[18px] text-[#FFF7EF] placeholder:text-[#FFE2C2]" />
      </div>

    
      <div>
        <label class="font-SpaceGrotesk-Bold text-[14px] leading-[18px] text-[#FFF7EF] block mb-[6px]">
          Teléfono:
        </label>
        <input
          type="text"
          class="w-full h-[44px] rounded-[4px] border border-[#FFF7EF] bg-[#F27E1E] px-[12px] font-Roboto-Regular text-[14px] leading-[18px] text-[#FFF7EF] placeholder:text-[#FFE2C2]" />
      </div>


      <div>
        <label class="font-SpaceGrotesk-Bold text-[14px] leading-[18px] text-[#FFF7EF] block mb-[6px]">
          Mensaje:
        </label>
        <textarea
          class="w-full h-[140px] rounded-[4px] border border-[#FFF7EF] bg-[#F27E1E] px-[12px] py-[8px] font-Roboto-Regular text-[14px] leading-[18px] text-[#FFF7EF] resize-none placeholder:text-[#FFE2C2]"></textarea>
      </div>

     
      <button
        type="submit"
        class="w-full h-[46px] mt-[6px] rounded-[6px] bg-[#FFF7EF] font-SpaceGrotesk-Bold text-[16px] leading-[20px] text-[#F27E1E]">
        Enviar Mensaje:
      </button>
    </form>


    <p class="mt-[18px] font-Roboto-Regular text-[16px] leading-[16px] text-[#FFE2C2]">
      ©2025 TASTE MÉXICO | Todos los derechos reservados
    </p>
  </div>
</div>

</section>          