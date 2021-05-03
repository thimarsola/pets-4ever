let hotel = gsap.timeline({
    scrollTrigger: {
        trigger: '.hotel',
        start: 'top top',
        end: "+=500"
    }
});

let gallery = gsap.timeline({
    scrollTrigger: {
        trigger: '.hotel__gallery',
        start: 'left bottom',
    }
});


hotel.from('.hotel__about__row__content', {
        opacity: 0,
        duration: 1.5,
        x: -150,
        ease: 'Back.easeInOut'
    })
    .from('.hotel__about__row__image', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7');

gallery.from('.hotel__gallery__content', {
    opacity: 0,
    duration: 1.5,
    x: 150,
    ease: 'Elastic.easeInOut'
});