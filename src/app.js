const navClosed = document.querySelector(".nav-closed");
const navOpen = document.querySelector(".nav-open");

let tlMenuOpen = gsap.timeline({paused: true});
tlMenuOpen.to( ".nav-links", {right: 0, duration: 0.2})
.from( ".nav-links ul li", {x:-200, opacity: 0, stagger: 0.1}, ">");

navClosed.addEventListener("click", ()=> {
  tlMenuOpen.play().timeScale(1);

});

navOpen.addEventListener("click", ()=> {
  tlMenuOpen.timeScale(2);
  tlMenuOpen.reverse();

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

tl.from("a.custom-logo-link", {y:-100, opacity: 0}).
from(".hamburger", {y:-100, opacity: 0}, "<").
from(".hero-title h1", {x:-100, opacity: 0, stagger: 0.2}, "<+0.2");

tl2.from(".intro p", { x: -100, opacity: 0})
.from(".intro h3", { x: 100, opacity: 0}, "<+0.1");

tl3.from(".sec-title__about", { x: -100, opacity: 0})
.from(".title__about", { x: -100, opacity: 0}, "<+0.1")
.from(".paragraph__about", { x: 100, opacity: 0}, "<+0.1");

tl4.from(".sec-title__sale", { x: 100, opacity: 0})
.from(".cars", { y: 100, opacity: 0, stagger: 0.2}, "<")
.from("section.sale .wrap button", { y: 100, opacity: 0},">-0.3");

tl5.from(".sec-title__services", { x: -100, opacity: 0})
.from(".title__services", { x: -100, opacity: 0}, "<+0.1")
.from(".paragraph__services", { x: 100, opacity: 0}, "<+0.1");

tl6.from(".sec-title__do-you h1", { x: -100, opacity: 0, stagger: 0.1}, "<+0.1")
.from("section.do-you .wrap button", { x: -100, opacity: 0}, "<+0.1")
.from(".do-you-img", { x: 100, opacity: 0}, "<+0.1");

tl7.from("footer.contact .sec-title", { x: -100, opacity: 0})
.from(".contact-list", { x: -100, opacity: 0}, "<+0.1")
.from(".links", { x: 100, opacity: 0}, "<+0.1");
