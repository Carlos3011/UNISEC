import './bootstrap';
import Aos from 'aos';
import 'aos/dist/aos.css'

Aos.init({
    duration: 1000,  // Duración de la animación (en ms)
    delay: 200,  // Retraso antes de la animación
    once: false,  // Ejecutar solo una vez o en cada scroll
});

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;
    counters.forEach(counter => {
            const updateCount = () => {
                const target = parseInt(counter.dataset.count);
                const count = parseInt(counter.innerText);
                const increment = Math.ceil(target / speed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            }

            updateCount();
        });
});

 // Efecto parallax para elementos
document.addEventListener('mousemove', (e) => {
    const elements = document.querySelectorAll('.parallax-element');
    const sensitivity = 30;
    
    elements.forEach(element => {
        const x = (window.innerWidth - e.pageX * sensitivity) / 100;
        const y = (window.innerHeight - e.pageY * sensitivity) / 100;
        element.style.transform = `translate(${x}px, ${y}px)`;
    });
});

//Efecto estrellas
const canvas = document.getElementById('starsCanvas');
const ctx = canvas.getContext('2d');

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}

window.addEventListener('resize', resizeCanvas);
resizeCanvas();

let stars = Array.from({ length: 150 }, () => ({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    radius: Math.random() * 2 + 0.5,
    speedX: Math.random() * 0.3 - 0.15,  // Movimiento horizontal leve
    speedY: Math.random() * 0.6 + 0.2,  // Movimiento vertical más pronunciado
    opacity: Math.random() * 0.5 + 0.5,
    twinkleSpeed: Math.random() * 0.05 + 0.02  // Velocidad de parpadeo
}));

function animateStars() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    stars.forEach(star => {
        // Efecto de parpadeo
        star.opacity += star.twinkleSpeed;
        if (star.opacity >= 1 || star.opacity <= 0.3) {
            star.twinkleSpeed *= -1;
        }

        // Dibujar estrella con efecto glow
        ctx.beginPath();
        ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity})`;
        ctx.shadowBlur = 10;
        ctx.shadowColor = "white";
        ctx.fill();

        // Movimiento diagonal
        star.x += star.speedX;
        star.y += star.speedY;

        // Reposicionar estrella si sale de la pantalla
        if (star.y > canvas.height) star.y = 0;
        if (star.x > canvas.width) star.x = 0;
        if (star.x < 0) star.x = canvas.width;
    });

    requestAnimationFrame(animateStars);
}

animateStars();