
const mediaWidth = window.matchMedia("(min-width: 1440px)");
let pageTitle = document.getElementsByTagName("b")[0].textContent;

console.log(pageTitle)

if (pageTitle == "Home"){
    if (mediaWidth.matches){
        const tl = gsap.timeline({defaults: {ease: 'power1.out', duration: 1}});
        tl.fromTo(".hero__background", {scaleY: "0"}, {scaleY: "1", duration: 2});
        tl.fromTo(".hero__title", {x: "-150%"}, {x: "0%"}, "-=1");
        tl.fromTo(".hero__subtitle", {x: "-150%"}, {x: "0%"}, "-=1");
        tl.fromTo(".hero__nav", {opacity: "0"}, { opacity: "1"}, "-=1");
    }
    
    
    gsap.to(".projects__title", { scrollTrigger: ".projects__title","left": "100%", duration: .5})
    gsap.to(".a", {scrollTrigger: ".a", x: 0, opacity: 1, duration: .8})
    gsap.to(".b", {scrollTrigger: ".b", x: 0, opacity: 1, duration: .8})
    gsap.to(".c", {scrollTrigger: ".c", x: 0, opacity: 1, duration: .8})
    gsap.to(".d", {scrollTrigger: ".d", x: 0, opacity: 1, duration: .8})
}

