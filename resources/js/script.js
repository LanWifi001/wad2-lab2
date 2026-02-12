const btn = document.querySelector('.more');
const containerHidden = document.querySelector('.container-hidden');
const img = document.querySelector('header img');
const heroDesc = document.querySelector('.container');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, {
    threshold: 0.1
})

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

const observer1 = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show1');
        }
    });
}, {
    threshold: 1
})

document.querySelectorAll('.menu').forEach(el => observer1.observe(el));

btn.addEventListener('click', () => {
    containerHidden.classList.toggle('show-hidden');
    img.classList.toggle('show');
});

btn.addEventListener('click', () => {
    btn.classList.toggle('btn-rotate');
});

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active2');
        }
    });
}, {
    threshold: 0.1
})

document.querySelectorAll('.reveal2').forEach(el => observer2.observe(el));