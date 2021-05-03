let expedient = gsap.timeline({
    scrollTrigger: {
        trigger: '.contact__expedient',
        start: 'left center',
        end: '+=100'
    }
});

let phones = gsap.timeline({
    scrollTrigger: {
        trigger: '.contact__phones',
        start: 'left bottom'
    }
});

let mail = gsap.timeline({
    scrollTrigger: {
        trigger: '.contact__mail',
        start: 'left bottom'
    }
});

let address = gsap.timeline({
    scrollTrigger: {
        trigger: '.contact__address',
        start: 'left bottom'
    }
});

let map = gsap.timeline({
    scrollTrigger: {
        trigger: '.map',
        start: 'left bottom'
    }
});

expedient.from(['.contact__expedient__header', '.contact__expedient__content'], {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

phones.from('.contact__phones', {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

mail.from('.contact__mail', {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

address.from('.contact__address', {
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

map.from('.map', {
    opacity: 0,
    duration: 1.5,
    ease: 'Back.easeInOut'
});