let tips = gsap.timeline({
    scrollTrigger: {
        trigger: '.tips',
        start: 'top top',
        end: "+=500"
    }
});

tips.from('.tips__grid__card:nth-child(1)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    })
    .from('.tips__grid__card:nth-child(2)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7')
    .from('.tips__grid__card:nth-child(3)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    })
    .from('.tips__grid__card:nth-child(4)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7')
    .from('.tips__grid__card:nth-child(5)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    })
    .from('.tips__grid__card:nth-child(6)', {
        opacity: 0,
        duration: 1.5,
        y: 150,
        ease: 'Back.easeInOut'
    }, '-=.7');