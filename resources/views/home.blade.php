@extends('components.layout')

@section('title', 'Home')

@push('prefix')
    @vite(['resources/css/pages/home.page.css', 'resources/js/pages/home.page.js'])
@endpush

@section('content')

    <canvas class="hero-canvas" id="particleCanvas"></canvas>

    <section class="hero">
        <div class="container hero-content">

            <div class="hero-left">
                <div class="fade-up">
                    <span class="hero-eyebrow">Grinding Computer Engineer</span>
                </div>

                <h1 class="hero-name fade-up">
                    Hi, I'm<br>
                    <span class="highlight">Sam</span>
                </h1>

                <p class="hero-role fade-up">
                    I build &nbsp;<span class="typed-text" id="typedText"></span><span class="typed-cursor"></span>
                </p>

                <p class="hero-desc fade-up">
                    A passionate developer crafting clean, performant web experiences.
                    Specialized in Backend logics.
                </p>

                <div class="hero-actions fade-up">
                    <a href="#projects" class="btn-primary">
                        View Projects
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#about" class="btn-secondary">About Me</a>
                </div>

                <div class="hero-socials fade-up">
                    <a href="https://github.com/KuroiiDev" target="_blank">GitHub</a>
                    <a href="https://www.linkedin.com/in/maitsam-kadzim-12ba50301/" target="_blank">LinkedIn</a>
                </div>
            </div>

            <div class="hero-right fade-up">
                <div class="terminal-card">

                    <div class="terminal-bar">
                        <div class="terminal-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <span class="terminal-title">~/portfolio/KuroiiDev.sh</span>
                    </div>

                    <div class="terminal-body">
                        <div class="terminal-line">
                            <span class="t-prompt">❯</span>
                            <span class="t-cmd"> cat logo.txt</span>
                        </div>

                        {{-- Logo ASCII art --}}
                        <pre class="ascii-art">
                       ·<span class="t-muted">++·</span>      <span class="t-muted">:</span><span class="t-soft">=X=</span><span class="t-muted">·</span>                
                        <span class="t-muted">;</span><span class="t-lilac">@@</span><span class="t-soft">x</span>    <span class="t-muted">;</span><span class="t-lilac">@█#</span><span class="t-muted">:</span>                 
                       <span class="t-muted">;</span><span class="t-lilac">#@</span><span class="t-soft">x</span><span class="t-muted">:</span>     ·<span class="t-soft">x</span><span class="t-lilac">#@</span><span class="t-soft">=</span>                
                  <span class="t-muted">::</span>·<span class="t-muted">:</span><span class="t-soft">X</span><span class="t-lilac">#</span><span class="t-soft">x</span>·         ·<span class="t-soft">x</span><span class="t-lilac">@#</span><span class="t-soft">=</span>·             
                  <span class="t-muted">:</span><span class="t-lilac">#@@@</span><span class="t-soft">x</span><span class="t-muted">=</span><span class="t-soft">=xxXXXX$$$$$</span><span class="t-lilac">#██@</span><span class="t-soft">$</span><span class="t-muted">;</span>           
                 <span class="t-muted">+</span><span class="t-soft">$</span><span class="t-lilac">&@██&</span><span class="t-soft">xx</span><span class="t-muted">=+;+</span><span class="t-lilac">#</span><span class="t-soft">$</span><span class="t-muted">:</span>··· <span class="t-soft">x</span><span class="t-lilac">███#&&</span><span class="t-soft">x</span><span class="t-muted">:</span>        
              <span class="t-muted">;</span><span class="t-soft">x$X</span><span class="t-muted">;</span> <span class="t-soft">x</span><span class="t-lilac">██</span><span class="t-muted">+</span>     <span class="t-muted">+</span><span class="t-lilac">#</span><span class="t-soft">X</span><span class="t-muted">;;;</span><span class="t-soft">Xx</span><span class="t-muted">=</span><span class="t-lilac">██@</span>· <span class="t-muted">:</span><span class="t-soft">=$$=</span><span class="t-muted">:</span>     
          ·<span class="t-muted">;</span><span class="t-soft">=Xx</span><span class="t-muted">;</span>    <span class="t-muted">;</span><span class="t-lilac">██</span><span class="t-muted">+</span>   <span class="t-muted">:</span><span class="t-soft">Xx</span>·<span class="t-muted">·</span>· <span class="t-muted">+</span><span class="t-lilac">@</span><span class="t-muted">++</span><span class="t-lilac">██</span><span class="t-soft">$</span>     ·<span class="t-muted">;</span><span class="t-soft">xxx</span><span class="t-muted">+·</span> 
          <span class="t-muted">;;:</span>       ·<span class="t-lilac">@█</span><span class="t-muted">+</span> <span class="t-muted">:==</span>·    <span class="t-soft">x</span><span class="t-lilac">&</span><span class="t-muted">:</span> <span class="t-muted">;</span><span class="t-lilac">██</span><span class="t-muted">+</span>         ·<span class="t-muted">::</span> 
                     <span class="t-lilac">#█</span><span class="t-muted">+</span> ·     <span class="t-muted">+</span><span class="t-soft">$=</span>   <span class="t-muted">+</span><span class="t-lilac">█@</span>·             
                     <span class="t-lilac">#█</span><span class="t-soft">=</span>     <span class="t-muted">;</span><span class="t-soft">x</span><span class="t-muted">=</span>     <span class="t-soft">$</span><span class="t-lilac">█@</span><span class="t-muted">:</span>             
                     <span class="t-lilac">#█</span><span class="t-soft">$</span><span class="t-muted">;;+</span><span class="t-soft">X</span><span class="t-lilac">&</span><span class="t-soft">$x=xxXXX</span><span class="t-lilac">███</span><span class="t-soft">X</span><span class="t-muted">:</span>            
                     <span class="t-lilac">#█#</span><span class="t-soft">$$$XXXXxxxxxxxxxX</span><span class="t-muted">;</span>            
                     <span class="t-soft">X</span><span class="t-lilac">@</span><span class="t-soft">X</span>                              
                      <span class="t-muted">·</span>                               
                    </pre>
                        {{-- End of ASCII art --}}

                        <div class="terminal-line mt-2">
                            <span class="t-prompt">❯</span>
                            <span class="t-cmd"> sudo whoami</span>
                        </div>
                        <div class="terminal-output">
                            <span class="t-lilac">Sam [KuroiiDev] </span>
                            <span class="t-muted"> — Full Stack Developer</span>
                        </div>

                        <div class="terminal-line mt-2">
                            <span class="t-prompt">❯</span>
                            <span class="t-cmd"> skills --top</span>
                        </div>
                        <div class="terminal-output">
                            <span class="t-soft">Websites</span><span class="t-muted">, </span>
                            <span class="t-soft">Mobile Apps</span><span class="t-muted">, </span>
                            <span class="t-soft">APIs</span>
                        </div>

                        <div class="terminal-line mt-2">
                            <span class="t-prompt">❯</span>
                            <span class="t-cmd"> mylife <span class="t-muted">--status</span></span>
                        </div>
                        <div class="terminal-output">
                            <span class="t-green">● </span>
                            <span class="t-muted">Engaging in College</span>
                        </div>

                        <div class="terminal-line mt-2">
                            <span class="t-prompt">❯</span>
                            <span class="typed-cursor ml-1"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <p class="section-label">Selected Work</p>
            <div class="flex items-end justify-between flex-wrap gap-4">
                <h2 class="section-title">Featured <span>Projects</span></h2>
                <a href="#projects" class="btn-secondary" style="margin-bottom:1rem">
                    All Projects
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="projects-grid">
                @forelse($featuredProjects as $project)
                <a href="{{ route('projects') }}" class="project-card">
                    <div class="project-thumb">
                        @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" />
                        @else
                        <div class="project-thumb-placeholder">⬡</div>
                        @endif
                    </div>
                    <div class="project-body">
                        <h3 class="project-title">{{ $project->title }}</h3>
                        <p class="project-desc">{{ Str::limit($project->description, 100) }}</p>
                        <div class="project-tags">
                            @foreach($project->techstacks->take(4) as $tech)
                            <span class="tag">{{ $tech->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
                @empty
                <p style="color:var(--text-muted);font-size:0.875rem;">No featured projects yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section" style="padding-top:0">
        <div class="container">
            <p class="section-label">Tech Stack</p>
            <h2 class="section-title">Tools I <span>Work With</span></h2>

            <div class="skills-row">
                {{-- @foreach($skills as $skill)
                <span class="skill-pill">
                    @if($skill->icon)
                    <img src="{{ asset('storage/' . $skill->icon) }}" width="14" height="14" alt="" />
                    @endif
                    {{ $skill->name }}
                </span>
                @endforeach --}}

                {{-- Dummy data for now, replace with dynamic skills from DB later --}}
                @php
                    $skills = collect([
                        (object) ['name' => 'Laravel', 'icon' => null],
                        (object) ['name' => 'Vue.js', 'icon' => null],
                        (object) ['name' => 'React', 'icon' => null],
                        (object) ['name' => 'Node.js', 'icon' => null],
                        (object) ['name' => 'MySQL', 'icon' => null],
                        (object) ['name' => 'MongoDB', 'icon' => null],
                        (object) ['name' => 'Tailwind CSS', 'icon' => null],
                        (object) ['name' => 'Docker', 'icon' => null],
                    ]);
                @endphp
                @foreach($skills as $skill)
                    <span class="skill-pill">
                        @if($skill->icon)
                            <img src="{{ asset('storage/' . $skill->icon) }}" width="14" height="14" alt="" />
                        @endif
                        {{ $skill->name }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

@endsection