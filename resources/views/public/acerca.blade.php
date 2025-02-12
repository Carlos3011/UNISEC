@extends('layout')

@section('titulo', 'Acerca de UNISEC')

@section('contenido')
<section class="relative min-h-[80vh] flex flex-col justify-center bg-gradient-to-br from-space-900 via-cosmic-800 to-space-900 overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1200">
    <!-- Fondo estelar animado -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent"></div>
        <div class="stars-small animate-pulse-slow"></div>
        <div class="stars-medium animate-pulse-medium"></div>
        <div class="stars-large animate-pulse-fast"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-20 space-y-8">
        <!-- Título con efecto galáctico -->
        <div class="relative inline-block" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-bold mb-4 galactic-title">
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-cyan-500 to-primary animate-gradient">UNISEC MEXICO</span>
            </h1>
            <div class="absolute inset-0 bg-[url('/svg/starburst.svg')] bg-contain bg-center opacity-30 mix-blend-overlay animate-rotate-slow"></div>
        </div>
        <style>
            .galactic-title {
                text-shadow: 0 0 40px rgba(76, 175, 255, 0.3),
                            0 0 80px rgba(76, 175, 255, 0.2),
                            0 0 120px rgba(76, 175, 255, 0.1);
            }
        </style>

        <!-- Subtítulo con animación -->
        <p class="text-xl md:text-2xl text-galactic-200 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-200 to-secondary-300">Innovación espacial</span> impulsada por la excelencia humana
        </p>

        <!-- Tarjetas interactivas -->
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400">
            <a href="#que-somos" class="group cosmic-card p-6 text-left transition-all duration-500 hover:transform hover:scale-[1.02]">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-primary/20 text-primary p-4 rounded-2xl">
                        <i class="fas fa-scroll text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-galactic-100">Nuestra Travesía</h3>
                </div>
                <p class="text-white leading-relaxed">Desde 2012, escribiendo la historia de la exploración espacial con innovación y determinación.</p>
            </a>

            <a href="#valores" class="group cosmic-card p-6 text-left transition-all duration-500 hover:transform hover:scale-[1.02]">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-secondary/20 text-secondary p-4 rounded-2xl">
                        <i class="fas fa-hand-holding-heart text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-galactic-100">Principios Cósmicos</h3>
                </div>
                <p class="text-white leading-relaxed">Ética, innovación sostenible y colaboración global como pilares fundamentales.</p>
            </a>
        </div>
    </div>

    <!-- Scroll indicator mejorado -->
    <div class="absolute bottom-8 w-full flex justify-center" data-aos="fade-up" data-aos-delay="600">
        <a href="#que-somos" class="scroll-indicator animate-float">
            <i class="fas fa-chevron-down text-2xl text-secondary"></i>
        </a>
    </div>
</section>

<!-- SEPARADOR ORGÁNICO -->
<div class="h-48 bg-space-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-60"></div>
    <div class="absolute inset-0 animate-orbital-movement">
        <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
    </div>
</div>

<!-- QUIÉNES SOMOS -->
<section id="que-somos" class="py-24 bg-gradient-to-br from-cosmic-300 via-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Imagen Representativa con efecto sutil de brillo y overlay -->
            <div class="group relative rounded-2xl overflow-hidden shadow-xl transition-all duration-500" data-aos="fade-right" data-aos-duration="800">
                <img src="/images/space-lab.jpg" alt="Laboratorio Espacial" class="w-full h-full object-cover filter brightness-75 transition-all duration-500 group-hover:brightness-100">
                <!-- Overlay que aparece en hover -->
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <!-- Texto Descriptivo -->
            <div data-aos="fade-left" data-aos-duration="800">
                <h2 class="text-5xl font-bold text-white mb-4 drop-shadow-lg">
                    ¿Quiénes Somos?
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed">
                    UNISEC es un centro de innovación en el ámbito aeroespacial, dedicado a impulsar proyectos que trascienden fronteras y desafían los límites de la tecnología. Nuestra pasión es llevar la exploración espacial a nuevas alturas a través de la investigación y la colaboración global.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- MISIÓN Y VISIÓN -->
<section class="py-24 bg-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Nuestra Misión y Visión</h2>
            <p class="text-gray-300 text-xl max-w-3xl mx-auto">
                Dirigimos nuestra energía hacia un futuro donde la exploración espacial se convierta en el motor de la innovación tecnológica global.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Tarjeta Misión sin escalado, con transición de borde y sombra -->
            <div class="bg-gray-800 p-8 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-right" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3 0 .92.418 1.735 1.096 2.324l1.404 1.04a2.993 2.993 0 001.5.636c1.657 0 3-1.343 3-3 0-.92-.418-1.735-1.096-2.324l-1.404-1.04A2.993 2.993 0 0012 8z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-10 10 10 10 0 0010 10 10 10 0 0010-10A10 10 0 0012 2z" />
                    </svg>
                    <h3 class="text-3xl font-bold text-cyan-400">Misión</h3>
                </div>
                <p class="text-gray-300">
                    Impulsar la investigación y el desarrollo en el ámbito aeroespacial, fomentando la colaboración internacional y la innovación para transformar la visión del futuro en realidades tangibles.
                </p>
            </div>
            <!-- Tarjeta Visión -->
            <div class="bg-gray-800 p-8 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-left" data-aos-delay="150">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <h3 class="text-3xl font-bold text-cyan-400">Visión</h3>
                </div>
                <p class="text-gray-300">
                    Ser el referente principal en innovación aeroespacial en Latinoamérica, liderando proyectos de tecnología avanzada que conecten el mundo con el cosmos.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- MENSAJE DEL PRESIDENTE -->
<section class="relative py-24 bg-gradient-to-br from-cosmic-500 via-cosmic-700 to-black overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.07),_transparent_70%)]"></div>
    </div>
    <div class="max-w-3xl mx-auto px-6 relative z-10 text-center">
        <blockquote class="text-white">
            <p class="text-2xl md:text-3xl leading-relaxed font-medium mb-6 drop-shadow-xl">
                "La exploración del espacio no es solo un sueño, sino una misión que transforma nuestro presente y nos proyecta hacia un futuro lleno de posibilidades infinitas."
            </p>
            <footer class="flex items-center justify-center">
                <div class="border-l-4 border-cyan-400 pl-4">
                    <p class="font-bold text-xl">Dr. Hermes Moreno Alvarez</p>
                    <p class="text-sm text-gray-400">Presidente UNISEC Seccion México</p>
                </div>
            </footer>
        </blockquote>
    </div>
</section>

<!-- EQUIPO -->
<section class="relative py-20 bg-gradient-to-b from-space-900 to-space-950/80">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="text-center mb-16">
      <div class="inline-flex relative mb-6">
        <span class="absolute inset-0 bg-primary/10 blur-xl rounded-full"></span>
        <h2 class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-300 drop-shadow-md">
          Nuestro Equipo
        </h2>
      </div>
      <p class="text-lg text-gray-300/80 max-w-3xl mx-auto leading-relaxed tracking-wide">
        Expertos multidisciplinarios unidos por la pasión por el espacio y la tecnología de vanguardia.
      </p>
    </div>

    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 xl:gap-12">
      <!-- Tarjeta de Miembro -->
      @for($i = 1; $i <= 6; $i++)
      <div class="group relative bg-space-800/40 backdrop-blur-lg rounded-2xl border border-space-500/20 hover:border-primary/40 transition-all duration-300 ease-in-out hover:scale-[1.05] hover:rotate-1 shadow-xl shadow-space-900/50 overflow-hidden"
           data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
        
        <div class="relative overflow-hidden">
          <img src="/images/member{{$i}}.jpg" alt="Miembro" 
               class="w-full h-80 object-cover grayscale-[40%] group-hover:grayscale-0 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-space-900/90 via-space-900/40 group-hover:via-space-900/20"></div>
        </div>
        
        <div class="p-6 relative">
          <div class="mb-4">
            <h3 class="text-2xl font-bold text-white mb-1 tracking-wide">Dr. Nombre Apellido</h3>
            <p class="text-primary/90 font-medium text-sm">Cargo Principal</p>
          </div>
          <p class="text-gray-300/80 text-sm leading-relaxed mb-5">
            Especialista con 15 años de experiencia en sistemas avanzados de propulsión espacial y arquitectura de misiones interplanetarias.
          </p>
          
          <div class="flex space-x-3">
            <a href="#" class="p-2 rounded-lg bg-space-700/40 hover:bg-primary/30 transition-all">
              <i class="fab fa-linkedin text-gray-300 hover:text-primary text-lg"></i>
            </a>
            <a href="#" class="p-2 rounded-lg bg-space-700/40 hover:bg-primary/30 transition-all">
              <i class="fab fa-github text-gray-300 hover:text-primary text-lg"></i>
            </a>
            <a href="#" class="p-2 rounded-lg bg-space-700/40 hover:bg-primary/30 transition-all">
              <i class="fas fa-envelope text-gray-300 hover:text-primary text-lg"></i>
            </a>
          </div>
        </div>
        
        <!-- Efecto de borde dinámico -->
        <div class="absolute inset-0 rounded-2xl pointer-events-none">
          <div class="absolute inset-0 border-2 border-space-500/20 group-hover:border-primary/40 rounded-2xl transition-all duration-300"></div>
        </div>
      </div>
      @endfor
    </div>
  </div>
</section>

<!-- NUESTRA HISTORIA (TIMELINE) -->
<section class="py-24 bg-gradient-to-br from-cosmic-300 via-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Nuestra Historia</h2>
            <p class="text-gray-300 text-xl max-w-3xl mx-auto">
                Un recorrido lleno de hitos que definen nuestro compromiso con la exploración y la innovación.
            </p>
        </div>
        <!-- Timeline -->
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-1/2"></div>
            @php
                $timeline = [
                    ['year' => '2020', 'event' => 'Fundación de UNISEC y lanzamiento del primer proyecto de investigación aeroespacial.'],
                    ['year' => '2021', 'event' => 'Desarrollo de colaboraciones internacionales y registro de patentes innovadoras.'],
                    ['year' => '2023', 'event' => 'Reconocimiento como líder en tecnología espacial en Latinoamérica.'],
                ];
            @endphp
            @foreach($timeline as $index => $item)
                @php $isLeft = $index % 2 == 0; @endphp
                <div class="mb-8 flex justify-{{ $isLeft ? 'start' : 'end' }} items-center w-full" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-cyan-400 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold">{{ $item['year'] }}</h1>
                    </div>
                    <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <p class="text-gray-300 text-base">
                            {{ $item['event'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- NUESTROS VALORES -->
<section id="valores" class="py-24 bg-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Nuestros Valores</h2>
            <p class="text-gray-300 text-xl max-w-3xl mx-auto">
                Estos son los principios que guían cada uno de nuestros proyectos y decisiones.
            </p>
        </div>
        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
            @php
                $valores = [
                    ['nombre' => 'Innovación', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 19h6l-.75-2M9 11l.75-2h4.5L15 11M7.75 11h8.5l-1.5-4H9.25l-1.5 4z" /></svg>'],
                    ['nombre' => 'Compromiso', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>'],
                    ['nombre' => 'Colaboración', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-5-3.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20H4v-2a4 4 0 015-3.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>'],
                    ['nombre' => 'Exploración', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-10 10 10 10 0 0010 10 10 10 0 0010-10A10 10 0 0012 2z" /></svg>'],
                    ['nombre' => 'Excelencia', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>'],
                ];
            @endphp
            @foreach($valores as $valor)
            <div class="p-6 bg-gray-800 rounded-xl shadow-2xl transition-all duration-300 hover:bg-gradient-to-r hover:from-secondary hover:to-primary hover:shadow-3xl flex flex-col items-center text-center">
                <div class="mb-4">
                    {!! $valor['icon'] !!}
                </div>
                <h4 class="text-xl font-semibold text-cyan-300">{{ $valor['nombre'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
