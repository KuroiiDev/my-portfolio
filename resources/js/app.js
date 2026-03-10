import './bootstrap';
import '@hotwired/turbo';
const modal = document.getElementById('turbo-loading');
const dots = document.getElementById('turbo-dots');
let dotsInterval;

document.addEventListener('turbo:visit', () => {
    modal.style.display = 'flex';
    let count = 0;
    dotsInterval = setInterval(() => {
        count = (count + 1) % 4;
        dots.textContent = '.'.repeat(count);
    }, 300);
});

document.addEventListener('turbo:load', () => {
    clearInterval(dotsInterval);
    modal.style.display = 'none';
    dots.textContent = '';
});
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
