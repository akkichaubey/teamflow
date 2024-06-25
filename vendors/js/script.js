gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

const circle = document.querySelector('.nz-circle');
        // Create ScrollSmoother
        const smoother = ScrollSmoother.create({
            content: "#scrollsmoother-container",
            smooth: 2,
            normalizeScroll: true,
            ignoreMobileResize: true,
            smoothTouch: 0.1,
            effects: true,
        });

// mouse
var cursor = new MouseFollower(
  {
    el: null,
    container: document.body,
    className: 'nz-cursor',
    innerClassName: 'nz-cursor-inner',
    textClassName: 'nz-cursor-text',
    mediaClassName: 'nz-cursor-media',
    mediaBoxClassName: 'nz-cursor-media-box',
    skewing: 1.5,
    skewingMedia: 0.5,
    // stateDetection: {
    //   'hidden': ['.hide-cursor'] 
    // }
  }
);

// svg 
document.addEventListener('DOMContentLoaded', function () {
  const svgImages = document.querySelectorAll('img.svg');
  svgImages.forEach(function (img) {
      const imgID = img.getAttribute('id');
      const imgClass = img.getAttribute('class');
      const imgURL = img.getAttribute('src');

      const xhr = new XMLHttpRequest();
      xhr.open('GET', imgURL, true);
      xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
              const svgContent = xhr.responseXML.querySelector('svg');
              if (imgID) {
                  svgContent.setAttribute('id', imgID);
              }
              if (imgClass) {
                  svgContent.setAttribute('class', `${imgClass} replaced-svg`);
              }
              svgContent.removeAttribute('xmlns:a');
              if (!svgContent.getAttribute('viewBox') && svgContent.getAttribute('height') && svgContent.getAttribute('width')) {
                  svgContent.setAttribute('viewBox', `0 0 ${svgContent.getAttribute('height')} ${svgContent.getAttribute('width')}`);
              }

              img.parentNode.replaceChild(svgContent, img);
          }
      };
      xhr.send();
  });
});

var clientLogo = new Swiper(".client-logo", {
  slidesPerView: 6,
  spaceBetween: 24,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    reverseDirection:true,
  },
});

var clientLogoSwiper = new Swiper(".client-slider", {
  spaceBetween: 10,
  slidesPerView: 2,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    480: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 30,
    }
  },
});