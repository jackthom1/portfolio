import barba from '@barba/core';

let animationEnter = (container) =>{
    // return gsap.from(container, {opacity: 0, duration: 1, clearProps: 'all'})
    const tl = gsap.timeline({defaults: {ease: 'power1.out'}});
            tl.to(".loadingCover", {x: "100%", duration: 1.5});
            tl.from(container, {opacity: 0, duration: 1}, "-=1")
            tl.set(".loadingCover", {x: "-100%"})
    return tl
}

let animationChange = (container) =>{
    const tl = gsap.timeline({defaults: {ease: 'power1.out'}});
            tl.to(".loadingCover", {x: "100%", duration: .8});
            tl.from(container, {opacity: 0, duration: .8}, "-=.8")
            tl.set(".loadingCover", {x: "-100%"})
    return tl
}
let animationLeave = (container, done) =>{
    const tl = gsap.timeline({defaults: {ease: 'power1.out'}});
            tl.to(".loadingCover", {x: "0%", duration: .8})
            tl.to(container, {opacity: 0, duration: .5 ,clearProps: 'all', onComplete: () => done()}, "-=.5");
            tl.set(window, {scrollTo: 0}, "-=.35")
    return tl
}


barba.init({
    transitions: [
        {
            once({next}){
                animationEnter(next.container);
            },
            leave({current}){
                const done = this.async()
                animationLeave(current.container, done)
            },
            enter({next}){
                animationChange(next.container);
            }
        }
    ],
    
});





let items = document.getElementsByClassName("hero__slider")
let totalItems = items.length
let slide = 0

items[totalItems - 1].classList.add("hidden");
items[0].classList.add("shown")
items[1].classList.add("hidden")

function moveLeft(){
    gsap.fromTo(items[slide], {x: "0%"}, {x: "-100%", duration: .5})
    setTimeout(function(){
        items[slide].classList.add("hidden")
        items[slide].classList.remove("shown")
        if (slide === 0){
            slide = 2
        }else{
            slide--
        }
        items[slide].classList.remove("hidden");
        items[slide].classList.add("shown");
        gsap.fromTo(items[slide], {x: "100%"}, {x: "0%", duration: .5})
    }, 400)
    
    
}
function moveRight(){
    gsap.fromTo(items[slide], {x: "0%"}, {x: "100%", duration: .5})
    setTimeout(function(){
        items[slide].classList.add("hidden")
        items[slide].classList.remove("shown")
        slide++
        if (slide === (totalItems)){
            slide = 0
        }
        items[slide].classList.remove("hidden"); 
        items[slide].classList.add("shown");
        gsap.fromTo(items[slide], {x: "-100%"}, {x: "0%", duration: .5})

    }, 400)
}