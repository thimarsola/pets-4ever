let hero = gsap.timeline({
    scrollTrigger: {
        trigger: '.hero',
    }
});

let about = gsap.timeline({
    scrollTrigger: {
        trigger: '.about',
        start: 'center bottom'
    }
});

let services = gsap.timeline({
    scrollTrigger: {
        trigger: '.services',
        start: 'left bottom'
    }
});

let taxi = gsap.timeline({
    scrollTrigger: {
        trigger: '.taxi',
        start: 'left bottom'
    }
});

let reasons = gsap.timeline({
    scrollTrigger: {
        trigger: '.reasons',
        start: 'center bottom'
    }
});

let cta = gsap.timeline({
    scrollTrigger: {
        trigger: '.cta',
        start: 'center bottom'
    }
});

let testimonial = gsap.timeline({
    scrollTrigger: {
        trigger: '.testimonial',
        start: 'center bottom'
    }
});

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
})

hero.from('.hero__content', {
    opacity: 0,
    duration: 1.5,
    y: 300,
    ease: 'Back.easeInOut'
});

gsap.from('.whatsapp', {
    opacity: 0,
    duration: 1.5,
    delay: 1.5,
    x: 0,
    ease: 'Back.easeInOut'
});

about.from('.about__row__image', {
        opacity: 0,
        duration: 1.5,
        x: -100,
        ease: 'Power4.easeInOut'
    })
    .from('.about__row__content', {
        opacity: 0,
        duration: 1.5,
        y: 100,
        ease: 'Power3.easeInOut'
    }, "-=1");

services.from('.services__header', {
        opacity: 0,
        duration: 1.5,
        x: -100,
        ease: 'Expo.easeInOut'
    })
    .from(['.services__grid__card:nth-child(1)', '.services__grid__card:nth-child(2)'], {
        opacity: 0,
        duration: 1.25,
        y: 100,
        ease: 'Circ.easeInOut'
    }, '-=1')
    .from(['.services__grid__card:nth-child(3)', '.services__grid__card:nth-child(4)'], {
        opacity: 0,
        duration: 1.25,
        y: 100,
        ease: 'Circ.easeInOut'
    });

taxi.from('.taxi__row__content', {
        opacity: 0,
        duration: 1.5,
        x: -150,
        ease: 'Back.easeInOut'
    })
    .from('.taxi__row__image', {
        opacity: 0,
        duration: 1.25,
        y: 150,
        ease: 'Bouce.easeInOut'
    });

reasons.from('.reasons__header', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Elastic.easeInOut'
    })
    .from('.reasons__grid__card:nth-child(1)', {
        opacity: 0,
        duration: 1.25,
        x: 50,
        ease: 'Bouce.easeInOut'
    })
    .from('.reasons__grid__card:nth-child(2)', {
        opacity: 0,
        duration: 1.25,
        x: 50,
        ease: 'Bouce.easeInOut'
    })
    .from('.reasons__grid__card:nth-child(4)', {
        opacity: 0,
        duration: 1.25,
        x: -50,
        ease: 'Bouce.easeInOut'
    })
    .from('.reasons__grid__card:nth-child(5)', {
        opacity: 0,
        duration: 1.25,
        x: -50,
        ease: 'Bouce.easeInOut'
    });

cta.from('.cta__row', {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

testimonial.from('.testimonial', {
    opacity: 0,
    duration: 1.5,
    y: 100,
    ease: 'Power0.easeInOut',
});

footer.from('.footer', {
    opacity: 0,
    duration: 1.5,
    y: 100,
    ease: 'SlowMo.easeInOut',
});