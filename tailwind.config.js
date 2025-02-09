import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // 🌌 Primarios - Azul institucional (inspirado en trajes espaciales y naves)
                primary: {
                  DEFAULT: '#002D62',     // Azul Orbital (NASA Blue)
                  dark: '#001A3A',        // Azul Profundo Espacial
                  medium: '#004080',      // Azul Ionizante
                  light: '#0066CC',       // Azul Propulsión
                  soft: '#E6F0FF'         // Azul Aurora (fondos claros)
                },
                
                // 🚀 Secundarios - Naranjas de ingeniería (inspirados en cohetes)
                secondary: {
                  DEFAULT: '#FF5800',     // Naranja Cohete
                  dark: '#CC4500',        // Naranja Combustión
                  medium: '#FF8C00',      // Naranja Ignición
                  light: '#FFB366',       // Naranja Atmósfera
                  soft: '#FFF0E6'         // Naranja Amanecer (fondos claros)
                },
                
                // 🌠 Colores técnicos y de alta visibilidad
                accent: {
                  DEFAULT: '#00B4D8',     // Cian Astronauta
                  dark: '#0096C7',        // Azul Traje Espacial
                  danger: '#FF443A',      // Rojo Alerta (Sistemas Críticos)
                  success: '#2ECC71',     // Verde Oxígeno
                  warning: '#FFD700'      // Oro Estelar (Advertencias)
                },
                
                // 🛰️ Escala de Grises Tecnológicos
                tech: {
                  DEFAULT: '#4A4E5B',     // Gris Satélite
                  dark: '#2B2D35',        // Gris Cápsula
                  medium: '#6C7180',      // Gris Panel de Control
                  light: '#D1D5DB',       // Gris Antena
                  soft: '#F8F9FC'         // Gris Nube Lunar (fondos)
                },
                
                // 🌑 Fondos Espaciales Profundos
                cosmic: {
                  DEFAULT: '#0A0F1D',     // Negro Cosmos
                  dark: '#060912',        // Negro Agujero de Gusano
                  nebula: '#1A1F34',      // Nebulosa Galáctica
                  gradient: 'linear-gradient(155deg, #0A0F1D 0%, #1A1F34 100%)'
                }
              },
            backgroundColor: theme => ({
                ...theme('colors'),
                'gradient-primary': 'linear-gradient(135deg, #0047AB 0%, #002D6D 100%)',
                'gradient-secondary': 'linear-gradient(135deg, #FF6B00 0%, #CC5500 100%)',
            }),
            textColor: {
                'primary': '#F4F8FF',      // Blanco para legibilidad
                'secondary': '#C4C9E2',    // Gris claro para descripciones
                'accent': '#00E0FF',       // Azul eléctrico para resaltar
                'danger': '#FF4C4C',       // Rojo para alertas
            },
            borderColor: theme => ({
                ...theme('colors'),
                'primary': '#0047AB',
                'secondary': '#FF6B00',
                'gray': '#A1A6B4',
            }),
            animation: {
                'pulse-thrust': 'pulse-thrust 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'nebula-flow': 'nebula-flow 4s alternate infinite',
                'hover-glow': 'hover-glow 3s ease-in-out infinite',
            },
            keyframes: {
                'pulse-thrust': {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0.5' }
                },
                'nebula-flow': {
                    'from': { 'background-position': '0% 50%' },
                    'to': { 'background-position': '100% 50%' }
                },
                'hover-glow': {
                    '0%, 100%': { textShadow: '0 0 10px rgba(69, 161, 255, 0.8)' },
                    '50%': { textShadow: '0 0 20px rgba(69, 161, 255, 1)' }
                }
            },
            backdropBlur: {
                'cosmic': '15px'
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        function({ addUtilities }) {
            addUtilities({
                '.aero-glow': {
                    'box-shadow': '0 0 15px rgba(69, 161, 255, 0.4)'
                },
                '.space-gradient': {
                    'background-image': 'linear-gradient(45deg, #0047AB 0%, #002D6D 50%, #0A1128 100%)'
                },
                '.ion-thrust': {
                    'background-image': 'linear-gradient(90deg, #00E0FF 0%, #0047AB 100%)'
                }
            })
        }
    ],
};
