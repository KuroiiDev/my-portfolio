let scrollHandler;

document.addEventListener('turbo:load', () => {
    const navbar    = document.getElementById('navbar');
    const toggle    = document.getElementById('navToggle');
    const mobileNav = document.getElementById('mobileNav');

    // Remove old scroll listener dulu
    if (scrollHandler) window.removeEventListener('scroll', scrollHandler);

    scrollHandler = () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    };

    window.addEventListener('scroll', scrollHandler);

    toggle.addEventListener('click', () => {
        toggle.classList.toggle('open');
        mobileNav.classList.toggle('open');
    });

    mobileNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            toggle.classList.remove('open');
            mobileNav.classList.remove('open');
        });
    });
});