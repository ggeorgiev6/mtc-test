require('./bootstrap');
import {tns} from 'tiny-slider/src/tiny-slider';

  var slider = tns({
    container: '.home-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    mode: 'gallery',
    controls: false,
    autoplayButtonOutput: false,
    navContainer: '.home-slider-controls',
  });

  var testimonials = tns({
    container: '.home-testimonials-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    autoplayButtonOutput: false,
    nav: false,
    controlsContainer: '.home-testimonials-slider-controls'
  });
