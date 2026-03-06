const navbar    = document.getElementById('navbar');
        const toggle    = document.getElementById('navToggle');
        const mobileNav = document.getElementById('mobileNav');

        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 40);
        });

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