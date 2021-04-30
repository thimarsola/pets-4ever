let footer = gsap.timeline({
    scrollTrigger: {
        trigger: '.footer',
        start: 'left bottom'
    }
});

gsap.from('.header', {
    opacity: 0,
    duration: 1.5,
    delay: .5,
    y: -50,
    ease: 'Back.easeInOut'
});

gsap.from('.whatsapp', {
    opacity: 0,
    duration: 1.5,
    delay: 1.5,
    x: 0,
    ease: 'Back.easeInOut'
});

footer.from('.footer', {
    opacity: 0,
    duration: 1.5,
    y: 100,
    ease: 'SlowMo.easeInOut',
});