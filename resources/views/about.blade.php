@extends('components.layout')

@section('title', 'About')

@push('prefix')
    @vite('resources/css/pages/about.page.css')
@endpush

@section('content')

    <section class="about-hero">
        <div class="container about-hero-content">

            <div class="about-bio">
                <p class="section-label">Who I Am ?</p>
                <h1 class="section-title">About <span>Me</span></h1>

                <p class="about-desc">
                    Hey! I'm Sam, a Computer Engineering student and full stack developer
                    based in Indonesia. I love building things for the web — from clean
                    backend APIs to pixel-perfect interfaces.
                </p>
                <p class="about-desc" style="margin-top: 1rem">
                    When I'm not coding, I'm probably exploring new tech, grinding side projects,
                    or figuring out how to make things faster and cleaner.
                </p>

                <div class="about-meta">
                    <div class="meta-item">
                        <span class="t-prompt">❯</span>
                        <span class="meta-label">Status</span>
                        <span class="meta-value"><span class="t-green">●</span> Engaging in College</span>
                    </div>
                    <div class="meta-item">
                        <span class="t-prompt">❯</span>
                        <span class="meta-label">Based in</span>
                        <span class="meta-value">Indonesia 🇮🇩</span>
                    </div>
                    <div class="meta-item">
                        <span class="t-prompt">❯</span>
                        <span class="meta-label">Focus</span>
                        <span class="meta-value">Backend & Full Stack</span>
                    </div>
                </div>

                <div class="about-actions">
                    <a href="{{ route('cv') }}" target="_blank" class="btn-primary">
                        Download CV
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3" />
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary">Contact Me</a>
                </div>
            </div>

            <div class="about-photo-wrapper">
                <div class="about-photo-frame">
                    <div class="photo-glow"></div>
                    <div class="photo-border-decoration"></div>
                    <img src="{{ asset('images/profile.png') }}" alt="Sam" class="about-photo" />
                    <div class="photo-corner photo-corner-tl"></div>
                    <div class="photo-corner photo-corner-br"></div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <p class="section-label">What I Use</p>
            <h2 class="section-title">Tech <span>Skills</span></h2>

            <div class="skills-categories">
                @foreach($skills as $category => $categorySkills)
                    <div class="skill-category">
                        <div class="skill-category-header">
                            <span class="t-prompt">❯</span>
                            <span class="skill-category-name">{{ $category }}</span>
                        </div>
                        <div class="skill-list">
                            @foreach($categorySkills as $skill)
                                <div class="skill-item">
                                    <div class="skill-item-top">
                                        <span class="skill-name">{{ $skill->name }}</span>
                                        @if($skill->level)
                                            <span class="skill-level">{{ $skill->level }}%</span>
                                        @endif
                                    </div>
                                    @if($skill->level)
                                        <div class="skill-bar">
                                            <div class="skill-bar-fill" style="width: {{ $skill->level }}%"></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <p class="section-label">Where I've Worked</p>
            <h2 class="section-title">Experience</h2>

            <div class="cards-list">
                @forelse($experiences as $exp)
                    <div class="info-card">
                        <div class="info-card-header">
                            <div>
                                <h3 class="info-card-title">{{ $exp->role }}</h3>
                                <p class="info-card-sub">{{ $exp->company }}</p>
                            </div>
                            <div class="info-card-right">
                                <span class="badge badge-type">{{ $exp->type }}</span>
                                <span class="info-card-date">
                                    {{ $exp->start_date->format('M Y') }} —
                                    {{ $exp->is_current ? 'Present' : $exp->end_date->format('M Y') }}
                                </span>
                            </div>
                        </div>

                        @if($exp->description)
                            <p class="info-card-desc">{{ $exp->description }}</p>
                        @endif

                        @if($exp->projects->count())
                            <div class="info-card-projects">
                                <span class="t-prompt" style="font-size:0.75rem">❯</span>
                                <span class="info-card-projects-label">Projects:</span>
                                @foreach($exp->projects as $project)
                                    <span class="tag">{{ $project->title }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @empty
                    <p class="empty-state">// no experience data yet</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <p class="section-label">Where I Studied</p>
            <h2 class="section-title">Education</h2>

            <div class="cards-list">
                @forelse($educations as $edu)
                    <div class="info-card">
                        <div class="info-card-header">
                            <div>
                                <h3 class="info-card-title">{{ $edu->school }}</h3>
                                <p class="info-card-sub">{{ $edu->major }}</p>
                            </div>
                            <div class="info-card-right">
                                <span class="badge badge-degree">{{ $edu->degree }}</span>
                                <span class="info-card-date">
                                    {{ $edu->start_year }} —
                                    {{ $edu->end_year ?? 'Present' }}
                                </span>
                            </div>
                        </div>
                        @if($edu->description)
                            <p class="info-card-desc">{{ $edu->description }}</p>
                        @endif
                    </div>
                @empty
                    <p class="empty-state">// no education data yet</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="about-section" style="padding-bottom: 6rem">
        <div class="container">
            <p class="section-label">What I've Earned</p>
            <h2 class="section-title">Certificates</h2>

            <div class="cert-grid">
                @forelse($certificates as $cert)
                    <div class="cert-card">
                        <div class="cert-icon">🏅</div>
                        <div class="cert-body">
                            <h4 class="cert-title">{{ $cert->title }}</h4>
                            <p class="cert-issuer">{{ $cert->issuer }}</p>
                            <div class="cert-footer">
                                <span class="cert-date">{{ $cert->issued_date->format('M Y') }}</span>
                                @if($cert->credential_url)
                                    <a href="{{ $cert->credential_url }}" target="_blank" class="cert-link">
                                        Verify ↗
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="empty-state">// no certificates yet</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection