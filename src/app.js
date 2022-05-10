const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", ()=> {
  navLinks.classList.toggle("open");
  hamburger.classList.toggle("hamburger-open");
});


ScrollTrigger.defaults({
  //toggleActions: "restart pause resume pause",
  scroller: ".container-2",
});


let tl = gsap.timeline();


let tl2 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".intro",
  }
});

let tl3 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".about",
  }
});

let tl4 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".sale",
  }
});

let tl5 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".services",
  }
});

let tl6 = gsap.timeline({
  scrollTrigger: {
    start: "-20%",
    trigger: ".do-you",
  }
});

let tl7 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".contact",
  }
});

tl.from("a.custom-logo-link", {x:-100, opacity: 0}).
from(".hamburger", {x:100, opacity: 0}, "<").
from(".hero-title-1", {x:-100, opacity: 0}).
from(".hero-title-2", {x:-100, opacity: 0}).
from(".hero-title-3", {x:-100, opacity: 0});

tl2.fromTo(".intro p", { x: -100, opacity: 0},{ x: 0, opacity: 1})
.fromTo(".intro h3", { x: 100, opacity: 0}, { x: 0, opacity: 1}, "<");

tl3.fromTo(".sec-title__about", { y: -100, opacity: 0},{ y: 0, opacity: 1})
.fromTo(".title__about", { x: -100, opacity: 0}, { x: 0, opacity: 1}, "<")
.fromTo(".paragraph__about", { x: 100, opacity: 0}, { x: 0, opacity: 1}, "<");

tl4.fromTo(".sec-title__sale", { y: -100, opacity: 0},{ y: 0, opacity: 1})
.fromTo(".car-1", { y: 100, opacity: 0}, { y: 0, opacity: 1})
.fromTo(".car-2", { y: 100, opacity: 0}, { y: 0, opacity: 1})
.fromTo(".car-3", { y: 100, opacity: 0}, { y: 0, opacity: 1})
.fromTo("section.sale .wrap button", { y: 100, opacity: 0}, { y: 0, opacity: 1});

tl5.fromTo(".sec-title__services", { y: -100, opacity: 0},{ y: 0, opacity: 1})
.fromTo(".title__services", { x: -100, opacity: 0}, { x: 0, opacity: 1}, "<")
.fromTo(".paragraph__services", { x: 100, opacity: 0}, { x: 0, opacity: 1}, "<");

tl6.fromTo(".sec-title__do-you", { y: -100, opacity: 0},{ y: 0, opacity: 1})
.fromTo(".sec-title__do-you-1", { x: -100, opacity: 0}, { x: 0, opacity: 1})
.fromTo(".sec-title__do-you-2", { x: -100, opacity: 0}, { x: 0, opacity: 1})
.fromTo("section.do-you .wrap button", { x: -100, opacity: 0}, { x: 0, opacity: 1})
.fromTo(".do-you-img", { x: 100, opacity: 0}, { x: 0, opacity: 1});

tl7.fromTo("footer.contact .sec-title", { y: -100, opacity: 0},{ y: 0, opacity: 1})
.fromTo(".contact-list", { x: -100, opacity: 0}, { x: 0, opacity: 1})
.fromTo(".links", { x: 100, opacity: 0}, { x: 0, opacity: 1});
