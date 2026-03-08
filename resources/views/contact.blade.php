{{-- resources/views/pages/contact.blade.php --}}

@extends('components.layout')

@section('title', 'Contact')

@push('prefix')
    @vite('resources/css/pages/contact.page.css')
@endpush

@section('content')

<section class="contact-section">
    <div class="container">

        {{-- Header --}}
        <div class="contact-header">
            <p class="section-label">Get In Touch</p>
            <h1 class="section-title">Contact <span>Me</span></h1>
            <p class="contact-subtitle">
                Have a project in mind or just want to say hi? My inbox is always open.
            </p>
        </div>

        <div class="contact-grid">

            {{-- Left: Form --}}
            <div class="contact-form-wrapper">
                <div class="terminal-card">

                    {{-- Terminal bar --}}
                    <div class="terminal-bar">
                        <div class="terminal-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <span class="terminal-title">~/contact/send-message.sh</span>
                        <div style="width:52px"></div>
                    </div>

                    {{-- Form --}}
                    <div class="terminal-body">
                        <div class="terminal-line mb-4">
                            <span class="t-prompt">❯</span>
                            <span class="t-cmd"> compose --message</span>
                        </div>

                        <form class="contact-form" id="contactForm">
                            @csrf

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span class="t-prompt">$</span> name
                                    </label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-input"
                                        placeholder="Your name"
                                        required
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <span class="t-prompt">$</span> email
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-input"
                                        placeholder="your@email.com"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <span class="t-prompt">$</span> subject
                                </label>
                                <input
                                    type="text"
                                    name="subject"
                                    class="form-input"
                                    placeholder="What's this about?"
                                />
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <span class="t-prompt">$</span> message
                                </label>
                                <textarea
                                    name="message"
                                    class="form-input form-textarea"
                                    placeholder="Your message here..."
                                    rows="5"
                                    required
                                ></textarea>
                            </div>

                            <button type="submit" class="btn-submit" id="submitBtn">
                                <span id="submitText">Send Message</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z"/>
                                </svg>
                            </button>

                        </form>

                        {{-- Success state (hidden by default) --}}
                        <div class="form-success" id="formSuccess" style="display:none">
                            <div class="terminal-line">
                                <span class="t-prompt">❯</span>
                                <span class="t-cmd"> status</span>
                            </div>
                            <div class="terminal-output" style="margin-top: 0.5rem">
                                <span class="t-green">✓ </span>
                                <span class="t-lilac">Message sent successfully!</span>
                            </div>
                            <div class="terminal-output">
                                <span class="t-muted">I'll get back to you as soon as possible.</span>
                            </div>
                            <button class="btn-reset" onclick="resetForm()">
                                Send another →
                            </button>
                        </div>

                        {{-- Blinking cursor --}}
                        <div class="terminal-line mt-3">
                            <span class="t-prompt">❯</span>
                            <span class="typed-cursor ml-1"></span>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Right: Info --}}
            <div class="contact-info">

                <div class="contact-info-block">
                    <div class="terminal-line mb-3">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> contact --info</span>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-info-icon">✉</span>
                        <div>
                            <p class="contact-info-label">Email</p>
                            <a href="mailto:your@email.com" class="contact-info-value">
                                maitsamkadzim26@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-info-icon">⌥</span>
                        <div>
                            <p class="contact-info-label">GitHub</p>
                            <a href="https://github.com/KuroiiDev" target="_blank" class="contact-info-value">
                                github.com/KuroiiDev
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <span class="contact-info-icon">◈</span>
                        <div>
                            <p class="contact-info-label">LinkedIn</p>
                            <a href="https://linkedin.com/in/maitsam-kadzim-12ba50301" target="_blank" class="contact-info-value">
                                Maitsam Kadzim
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-info-block">
                    <div class="terminal-line mb-3">
                        <span class="t-prompt">❯</span>
                        <span class="t-cmd"> availability</span>
                    </div>
                    <div class="terminal-output">
                        <span class="t-green">● </span>
                        <span class="t-muted">Open to internship & colaboration</span>
                    </div>
                    <div class="terminal-output" style="margin-top: 0.4rem">
                        <span class="t-muted">// Response time: ~24 hours</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Cosmetic form — no actual submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const btn  = document.getElementById('submitBtn');
        const text = document.getElementById('submitText');

        // Loading state
        btn.disabled   = true;
        text.textContent = 'Sending...';

        // Simulate send delay
        setTimeout(() => {
            document.getElementById('contactForm').style.display  = 'none';
            document.getElementById('formSuccess').style.display  = 'block';
        }, 1200);
    });

    function resetForm() {
        document.getElementById('contactForm').reset();
        document.getElementById('contactForm').style.display  = 'block';
        document.getElementById('formSuccess').style.display  = 'none';

        const btn  = document.getElementById('submitBtn');
        const text = document.getElementById('submitText');
        btn.disabled     = false;
        text.textContent = 'Send Message';
    }
</script>
@endpush