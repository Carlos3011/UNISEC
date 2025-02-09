@extends('layout')

@section('titulo', 'Inicio - UniSec Aerospace')

@section('contenido')

<!-- Seccion Hero -->
<section class="relative min-h-screen flex items-center bg-gradient-to-br from-cosmic-black via-space-900 to-primary-dark overflow-hidden">

    <div class="absolute inset-0 z-0">
        <div class="star-field">
            <div class="layer"></div>
            <div class="layer"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-secondary/10 opacity-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 text-center z-10" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="mb-12">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight">
                Revolucionando la  
                <span id="typed-text" class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-cyan-400"></span>  
                mediante la innovación
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12">
                Consorcio internacional líder en ingeniería aeroespacial avanzada y desarrollo de tecnologías espaciales sostenibles
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#inscripcion" class="relative px-8 py-4 rounded-xl font-bold text-space-900 bg-secondary hover:bg-cyan-400 transition-all duration-300 shadow-lg shadow-secondary/30 hover:shadow-secondary/50 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                    Ver programas académicos
                    <span class="absolute inset-0 bg-secondary/20 opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl"></span>
                </a>
                <a href="#innovaciones" class="relative border-2 border-primary px-8 py-4 rounded-xl font-bold text-white hover:bg-primary/10 transition-all duration-300 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                    </svg>
                    Video institucional
                    <span class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl"></span>
                </a>
            </div>
        </div>
        
        <!-- Contador de logros con animación -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24">
            @foreach([
                ["count" => 127, "label" => "Misiones exitosas"],
                ["count" => 89, "label" => "Patentes registradas"],
                ["count" => 235, "label" => "Colaboraciones globales"],
                ["count" => 15, "label" => "Premios internacionales"]
            ] as $stat)
                <div class="text-center">
                    <div class="text-4xl font-bold text-secondary mb-2 counter" data-count="{{ $stat['count'] }}">0</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">{{ $stat["label"] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>




<script>
    new Typed("#typed-text", {
        strings: ["exploración espacial", "ingeniería aeroespacial", "tecnologías del futuro"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
    });

    document.querySelectorAll(".counter").forEach(counter => {
        let count = 0;
        let final = parseInt(counter.dataset.count);
        let speed = Math.floor(2000 / final);
        function updateCount() {
            count += 1;
            counter.textContent = count;
            if (count < final) setTimeout(updateCount, speed);
        }
        updateCount();
    });
</script>


<!-- Separador dinamico -->
<div class="h-24 bg-gradient-to-r from-secondary to-primary via-space-900 animate-gradient-x"></div>

<!-- Galeria de videos -->
<section class="py-24 bg-space-900 relative overflow-hidden" data-aos="fade-up">
    <!-- Elemento decorativo cósmico -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-radial-gradient from-tertiary/20 to-transparent blur-3xl opacity-30 animate-pulse"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <!-- Título y descripción mejorados -->
        <div class="text-center mb-20 space-y-8">
            <div class="inline-flex relative">
                <span class="absolute -inset-4 bg-tertiary/30 blur-3xl rounded-full"></span>
                <h2 class="text-6xl md:text-7xl bg-gradient-to-r from-secondary to-primary bg-clip-text text-transparent font-bold mb-6 relative">
                    Exploración Multimedia
                </h2>
            </div>
            <p class="text-xl md:text-2xl text-white max-w-4xl mx-auto leading-relaxed font-light">
                Sumérgete en nuestro universo de contenido audiovisual con documentales exclusivos y reportajes detrás de cámaras.
                <span class="block mt-4 text-tertiary font-medium">Selecciona un video para comenzar el viaje</span>
            </p>
        </div>

        <!-- Grid de videos mejorado -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[minmax(300px,_1fr)]">
            @foreach([
                ['id' => 'hI9HQfCAw64', 'title' => 'Lanzamiento histórico', 'description' => 'Revive el emocionante lanzamiento histórico, un hito en la ciencia espacial.', 'size' => 'md:col-span-2 md:row-span-2', 'new' => true],
                ['id' => '1C_zuHf6lP4', 'title' => 'Primeras imágenes del telescopio James Webb', 'description' => 'Observa las primeras imágenes capturadas por el telescopio más avanzado del mundo.', 'size' => 'md:col-span-1'],
                ['id' => '5KygwcZ545U', 'title' => 'Entrenamiento de astronautas', 'description' => 'Acompaña a los astronautas en su riguroso entrenamiento para explorar el espacio.', 'size' => 'md:col-span-1'],
                ['id' => 'aTc8kG4hER0', 'title' => 'Viaje a Marte: Preparación', 'description' => 'Prepara tu mente para el increíble viaje a Marte, una misión histórica.', 'size' => 'md:col-span-2'],
            ] as $key => $video)
            <div 
                class="group relative rounded-2xl xl:rounded-3xl overflow-hidden transform transition-all duration-500 hover:!scale-[1.02] hover:shadow-2xl hover:z-20 border border-space-700/50 hover:border-tertiary/50 {{ $video['size'] }}"
                data-aos="zoom-in-up" 
                data-aos-delay="{{ $key * 100 }}"
            >
                <!-- Efecto de brillo al hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute inset-0 bg-[radial-gradient(at_top_right,_var(--tw-gradient-stops))] from-tertiary/30 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-space-900/80"></div>
                </div>

                <!-- Badge "Nuevo" animado -->
                @if($video['new'] ?? false)
                <div class="absolute top-4 right-4 z-20 bg-secondary px-4 py-2 rounded-full text-sm font-bold text-space-900 shadow-lg animate-pulse-slow">
                    Nuevo ✨
                </div>
                @endif

                <!-- Contenedor del video mejorado -->
                <div class="relative w-full h-full bg-space-800 overflow-hidden">
                    <div class="aspect-video w-full h-full bg-space-700/50 animate-pulse"></div> <!-- Placeholder de carga -->
                    <iframe 
                        class="absolute inset-0 w-full h-full object-cover opacity-95 group-hover:opacity-100 transition-opacity duration-300"
                        src="https://www.youtube.com/embed/{{ $video['id'] }}?modestbranding=1&rel=0&autohide=1" 
                        loading="lazy"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                    ></iframe>
                </div>

                <!-- Información del video mejorada -->
                <div class="absolute bottom-0 left-0 right-0 p-6 space-y-2 bg-gradient-to-t from-space-900 via-space-900/90 to-transparent">
                    <h3 class="text-xl xl:text-2xl font-bold text-primary mb-2 group-hover:text-tertiary transition-colors duration-300">
                        {{ $video['title'] }}
                    </h3>
                    <p class="text-sm xl:text-base text-space-300 group-hover:text-space-100 transition-colors duration-300 line-clamp-2">
                        {{ $video['description'] }}
                    </p>
                    <div class="pt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="flex items-center text-tertiary font-medium hover:text-secondary">
                            <span class="mr-2">▶ Ver video</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.3a1 1 0 011.4 0l6 6a1 1 0 010 1.4l-6 6a1 1 0 01-1.4-1.4L11.58 10 6.3 4.7a1 1 0 010-1.4z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Separador dinamico -->
<div class="h-24 bg-gradient-to-r from-secondary to-primary via-space-900 animate-gradient-x"></div>

<!-- Galeria de imagenes -->
<section class="py-24 bg-space-900" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 transform hover:scale-105 transition-transform duration-300">
                Exploración Visual
            </h2>
            <p class="text-space-300 text-lg max-w-2xl mx-auto">
                Instantáneas de nuestros logros espaciales y avances tecnológicos
            </p>
        </div>

        @php
            $imagenes = [
                ["nombre" => "Lanzamiento Histórico", "archivo" => "spacex-rocket.jpg", "descripcion" => "El despegue que cambió la historia."],
                ["nombre" => "Telescopio James Webb", "archivo" => "nebulosa-morada.jpg", "descripcion" => "Explorando el universo con nuevas imágenes."],
                ["nombre" => "Satélite en órbita", "archivo" => "satelite.jpg", "descripcion" => "Tecnología avanzada en el espacio."],
                ["nombre" => "La Tierra desde el espacio", "archivo" => "earth.jpg", "descripcion" => "Vista única de nuestro planeta."],
                ["nombre" => "Anillos de Saturno", "archivo" => "saturno.jpg", "descripcion" => "Impresionante visión del cosmos."],
                ["nombre" => "El sol", "archivo" => "sol.jpg", "descripcion" => "Una maravilla del universo profundo."],
            ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            @foreach($imagenes as $index => $img)
                @php
                    $rutaImagen = asset('images/space/' . $img["archivo"]);
                    
                    // Alternamos tamaños: algunas grandes (2x2), otras medianas (1x2), y el resto pequeñas (1x1)
                    $spanClass = match ($index % 6) {
                        0 => 'row-span-2 col-span-2',  // Imágenes más grandes
                        2, 4 => 'row-span-1 col-span-2',  // Medianas horizontales
                        default => 'row-span-1 col-span-1',  // Pequeñas
                    };
                @endphp

                <div 
                    class="group relative overflow-hidden rounded-xl shadow-2xl hover:shadow-3xl transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] 
                    {{ $spanClass }} hover:z-10"
                    data-aos="zoom-in-up"
                    data-aos-delay="{{ $loop->index * 150 }}"
                    data-aos-anchor-placement="top-center"
                >
                    <!-- Contenedor con efecto Parallax y Hover trasero -->
                    <div class="relative h-full w-full perspective-1000 transform preserve-3d transition-all duration-500">
                        
                        <!-- Hover trasero con iluminación -->
                        <div class="absolute inset-0 bg-gradient-to-br from-transparent via-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        
                        <!-- Imagen -->
                        <img 
                            src="{{ $rutaImagen }}" 
                            alt="{{ $img['nombre'] }}"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 origin-center rounded-xl"
                        >
                        
                        <!-- Overlay con Información -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4 space-y-2 translate-y-6 group-hover:translate-y-0 transition-all duration-500 delay-100">
                                <h3 class="text-xl font-bold text-white drop-shadow-lg">
                                    {{ $img['nombre'] }}
                                </h3>
                                <div class="bg-space-800/80 backdrop-blur-sm p-3 rounded-lg">
                                    <p class="text-white text-sm line-clamp-2">
                                        {{ $img["descripcion"] }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<!-- 🌀 SEPARADOR ORGÁNICO -->
<div class="h-48 bg-space-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
    <div class="absolute inset-0 animate-orbital-movement">
        <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
    </div>
</div>

<!-- 📰 SECCIÓN NOTICIAS -->
<section class="py-20 bg-space-900" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Últimas Novedades</h2>
            <p class="text-gray-400 max-w-xl mx-auto">Mantente informado con nuestros avances y logros</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(range(1,3) as $key)
            <article class="bg-space-800 rounded-2xl border border-space-700 hover:border-secondary transition-all duration-300"
                     data-aos="fade-left" data-aos-delay="{{ $key * 100 }}">
                <img src="https://source.unsplash.com/random/800x600/?technology,space,{{ $key }}" 
                     alt="Noticia {{ $key }}"
                     class="w-full h-48 object-cover rounded-t-2xl">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <span class="mr-4">📅 15 Mayo 2024</span>
                        <span>🚀 Ingeniería</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Avances revolucionarios en propulsión espacial</h3>
                    <p class="text-gray-400 line-clamp-3">Nuestro equipo de ingeniería ha logrado un hito histórico en el desarrollo de motores de plasma de alta eficiencia...</p>
                    <a href="#" class="inline-block mt-4 text-primary hover:text-secondary font-semibold">
                        Leer más →
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<!-- 🛰 Seccion tecnologias destacadas -->
<section class="py-20 bg-space-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold text-white mb-6">Tecnologías Pioneiras</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Desarrollando soluciones innovadoras para los desafíos espaciales del mañana</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group relative bg-space-800 rounded-2xl p-8 border border-space-700 hover:border-secondary transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-space-700 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-white mb-4">Propulsión Hiperiónica</h3>
                    <p class="text-gray-400">Motores de plasma de alta eficiencia para misiones interplanetarias</p>
                    <div class="mt-6">
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span>Estado actual</span>
                            <span class="text-secondary">Fase de pruebas</span>
                        </div>
                        <div class="w-full bg-space-700 rounded-full h-2">
                            <div class="bg-secondary rounded-full h-2 w-3/4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repetir para otras tecnologías -->
        </div>
    </div>
</section>

<!-- 🌐 SECCIÓN DE COLABORACIONES GLOBALES -->
<section class="py-20 bg-gradient-to-br from-space-900 to-primary-dark">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold text-white mb-6">Nuestra Red Global</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Colaborando con líderes internacionales en la nueva era espacial</p>
        </div>

        <div class="relative">
            <div class="global-map-overlay"></div>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 relative z-10">
                @foreach(['nasa', 'esa', 'spacex', 'blue-origin', 'jaxa'] as $agency)
                <div class="group flex items-center justify-center p-6 bg-space-800 rounded-xl border border-space-700 hover:border-secondary transition-all duration-300">
                    <img src="/images/agencies/{{ $agency }}.png" alt="{{ strtoupper($agency) }}" class="h-12 opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 🎓 SECCIÓN DE PROGRAMAS ACADÉMICOS -->
<section class="py-20 bg-space-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold text-white mb-6">Formando a la Nueva Generación</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Programas educativos avanzados en colaboración con instituciones líderes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden group transform hover:-translate-y-2 transition-all duration-300">
                <div class="relative">
                    <img src="/images/programs/astroengineering.jpg" alt="Astroingeniería" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-space-900/80 to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-secondary px-3 py-1 rounded-full text-sm font-bold text-space-900">Nuevo</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-space-900 mb-4">MSc en Astroingeniería</h3>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        24 meses | Online
                    </div>
                    <a href="#" class="text-accent font-semibold hover:text-secondary flex items-center">
                        Más información
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Repetir para otros programas -->
        </div>
    </div>
</section>

<!-- 🚀 SECCIÓN DE PRÓXIMOS LANZAMIENTOS -->
<section class="py-20 bg-space-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-16">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-4xl font-bold text-white mb-6">Próximas Misiones</h2>
                <p class="text-gray-400">Calendario de lanzamientos y eventos importantes</p>
            </div>
            <div class="md:w-1/2 text-right">
                <a href="#" class="inline-flex items-center text-primary hover:text-secondary font-semibold">
                    Ver calendario completo
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="mission-card bg-space-800 rounded-2xl p-8 border border-space-700 hover:border-secondary transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-space-700 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-secondary font-bold">V</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Voyager XIV</h3>
                            <p class="text-gray-400 text-sm">Cohete: Nova-9 Heavy</p>
                        </div>
                    </div>
                    <span class="text-sm bg-primary/20 text-primary px-3 py-1 rounded-full">Ciencia Planetaria</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-sm">
                        <div class="text-gray-500 mb-1">Fecha de lanzamiento</div>
                        <div class="text-white">15 Agosto 2024</div>
                    </div>
                    <div class="text-right">
                        <div class="text-gray-500 mb-1">Plataforma</div>
                        <div class="text-white">SLC-40, Cabo Cañaveral</div>
                    </div>
                </div>
                <div class="mt-6 relative pt-4">
                    <div class="flex justify-between text-xs text-gray-500 mb-2">
                        <span>Preparación</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-space-700 rounded-full h-2">
                        <div class="bg-secondary rounded-full h-2 w-4/5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection