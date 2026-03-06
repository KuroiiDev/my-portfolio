<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Portfolio')</title>

    @vite(['resources/css/app.css', 'resources/css/layout.page.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body>

    {{-- Ambient glow blobs --}}
    <div class="ambient-glow w-[600px] h-[600px] -top-48 -left-24"
         style="background: radial-gradient(circle, rgba(124,58,237,0.12) 0%, transparent 70%)"></div>
    <div class="ambient-glow w-[350px] h-[350px] bottom-[10%] -right-16"
         style="background: radial-gradient(circle, rgba(196,181,253,0.06) 0%, transparent 70%)"></div>

    {{-- Navbar --}}
    <nav class="navbar" id="navbar">

        {{-- Logo --}}
        <a href="#" class="nav-logo">
            &lt;/&gt;<span>.</span>
        </a>

        {{-- Center links --}}
        <div class="nav-center">
            <a href="#"
               class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="#"
               class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
            <a href="#"
               class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                Projects
            </a>
        </div>

        {{-- Contact CTA --}}
        <a href="#"
           class="nav-link nav-cta nav-cta-desktop {{ request()->routeIs('contact') ? 'active' : '' }}">
            Contact
        </a>

        {{-- Mobile toggle --}}
        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>

    {{-- Mobile nav --}}
    <div class="mobile-nav" id="mobileNav">
        <a href="#"    class="{{ request()->routeIs('home')     ? 'active' : '' }}">Home</a>
        <a href="#"   class="{{ request()->routeIs('about')    ? 'active' : '' }}">About</a>
        <a href="#" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="#" class="{{ request()->routeIs('contact')  ? 'active' : '' }}">Contact</a>
    </div>

    {{-- Main --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer container">
        <p class="footer-left">
            Crafted with <span>♥</span> by <span>YourName</span> &mdash; {{ date('Y') }}
        </p>
        <div class="footer-links">
            <a href="https://github.com/" target="_blank">GitHub</a>
            <a href="https://linkedin.com/" target="_blank">LinkedIn</a>
            <a href="#">Resume</a>
        </div>
    </footer>

    <script>
        const navbar    = document.getElementById('navbar');
        const toggle    = document.getElementById('navToggle');
        const mobileNav = document.getElementById('mobileNav');

        // Floating pill on scroll
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 40);
        });

        // Mobile menu
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
    </script>

    @stack('scripts')
</body>
</html>