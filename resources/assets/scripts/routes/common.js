import Swiper, { Navigation, Pagination, EffectFade, Thumbs, Autoplay } from 'swiper';
import sal from 'sal.js';
import cf7 from './js/cf7';

Swiper.use([Navigation, Pagination, EffectFade, Thumbs, Autoplay]);

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    cf7,

      $('h1, h2, h3').not('footer').attr({
        'data-sal': 'fade',
        'data-sal-duration': 600,
      });

    sal({
      once: true,
    });

    $('#navbarToggler').on('show.bs.collapse', function () {
      $('body').css('overflow', 'hidden')
      $('nav.navbar').addClass('menu-open')
    });

    $('#navbarToggler').on('hide.bs.collapse', function () {
      $('body').css('overflow', '')
      $('nav.navbar').removeClass('menu-open')
    });

    $('.navbar-toggler').click(function () {
      var menu = $(this).find('.menu')
      if (menu.is('.active:not(.back)')) {
        menu.addClass('back');
      } else if (menu.is('.back')) {
        menu.removeClass('back');
      } else {
        menu.addClass('active');
      }
    });

    /* eslint-disable no-unused-vars */
    var standOutSlider = new Swiper('.stand-out__slider', {
      slidesPerView: 1,
      spaceBetween: 40,
      navigation: {
        nextEl: '.stand-out__btn--next',
        prevEl: '.stand-out__btn--prev',
      },
    });

    var stepsSlider = new Swiper('.steps__slider', {
      slidesPerView: 1,
      spaceBetween: 50,
      navigation: {
        nextEl: '.steps__btn--next',
        prevEl: '.steps__btn--prev',
      },
      breakpoints: {
        992: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 3,
        },
      },
    });

    var stepsLay2Slider = new Swiper('.steps-lay2__slider', {
      slidesPerView: 1,
      spaceBetween: 50,
      navigation: {
        nextEl: '.steps-lay2__btn--next',
        prevEl: '.steps-lay2__btn--prev',
      },
      breakpoints: {
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

    var stepsLay3Slider = new Swiper('.steps-lay3__slider', {
      slidesPerView: 1,
      spaceBetween: 50,
      navigation: {
        nextEl: '.steps-lay3__btn--next',
        prevEl: '.steps-lay3__btn--prev',
      },
      breakpoints: {
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

    var downloadableMaterials = new Swiper('.downloadable-materials__slider', {
      slidesPerView: 1,
      spaceBetween: 50,
      navigation: {
        nextEl: '.downloadable-materials__btn--next',
        prevEl: '.downloadable-materials__btn--prev',
      },
      breakpoints: {
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

    $('.steps__item .item__footer').click(function () {
      $(this).closest('.steps__item').find('.item__text').toggle();
      $(this).toggleClass('active');

      var steps_button = $(this).closest('.steps__item').find('.steps__collapse-btn');

      steps_button.text((steps_button.text() == 'Rozwiń') ? 'Zwiń' : 'Rozwiń')
    });

    var lazyVideos = [].slice.call(document.querySelectorAll('video.lazy'));

    if ('IntersectionObserver' in window) {
      var lazyVideoObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (video) {
          if (video.isIntersecting) {
            for (var source in video.target.children) {
              var videoSource = video.target.children[source];
              if (typeof videoSource.tagName === 'string' && videoSource.tagName === 'SOURCE') {
                videoSource.src = videoSource.dataset.src;
              }
            }

            video.target.load();
            video.target.classList.remove('lazy');
            lazyVideoObserver.unobserve(video.target);
          }
        });
      });

      lazyVideos.forEach(function (lazyVideo) {
        lazyVideoObserver.observe(lazyVideo);
      });
    }
  },
};
