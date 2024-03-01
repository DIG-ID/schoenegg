import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis';

//Lenis configuration
export const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true,
  //easing: easeOutExpo(),
});

/*lenis.on('scroll', (e) => {
  console.log(e)
});*/

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf);

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
  /*if ( $(".page-template-page-home")[0] ) {
    // Images parallax
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.section-hero',
        scrub: true,
        pin: false,
        helpers: true,
      }
    });

    tl.fromTo('.section-hero', { height: 0 }, { height: '70svh', ease: 'none' });
  };*/

});