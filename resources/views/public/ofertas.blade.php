@extends('layout')

@section('titulo', 'Ofertas Académicas')

@section('contenido')
<!-- HERO -->
<section class="relative min-h-[80vh] flex flex-col justify-center bg-gradient-to-br from-space-900 via-cosmic-800 to-space-900 overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1200">

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-20 space-y-8">
        <!-- Título con efecto galáctico -->
        <div class="relative inline-block" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-bold mb-4 galactic-title">
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-cyan-500 to-primary animate-gradient">OFERTAS ACADEMICAS</span>
            </h1>
            <div class="absolute inset-0 bg-[url('/svg/starburst.svg')] bg-contain bg-center opacity-30 mix-blend-overlay animate-rotate-slow"></div>
        </div>
        <!-- Subtítulo -->
        <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Descubre los programas educativos que impulsarán tu carrera en el ámbito espacial.
        </p>
    </div>

</section>

<!-- PROGRAMAS ACADÉMICOS -->
<section id="programas" class="py-24 bg-gradient-to-br from-cosmic-300 via-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Nuestros Programas Académicos</h2>
            <p class="text-white text-xl max-w-3xl mx-auto">
                Sumérgete en un universo de conocimiento con cursos, diplomados y programas especializados en tecnología y ciencias espaciales.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tarjeta 1 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-primary/20 text-primary p-4 rounded-2xl">
                        <i class="fas fa-star text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Curso de Astronomía Avanzada</h3>
                </div>
                <p class="text-white">
                    Explora los secretos del universo con clases interactivas y observaciones prácticas.
                </p>
            </a>
            <!-- Tarjeta 2 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-secondary/20 text-secondary p-4 rounded-2xl">
                        <i class="fas fa-robot text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Diplomado en Robótica Espacial</h3>
                </div>
                <p class="text-white">
                    Domina la automatización y el control para desarrollar tecnologías espaciales de vanguardia.
                </p>
            </a>
            <!-- Tarjeta 3 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-accent/20 text-accent p-4 rounded-2xl">
                        <i class="fas fa-cogs text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Seminario de Ingeniería Aeroespacial</h3>
                </div>
                <p class="text-white">
                    Conoce las estrategias y tecnologías que impulsan el desarrollo en la industria aeroespacial.
                </p>
            </a>
            <!-- Tarjeta 4 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-primary/20 text-primary p-4 rounded-2xl">
                        <i class="fas fa-graduation-cap text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Maestría en Ciencias Espaciales</h3>
                </div>
                <p class="text-white">
                    Avanza en tu carrera con un programa de posgrado enfocado en investigación y desarrollo espacial.
                </p>
            </a>
            <!-- Tarjeta 5 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="500">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-secondary/20 text-secondary p-4 rounded-2xl">
                        <i class="fas fa-lightbulb text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Taller de Innovación Tecnológica</h3>
                </div>
                <p class="text-white">
                    Desarrolla proyectos disruptivos y soluciones innovadoras en el ámbito espacial.
                </p>
            </a>
            <!-- Tarjeta 6 -->
            <a href="#" class="group cosmic-card p-6 bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-3xl" data-aos="fade-up" data-aos-delay="600">
                <div class="flex items-center gap-4 mb-4">
                    <div class="cosmic-icon bg-accent/20 text-accent p-4 rounded-2xl">
                        <i class="fas fa-satellite text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Curso de Satélites y Comunicaciones</h3>
                </div>
                <p class="text-white">
                    Aprende los fundamentos de las comunicaciones satelitales y su impacto en la conectividad global.
                </p>
            </a>
        </div>
    </div>
</section>

<!-- ¿POR QUÉ ELEGIR NUESTROS PROGRAMAS? -->
<section class="py-24 bg-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">¿Por qué elegir nuestros programas?</h2>
            <p class="text-white text-xl max-w-3xl mx-auto">
                Ofrecemos una formación de excelencia con docentes expertos, tecnología de punta y un enfoque práctico que te preparará para el éxito.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Beneficio 1 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-chalkboard-teacher text-5xl text-primary mb-4"></i>
                <h3 class="text-2xl font-bold text-white mb-2">Docentes Expertos</h3>
                <p class="text-white">
                    Aprende de profesionales destacados en la industria espacial.
                </p>
            </div>
            <!-- Beneficio 2 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-flask text-5xl text-secondary mb-4"></i>
                <h3 class="text-2xl font-bold text-white mb-2">Investigación Avanzada</h3>
                <p class="text-white">
                    Participa en proyectos de investigación de vanguardia.
                </p>
            </div>
            <!-- Beneficio 3 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-network-wired text-5xl text-accent mb-4"></i>
                <h3 class="text-2xl font-bold text-white mb-2">Conexiones Globales</h3>
                <p class="text-white">
                    Accede a una red internacional de profesionales y oportunidades.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIOS -->
<section class="py-24 bg-gradient-to-br from-cosmic-500 via-cosmic-700 to-black overflow-hidden" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Testimonios</h2>
            <p class="text-white text-xl max-w-3xl mx-auto">
                Conoce la experiencia de nuestros estudiantes y cómo nuestros programas han impulsado su éxito.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonio 1 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <p class="text-white italic mb-4">
                    "El curso de Astronomía Avanzada cambió mi perspectiva. La experiencia práctica y los conocimientos adquiridos me abrieron nuevas puertas."
                </p>
                <h4 class="text-xl font-bold text-white">- Ana Rodríguez</h4>
            </div>
            <!-- Testimonio 2 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <p class="text-white italic mb-4">
                    "El diplomado en Robótica Espacial me preparó para enfrentar los desafíos de la industria. ¡Totalmente recomendable!"
                </p>
                <h4 class="text-xl font-bold text-white">- Luis Méndez</h4>
            </div>
            <!-- Testimonio 3 -->
            <div class="p-6 bg-gray-800 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <p class="text-white italic mb-4">
                    "La maestría en Ciencias Espaciales fue la clave para avanzar en mi carrera. Profesores excepcionales y una metodología innovadora."
                </p>
                <h4 class="text-xl font-bold text-white">- Carla Jiménez</h4>
            </div>
        </div>
    </div>
</section>

<!-- EVENTOS ACADÉMICOS (TIMELINE) -->
<section class="py-24 bg-gradient-to-br from-cosmic-300 via-space-700" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Eventos Académicos</h2>
            <p class="text-white text-xl max-w-3xl mx-auto">
                Mantente actualizado con nuestros próximos eventos, conferencias y talleres que impulsarán tu conocimiento.
            </p>
        </div>
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-1/2"></div>
            @php
                $eventos = [
                    ['fecha' => '15 Mar, 2025', 'evento' => 'Conferencia Internacional de Astronomía'],
                    ['fecha' => '30 Abr, 2025', 'evento' => 'Taller de Robótica Aplicada'],
                    ['fecha' => '20 May, 2025', 'evento' => 'Seminario sobre Satélites y Comunicaciones'],
                ];
            @endphp
            @foreach($eventos as $index => $evento)
                @php $isLeft = $index % 2 == 0; @endphp
                <div class="mb-8 flex justify-{{ $isLeft ? 'start' : 'end' }} items-center w-full" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-cyan-400 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold">{{ $evento['fecha'] }}</h1>
                    </div>
                    <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <p class="text-white text-base">
                            {{ $evento['evento'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PREGUNTAS FRECUENTES (FAQ) -->
<section class="py-24 bg-cosmic" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-white mb-4">Preguntas Frecuentes</h2>
            <p class="text-white text-xl max-w-3xl mx-auto">
                Resolvemos tus dudas sobre nuestros programas y el proceso de inscripción.
            </p>
        </div>
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <details class="bg-gray-800 rounded-xl p-4 shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <summary class="text-white font-bold cursor-pointer">¿Qué requisitos necesito para inscribirme?</summary>
                <p class="text-white mt-2">
                    Para inscribirte, debes contar con el título de bachiller y cumplir con los requisitos específicos de cada programa.
                </p>
            </details>
            <!-- FAQ 2 -->
            <details class="bg-gray-800 rounded-xl p-4 shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <summary class="text-white font-bold cursor-pointer">¿Existen becas o financiamiento?</summary>
                <p class="text-white mt-2">
                    Sí, ofrecemos diversas opciones de becas y financiamiento para apoyar a nuestros estudiantes.
                </p>
            </details>
            <!-- FAQ 3 -->
            <details class="bg-gray-800 rounded-xl p-4 shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <summary class="text-white font-bold cursor-pointer">¿Cuál es la modalidad de los programas?</summary>
                <p class="text-white mt-2">
                    Nuestros programas se ofrecen en modalidad presencial, semipresencial y en línea, según las necesidades del curso.
                </p>
            </details>
        </div>
    </div>
</section>

<!-- LLAMADO A LA ACCIÓN (CTA) -->
<section class="py-24 bg-gradient-to-r from-secondary to-primary" data-aos="zoom-in">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold mb-4 text-glow">¿Listo para transformar tu futuro?</h2>
        <p class="text-xl text-primary mb-8">
            Inscríbete ahora y forma parte de la vanguardia en la exploración espacial.
        </p>
        <a href="#" class="inline-block bg-cosmic text-primary font-bold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition transform">
            Inscríbete
        </a>
    </div>
</section>

<!-- ESTILOS PERSONALIZADOS -->
<style>
    .galactic-title {
        text-shadow: 0 0 40px rgba(76, 175, 255, 0.3),
                     0 0 80px rgba(76, 175, 255, 0.2),
                     0 0 120px rgba(76, 175, 255, 0.1);
    }
    .animate-gradient {
        animation: gradient 3s ease infinite;
        background-size: 400% 400%;
    }
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .animate-rotate-slow {
        animation: rotate-slow 20s linear infinite;
    }
    @keyframes rotate-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(10px); }
    }
</style>
@endsection
