const roles = [
    'Full Stack Apps.',
    'Clean Interfaces.',
    'Laravel APIs.',
    'things that matter.',
];

let roleIndex = 0, charIndex = 0, deleting = false;
const el = document.getElementById('typedText');

function type() {
    const current = roles[roleIndex];
    el.textContent = deleting
        ? current.substring(0, charIndex--)
        : current.substring(0, charIndex++);

    let delay = deleting ? 40 : 80;

    if (!deleting && charIndex === current.length + 1) {
        delay = 1800;
        deleting = true;
    } else if (deleting && charIndex === 0) {
        deleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
        delay = 400;
    }

    setTimeout(type, delay);
}
type();
