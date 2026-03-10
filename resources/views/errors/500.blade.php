@extends('components.layout')

@section('title', $title ?? 'Server Error')

@push('prefix')
    @vite(entrypoints: ['resources/css/pages/developing.page.css', 'resources/js/components/particle.effect.js', 'resources/css/components/particle.effect.css'])
@endpush

@section('content')

    <canvas class="hero-canvas" id="particleCanvas"></canvas>

    <section class="uc-section">
        <div class="uc-wrapper">

            <div class="uc-card">

                {{-- Terminal bar --}}
                <div class="terminal-bar">
                    <div class="terminal-dots">
                        <span class="dot dot-red"></span>
                        <span class="dot dot-yellow"></span>
                        <span class="dot dot-green"></span>
                    </div>
                    <span class="terminal-title">~/system/500-server-error.sh</span>
                    <div style="width:52px"></div>
                </div>

                {{-- Terminal body --}}
                <div class="uc-body">

                    <div class="uc-line">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> status --check</span>
                    </div>

                    <div class="uc-output mt-3">
                        <p>
                            <span class="t-warn">⚠ </span>
                            <span class="t-lilac">{{ $title ?? 'Sum ting Wong' }}</span>
                            <span class="t-muted"> definitely.</span>
                        </p>
                        <p class="mt-1">
                            <span class="t-muted">// What the heck happened??.</span>
                        </p>
                    </div>

                    <div class="uc-line mt-4">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> ping developer</span>
                    </div>

                    <div class="uc-output mt-3">
                        <p>
                            <span class="t-green">● </span>
                            <span class="t-soft">KuroiiDev</span>
                            <span class="t-muted"> is tryna fix it</span>
                            <span class="t-dots"></span>
                        </p>
                        <p class="mt-1">
                            <span class="t-muted">// make sure you.. i dunno change page?</span>
                        </p>
                    </div>

                    {{-- Progress bar --}}
                    <div class="uc-line mt-4">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> progress --watch</span>
                    </div>

                    <div class="uc-output mt-3">
                        <div class="uc-progress-label">
                            <span class="t-muted">fixing</span>
                            <span class="t-lilac" id="progressPercent">0%</span>
                        </div>
                        <div class="uc-progress-track">
                            <div class="uc-progress-bar" id="progressBar"></div>
                        </div>
                    </div>

                    {{-- Back link --}}
                    <div class="uc-line mt-4">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> cd ..</span>
                    </div>

                    <div class="uc-output mt-2">
                        <a href="{{ url('/') }}" class="uc-back-link">
                            ← back to home
                        </a>
                    </div>

                    {{-- Cursor --}}
                    <div class="uc-line mt-4">
                        <span class="t-prompt">❯</span>
                        <span class="typed-cursor ml-1"></span>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Animate progress bar loop
        let progress = 0;
        let direction = 1;
        const bar = document.getElementById('progressBar');
        const percent = document.getElementById('progressPercent');

        function animateProgress() {
            progress += direction * 0.4;
            if (progress >= 72) direction = -1;
            if (progress <= 0) direction = 1;

            bar.style.width = progress + '%';
            percent.textContent = Math.round(progress) + '%';
            requestAnimationFrame(animateProgress);
        }

        animateProgress();
    </script>
@endpush