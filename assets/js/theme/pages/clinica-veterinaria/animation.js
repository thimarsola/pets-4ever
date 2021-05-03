let clinic = gsap.timeline({
    scrollTrigger: {
        trigger: '.clinic',
        start: 'top top',
        end: "+=500"
    }
});

let specialties = gsap.timeline({
    scrollTrigger: {
        trigger: '.clinic__specialties',
        start: 'left bottom',
    }
});


clinic.from('.clinic__about__row__body', {
        opacity: 0,
        duration: 1.5,
        x: -150,
        ease: 'Back.easeInOut'
    })
    .from('.clinic__about__row__image', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7');

specialties.from('.clinic__specialties__grid__card:nth-child(1)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(2)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(3)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(4)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(5)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(6)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(7)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(8)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(9)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    })
    .from('.clinic__specialties__grid__card:nth-child(10)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Elastic.easeInOut'
    });