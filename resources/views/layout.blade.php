<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Unisec</title>
    
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-cosmic-dark text-base font-['Inter']">

    <!-- Barra de progreso superior -->
    <div class="h-1 bg-secondary/20 fixed top-0 left-0 right-0 z-50">
        <div class="h-full bg-secondary transition-all duration-300 ease-out" id="progress-bar"></div>
    </div>

    <!-- Capa de partículas -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <canvas id="starsCanvas" class="absolute inset-0"></canvas>
    </div>

    <!-- NAVBAR MEJORADO -->
    <nav class="sticky top-0 bg-gradient-primary shadow-lg z-40 backdrop-blur-md bg-opacity-90 transition duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo con animación -->
                <a href="{{ route('inicio') }}" class="flex items-center group">
                    <div class="relative">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo de UniSec" class="w-55 h-auto">
                    </div>
                </a>

                <!-- Menú de navegación -->
                <div class="hidden lg:flex items-center space-x-8">
                    @foreach(['inicio' => 'Inicio', 'acerca' => 'Acerca', 'ofertas' => 'Ofertas', 'miembros' => 'Miembros', 'contacto' => 'Contacto'] as $route => $label)
                        <a href="{{ route($route) }}" class="relative text-gray-200 hover:text-white px-3 py-2 text-sm font-medium transition-all duration-300
                           before:absolute before:-bottom-1 before:left-0 before:w-0 before:h-0.5 before:bg-secondary before:transition-all before:duration-300
                           hover:before:w-full">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 relative overflow-hidden">
        <!-- Fondo decorativo con gradiente dinámico -->
        <div class="absolute inset-0 -z-10 opacity-30">
            <div class="h-[600px] w-full bg-gradient-to-r from-primary-dark to-background blur-[100px]"></div>
        </div>

        @yield('contenido')
    </main>

    <!-- FOOTER MEJORADO -->
    <footer class="bg-gradient-primary text-gray-300 mt-24 py-12 border-t border-tech-medium">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-12">
            
            <!-- Logo y descripción -->
            <div class="space-y-6">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo de UniSec" class="w-32 h-auto">
                </div>
                <p class="text-sm leading-relaxed text-gray-400">Innovación aeroespacial para un futuro sostenible.</p>
            </div>

            <!-- Menú de navegación -->
            <div>
                <h3 class="text-gray-100 text-lg font-semibold mb-6">Explorar</h3>
                <ul class="space-y-4">
                    @foreach(['ofertas' => 'Oportunidades', 'miembros' => 'Miembros', 'blog' => 'Blog Técnico'] as $route => $label)
                        <li><a href="{{ route($route) }}" class="flex items-center group text-sm hover:text-white transition-colors">
                            <span class="w-2 h-2 bg-secondary rounded-full mr-3 transform group-hover:translate-x-1 transition-all"></span>
                            {{ $label }}
                        </a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Información de contacto -->
            <div>
                <h3 class="text-gray-100 text-lg font-semibold mb-6">Contacto</h3>
                <p class="text-sm"><span class="font-medium text-white">Teléfono:</span> +1 (555) 123-4567</p>
                <p class="text-sm"><span class="font-medium text-white">Correo:</span> contacto@unisec.aero</p>
            </div>

            <!-- Redes Sociales -->
            <div>
                <h3 class="text-gray-100 text-lg font-semibold mb-6">Conecta con nosotros</h3>
                <div class="flex space-x-4">
                    @foreach(['facebook', 'twitter', 'instagram'] as $social)
                        <a href="#" class="p-3 bg-tech-dark rounded-lg hover:bg-primary transition-colors">
                            <svg class="w-6 h-6 text-gray-300 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M..." />
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} UniSec Aerospace Consortium. Todos los derechos reservados.
        </div>
    </footer>

    @vite('resources/js/app.js')
    
    <!-- Script para el efecto de escritura dinámica -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        // Script para la barra de progreso
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('progress-bar').style.width = scrolled + "%";
        });
    </script>

</body>
</html>
