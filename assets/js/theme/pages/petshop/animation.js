let card = gsap.timeline({
    scrollTrigger: {
        trigger: '.petshop__content__card',
        start: 'center bottom'
    }
});

card.from('.petshop__content__card:nth-child(1)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Back.easeInOut'
    })
    .from('.petshop__content__card:nth-child(2)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Back.easeInOut'
    })
    .from('.petshop__content__card:nth-child(3)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Back.easeInOut'
    })
    .from('.petshop__content__card:nth-child(4)', {
        opacity: 0,
        duration: 1.25,
        y: 50,
        ease: 'Back.easeInOut'
    });