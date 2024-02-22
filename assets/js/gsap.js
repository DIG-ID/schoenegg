import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { lenis } from './lenis.js';

gsap.registerPlugin(ScrollTrigger);

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
});

gsap.ticker.lagSmoothing(0);

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