let ctaPages = gsap.timeline({
    scrollTrigger: {
        trigger: '.cta__pages',
        start: 'center bottom'
    }
});

gsap.from('.pages__header', {
    opacity: 0,
    duration: 1.5,
    y: -50,
    ease: 'Elastic.easeInOut'
});

ctaPages.from('.cta__row', {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});