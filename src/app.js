const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", ()=> {
  navLinks.classList.toggle("open");
  hamburger.classList.toggle("hamburger-open");
});


ScrollTrigger.defaults({
  scroller: ".container-2",
});


let tl = gsap.timeline({
  scrollTrigger: {
    start: "-0.1%",
    trigger: ".intro",
  }
});

tl.fromTo(".intro p", { x: -400, opacity: 0 },{ x: 0, opacity: 1})
.fromTo(".intro h3", { x: 400, opacity: 0 }, { x: 0, opacity: 1}, "<");