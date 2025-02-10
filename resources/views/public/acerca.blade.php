@extends('layout')

@section('titulo', 'Acerca de UNISEC')

@section('contenido')
<!-- HERO SECTION -->
<section class="relative min-h-[70vh] flex flex-col justify-center bg-gradient-to-br from-cosmic-300 via-space-700" data-aos="zoom-in-up" data-aos-duration="1200">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <!-- Video de fondo con filtro y opacidad -->
        <video autoplay muted loop class="w-full h-full object-cover filter blur-2xl opacity-30">
            <source src="/videos/space-background.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-primary/30 to-secondary/30"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center z-10">
        <h1 class="text-5xl md:text-7xl font-bold bg-gradient-to-r from-secondary to-primary-100 bg-clip-text text-transparent mb-4 drop-shadow-2xl">
            Acerca de UNISEC
        </h1>
        <p class="text-lg text-gray-200 max-w-3xl mx-auto mb-8">
            Innovación, compromiso y excelencia en la exploración espacial.
        </p>
        <!-- Botones de llamada a la acción sin escalado excesivo -->
        <div class="flex justify-center gap-6">
            <a href="#que-somos" class="px-8 py-3 bg-secondary text-white font-semibold rounded-full transition-all duration-300 hover:bg-secondary/90 hover:border-2 hover:border-cyan-400 hover:shadow-lg">
                Conoce Nuestra Historia
            </a>
            <a href="#valores" class="px-8 py-3 border border-secondary text-secondary font-semibold rounded-full transition-all duration-300 hover:bg-secondary hover:text-white hover:shadow-lg">
                Nuestros Valores
            </a>
        </div>
    </div>
    <!-- Ícono de Scroll Down -->
    <div class="absolute bottom-8 w-full flex justify-center">
        <a href="#que-somos" class="text-secondary animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
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
                    <p class="font-bold text-xl">Dr. Alejandro Martínez</p>
                    <p class="text-sm text-gray-400">Presidente y Fundador</p>
                </div>
            </footer>
        </blockquote>
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
