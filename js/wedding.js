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

generalSlider('.banner__slider ');
