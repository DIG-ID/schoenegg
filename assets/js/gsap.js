import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis';

gsap.registerPlugin(ScrollTrigger);

//GSAP ScrollTrigger integration
Lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
  Lenis.raf(time * 1000)
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