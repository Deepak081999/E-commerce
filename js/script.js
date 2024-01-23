const bar = document.getElementById('bar');
const clo = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    });
}

if (clo) {
    clo.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}



