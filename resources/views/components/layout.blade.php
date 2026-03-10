<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Portfolio')</title>

    @vite(['resources/css/app.css', 'resources/css/layout.page.css', 'resources/js/app.js', 'resources/js/layout.page.js'])
    @stack('prefix')
</head>
<!-- Loading modal -->
<div id="turbo-loading" style="
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(10, 8, 18, 0.7);
    backdrop-filter: blur(4px);
    z-index: 9999;
    align-items: center;
    justify-content: center;
">
    <div style="
        background: #13101f;
        border: 1px solid rgba(124, 58, 237, 0.3);
        border-radius: 0.875rem;
        padding: 1.5rem 2rem;
        font-family: 'DM Mono', monospace;
        font-size: 0.82rem;
        box-shadow: 0 0 40px rgba(124, 58, 237, 0.15);
        display: flex;
        align-items: center;
        gap: 0.75rem;
    ">
        <span style="color: #a78bfa;">❯</span>
        <span style="color: #f1eeff;">loading</span>
        <span id="turbo-dots" style="color: #6b6880;"></span>
        <span style="
            display: inline-block;
            width: 2px;
            height: 1em;
            background: #c4b5fd;
            animation: blink 1s step-end infinite;
            box-shadow: 0 0 8px rgba(196,181,253,0.8);
            vertical-align: middle;
        "></span>
    </div>
</div>

<body>

    <div class="ambient-glow w-[600px] h-[600px] -top-48 -left-24"
        style="background: radial-gradient(circle, rgba(124,58,237,0.12) 0%, transparent 70%)"></div>
    <div class="ambient-glow w-[350px] h-[350px] bottom-[10%] -right-16"
        style="background: radial-gradient(circle, rgba(196,181,253,0.06) 0%, transparent 70%)"></div>

    <nav class="navbar" id="navbar">

        <a href="#" class="nav-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="nav-logo-img">
        </a>

        <div class="nav-center">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                Projects
            </a>
        </div>

        <a href="{{ route('contact') }}"
            class="nav-link nav-cta nav-cta-desktop {{ request()->routeIs('contact') ? 'active' : '' }}">
            Contact
        </a>

        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>

    <div class="mobile-nav" id="mobileNav">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </div>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer container">
        <p class="footer-left">
            Crafted with <span>♥</span> by <span>KuroiiDev</span> &mdash; 2026
        </p>
        <div class="footer-links">
            <a href="https://github.com/KuroiiDev" target="_blank">GitHub</a>
            <a href="https://www.linkedin.com/in/maitsam-kadzim-12ba50301/" target="_blank">LinkedIn</a>
            <a href="{{ route('cv') }}" target="_blank">CV</a>
        </div>
    </footer>

</body>

</html>