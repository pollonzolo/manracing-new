const navClosed = document.querySelector(".nav-closed");
const navOpen = document.querySelector(".nav-open");
const btn = document.querySelector("button.btn");
const btn2 = document.querySelector("button.btn.do-you-btn");
const menuLi = document.querySelectorAll("ul.nav__menu li");

let tlMenuOpen = gsap.timeline({ paused: true });
tlMenuOpen
  .to(".nav-links", { right: 0, duration: 0.2 })
  .from(".nav-links ul li", { x: -200, opacity: 0, stagger: 0.1 }, ">");

navClosed.addEventListener("click", () => {
  tlMenuOpen.play().timeScale(1);
});

navOpen.addEventListener("click", () => {
  tlMenuOpen.timeScale(2);
  tlMenuOpen.reverse();
});

menuLi.forEach((li) =>
  li.addEventListener("click", () => {
    tlMenuOpen.timeScale(2);
    tlMenuOpen.reverse();
  })
);

ScrollTrigger.defaults({
  //toggleActions: "restart pause resume pause",
  scroller: ".container, .container-2, .container-3",
});

let tl = gsap.timeline();

let tl2 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".intro",
  },
});

let tl3 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".about",
  },
});

let tl4 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".sale",
  },
});

let tl5 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".services",
  },
});

let tl6 = gsap.timeline({
  scrollTrigger: {
    start: "-20%",
    trigger: ".do-you",
  },
});

let tl7 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".contact",
  },
});

let tl8 = gsap.timeline({
  scrollTrigger: {
    start: "-70%",
    trigger: ".cars-on-sale",
  },
});

tl.from("a.custom-logo-link", { y: -100, opacity: 0 })
  .from(".hamburger", { y: -100, opacity: 0 }, "<")
  .from(".hero-title h1", { x: -100, opacity: 0, stagger: 0.2 }, "<+0.2");

tl2
  .from(".intro p", { x: -100, opacity: 0 })
  .from(".intro h3", { x: 100, opacity: 0 }, "<+0.1");

tl3
  .from(".sec-title__about", { x: -100, opacity: 0 })
  .from(".title__about", { x: -100, opacity: 0 }, "<+0.1")
  .from(".paragraph__about", { x: 100, opacity: 0 }, "<+0.1");

tl4
  .from(".sec-title__sale", { x: 100, opacity: 0 })
  .from(".latest-cars", { y: 100, opacity: 0, stagger: 0.2 }, "<")
  .from("section.sale .wrap button", { y: 100, opacity: 0 }, ">-0.3");

tl5
  .from(".sec-title__services", { x: -100, opacity: 0 })
  .from(".title__services", { x: -100, opacity: 0 }, "<+0.1")
  .from(".paragraph__services", { x: 100, opacity: 0 }, "<+0.1");

tl6
  .from(".sec-title__do-you h1", { x: -100, opacity: 0, stagger: 0.1 }, "<+0.1")
  .from("section.do-you .wrap button", { x: -100, opacity: 0 }, "<+0.1")
  .from(".do-you-img", { x: 100, opacity: 0 }, "<+0.1");

tl7
  .from(".contact .sec-title", { x: -100, opacity: 0 })
  .from(".contact-list", { x: -100, opacity: 0 }, "<+0.1")
  .from(".links", { x: 100, opacity: 0 }, "<+0.1");

tl8.from(".car", { y: 100, opacity: 0, stagger: 0.1 });

gsap.utils.toArray(btn).forEach((btn) => {});

let hover = gsap.to(btn, { scale: 1.05, duration: 0.2, paused: true });
btn.addEventListener("mouseenter", () => hover.play());
btn.addEventListener("mouseleave", () => hover.reverse());
let hover2 = gsap.to(btn2, { scale: 1.05, duration: 0.2, paused: true });
btn2.addEventListener("mouseenter", () => hover2.play());
btn2.addEventListener("mouseleave", () => hover2.reverse());
