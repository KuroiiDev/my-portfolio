@extends('components.layout')

@section('title', 'Projects')

@push('prefix')
    @vite(['resources/css/pages/project.page.css', 'resources/css/components/particle.effect.css', 'resources/js/components/particle.effect.js'])
@endpush

@section('content')

    <canvas class="hero-canvas" id="particleCanvas"></canvas>

    <x-project-modal />

    <section class="projects-section">
        <div class="container">

            <div class="projects-header">
                <p class="section-label">My Work</p>
                <h1 class="section-title">All <span>Projects</span></h1>
                <p class="projects-subtitle">
                    A collection of things I've built — from side projects to real-world apps.
                </p>
            </div>

            <div x-data="{
                                                        active: 'All',
                                                        projects: {{ Js::from($projects) }},
                                                        techstacks: {{ Js::from($techstacks) }},
                                                        get filtered() {
                                                            if (this.active === 'All') return this.projects;
                                                            return this.projects.filter(p =>
                                                                p.techstacks.some(t => t.name === this.active)
                                                            );
                                                        }
                                                    }">

                <div class="filter-row">
                    <button class="filter-pill" :class="{ 'active': active === 'All' }" @click="active = 'All'">All</button>

                    <template x-for="tech in techstacks" :key="tech.id">
                        <button class="filter-pill" :class="{ 'active': active === tech.name }" @click="active = tech.name"
                            x-text="tech.name"></button>
                    </template>
                </div>

                <div class="projects-grid">
                    <template x-for="project in filtered" :key="project.id">
                        <div class="project-card" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0" @click="openProjectModal({
                                                                    title:       project.title,
                                                                    description: project.description,
                                                                    image: project.image ? '{{ asset('images/projects/') }}'+ '/' + project.image : null,
                                                                    techstacks:  project.techstacks.map(t => t.name),
                                                                    github_url:  project.github_url,
                                                                    live_url:    project.live_url,
                                                                })">
                            <div class="project-thumb">
                                <template x-if="project.image">
                                    <img :src="'{{ asset('images/projects/') }}' + '/' + project.image"
                                        :alt="project.title" />
                                </template>
                                <template x-if="!project.image">
                                    <div class="project-thumb-placeholder">⬡</div>
                                </template>
                            </div>

                            <div class="project-body">
                                <h3 class="project-title" x-text="project.title"></h3>
                                <p class="project-desc" x-text="project.description.substring(0, 100) + '...'"></p>
                                <div class="project-tags">
                                    <template x-for="tech in project.techstacks.slice(0, 4)" :key="tech.id">
                                        <span class="tag" x-text="tech.name"></span>
                                    </template>
                                </div>

                                <div class="project-links-indicator">
                                    <template x-if="project.github_url">
                                        <span class="link-dot t-soft">⌥ GitHub</span>
                                    </template>
                                    <template x-if="project.live_url">
                                        <span class="link-dot t-lilac">⌥ Live</span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template x-if="filtered.length === 0">
                        <div class="projects-empty">
                            <span class="t-prompt">❯</span>
                            <span class="t-muted"> no projects found for <span class="t-lilac"
                                    x-text="active"></span></span>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>

@endsection