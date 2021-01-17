
const mediaWidth = window.matchMedia("(min-width: 1440px)");

if (mediaWidth.matches){
    const tl = gsap.timeline({defaults: {ease: 'power1.out'}});

    tl.fromTo(".hero__background", {scaleY: "0"}, {scaleY: "1", duration: 2});
    tl.fromTo(".hero__title__second", {x: "100%"}, {x: "0%", duration: 1}, "-=1");
    tl.fromTo(".hero__title", {x: "-150%"}, {x: "0%", duration: 1}, "-=1");
    tl.fromTo(".hero__nav", {opacity: "0"}, { opacity: "1", duration: 1}, "-=1");
    tl.fromTo(".hero__subtitle", {x: "-150%"}, {x: "0%", duration: 1, stagger: "0.15"}, "-=1");
}


