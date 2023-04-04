AOS.init({
    once: true
});

const generalSliderOpt = {
  effect: 'fade',
  loop: true,
  autoplay: {
    delay: 5000,
  },
};

const generalSlider = (elm) => {
  return new Swiper(elm, generalSliderOpt);
};

const sliderWithThumb = (elm, elmThumb) => {
  return new Swiper(elm, {
    effect: 'fade',
    loop: true,
    autoplay: true,
    thumbs: {
      swiper: new Swiper (elmThumb, {
        spaceBetween: 5,
        slidesPerView: 3,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        loop: true,
        autoplay: true,
      }),
    },
  });
};

generalSlider('.banner__slider');
generalSlider('.profile__slider--groom');
generalSlider('.profile__slider--bride');

// Countdown date
const countdownDate = new Date("Apr 17, 2023 17:00:00").getTime();

const countDate = setInterval(function ()
{
  const now = new Date().getTime();
  const distance = countdownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.querySelector(".countdown__timer__day").innerHTML = days;
  document.querySelector(".countdown__timer__hour").innerHTML = hours;
  document.querySelector(".countdown__timer__minute").innerHTML = minutes;
  document.querySelector(".countdown__timer__second").innerHTML = seconds;

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(countDate);
    document.querySelector(".countdown__timer__day").innerHTML = '0';
    document.querySelector(".countdown__timer__hour").innerHTML = '0'
    document.querySelector(".countdown__timer__minute").innerHTML = '0';
    document.querySelector(".countdown__timer__second").innerHTML = '0';
  }
}, 1000);
// EOF Countdown date

// Galleries
const grid = document.getElementById('galleries');

const iso = new Isotope(grid, {
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer',
    // gutter: 10
  }
});
// EOF Galleries

