document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const btn = document.getElementById('submitBtn');
    const text = document.getElementById('submitText');

    btn.disabled = true;
    text.textContent = 'Sending...';

    setTimeout(() => {
        document.getElementById('contactForm').style.display = 'none';
        document.getElementById('formSuccess').style.display = 'block';
    }, 1200);
});

document.getElementById('btnReset').addEventListener('click', function () {
    document.getElementById('contactForm').reset();
    document.getElementById('contactForm').style.display = 'block';
    document.getElementById('formSuccess').style.display = 'none';

    const btn = document.getElementById('submitBtn');
    const text = document.getElementById('submitText');
    btn.disabled = false;
    text.textContent = 'Send Message';
});