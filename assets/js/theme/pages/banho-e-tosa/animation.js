let bath = gsap.timeline({
    scrollTrigger: {
        trigger: '.bath',
        start: 'center bottom'
    }
});

let gallery = gsap.timeline({
    scrollTrigger: {
        trigger: '.gallery',
        start: 'center bottom'
    }
});

let taxi = gsap.timeline({
    scrollTrigger: {
        trigger: '.taxi',
        start: 'center bottom'
    }
});

bath.from('.bath__center__row__body', {
        opacity: 0,
        duration: 1.5,
        x: -150,
        ease: 'Back.easeInOut'
    })
    .from('.bath__center__row__image', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7')
    .from('.bath__bath__row__image', {
        opacity: 0,
        duration: 1.5,
        x: -150,
        ease: 'Back.easeInOut'
    })
    .from('.bath__bath__row__body', {
        opacity: 0,
        duration: 1.5,
        y: -150,
        ease: 'Back.easeInOut'
    }, '-=.7');

gallery.from('.gallery', {
    opacity: 0,
    duration: 1.5,
    ease: 'Power1.easeInOut'
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