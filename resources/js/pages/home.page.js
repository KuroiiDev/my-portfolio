const roles = [
    'Full Stack Apps.',
    'Clean Interfaces.',
    'Laravel APIs.',
    'things that matter.',
];

let roleIndex = 0, charIndex = 0, deleting = false;
const el = document.getElementById('typedText');

function type() {
    const current = roles[roleIndex];
    el.textContent = deleting
        ? current.substring(0, charIndex--)
        : current.substring(0, charIndex++);

    let delay = deleting ? 40 : 80;

    if (!deleting && charIndex === current.length + 1) {
        delay = 1800;
        deleting = true;
    } else if (deleting && charIndex === 0) {
        deleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
        delay = 400;
    }

    setTimeout(type, delay);
}
type();

const canvas = document.getElementById('particleCanvas');
const ctx = canvas.getContext('2d');
let W, H, particles = [];

function resize() {
    W = canvas.width = canvas.offsetWidth;
    H = canvas.height = canvas.offsetHeight;
}

class Particle {
    constructor() { this.reset(); }
    reset() {
        this.x = Math.random() * W;
        this.y = Math.random() * H;
        this.r = Math.random() * 1.5 + 0.3;
        this.vx = (Math.random() - 0.5) * 0.3;
        this.vy = (Math.random() - 0.5) * 0.3;
        this.alpha = Math.random() * 0.4 + 0.05;
    }
    update() {
        this.x += this.vx;
        this.y += this.vy;
        if (this.x < 0 || this.x > W || this.y < 0 || this.y > H) this.reset();
    }
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(196, 181, 253, ${this.alpha})`;
        ctx.fill();
    }
}

function initParticles() {
    particles = Array.from({ length: 80 }, () => new Particle());
}

function animate() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => { p.update(); p.draw(); });

    for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 100) {
                ctx.beginPath();
                ctx.moveTo(particles[i].x, particles[i].y);
                ctx.lineTo(particles[j].x, particles[j].y);
                ctx.strokeStyle = `rgba(124, 58, 237, ${0.12 * (1 - dist / 100)})`;
                ctx.lineWidth = 6 * (1 - dist / 100);
                ctx.stroke();
            }
        }
    }
    requestAnimationFrame(animate);
}

resize();
initParticles();
animate();
window.addEventListener('resize', () => { resize(); initParticles(); });