<header class="absolute top-12 left-0 w-full z-50 container">
    <div class="mx-auto px-6 flex items-center justify-center h-20 container">
        
        <nav class="hidden md:flex items-center space-x-3 font-SpaceGrotesk-Bold text-[#F3F2E3] text-base uppercase text-center">
           
            <a href="{{ url('/') }}" 
               class="px-3 py-2 rounded-lg {{ request()->is('/') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
               Home
            </a>

        
            <img src="{{ asset('img/punto-rosa.svg') }}" alt="punto rosa" class="w-2 h-2">

            <!-- QUIÉNES SOMOS -->
            <a href="{{ url('quienes') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('quienes') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Quiénes<br class="hidden lg:block"> Somos</span>
            </a>

        
            <img src="{{ asset('img/punto-amarillo.png') }}" alt="punto amarillo" class="w-2 h-2">

            <!-- BLOG -->
            <a href="{{ url('blog') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('blog') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Blog</span>
            </a>

         
            <img src="{{ asset('img/punto-rosa.svg') }}" alt="punto rosa" class="w-2 h-2">

            <a href="{{ url('academy/bolsa') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('academy/bolsa') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Food<br class="hidden lg:block"> Academy</span>
            </a>

         
            <img src="{{ asset('img/punto-amarillo.svg') }}" alt="punto amarillo" class="w-2 h-2">

            <a href="{{ url('personalidades/nacionales') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('personalidades/nacionales') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Personalidades</span>
            </a>
                      
    
            <a href="{{ url('/') }}" class="mx-6">
                <img src="{{ asset('img/LOGO.png') }}" alt="Taste Mexico" class="h-12 w-auto">
            </a>


            <a href="{{ url('gastronomica/inicio') }}" 
               class="px-5 py-1 rounded-lg transiton transform duration-300 {{ request()->is('gastronomica/inicio') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Guía Gastronómica</span>
            </a>

            <img src="{{ asset('img/punto-amarillo.svg') }}" alt="punto amarillo" class="w-2 h-2">

            <a href="{{ url('calendario') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('calendario') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Calendario</span>
            </a>

           
            <img src="{{ asset('img/punto-rosa.svg') }}" alt="punto rosa" class="w-2 h-2">

            <a href="{{ url('eventos') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('eventos') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Eventos</span>
            </a>

           
            <img src="{{ asset('img/punto-amarillo.svg') }}" alt="punto amarillo" class="w-2 h-2">

            <a href="{{ url('contacto') }}" 
               class="px-2 py-1 rounded-lg transiton transform duration-300 {{ request()->is('contacto') ? 'bg-[#FFF7EF]/20' : 'hover:bg-[#FFF7EF]/20' }}">
                <span>Contacto</span>
            </a>
        </nav>
    </div>
</header>
