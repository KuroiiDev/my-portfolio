import './bootstrap';
import '@hotwired/turbo';
document.addEventListener('turbo:visit', () => {
    const bar = document.getElementById('turbo-progress');
    bar.style.width = '70%';
    bar.style.opacity = '1';
});

document.addEventListener('turbo:load', () => {
    const bar = document.getElementById('turbo-progress');
    bar.style.width = '100%';
    setTimeout(() => {
        bar.style.opacity = '0';
        setTimeout(() => { bar.style.width = '0%'; }, 300);
    }, 200);
});
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
