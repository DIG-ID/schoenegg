import { gsap } from "gsap";
import Lenis from '@studio-freight/lenis';
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);


//Lenis configuration
const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true
});

lenis.on('scroll', ScrollTrigger.update);

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

$(function() {



  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    // Images parallax
    /*const tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.section-teasers',
        scrub: true,
        pin: false,
        helpers: true,
      }
    });

    tl.fromTo('.parallax-bg', { yPercent: -10}, { yPercent: -40, ease: 'none' });*/
  };




});