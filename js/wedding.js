const generalSliderOpt = {
  effect: 'fade',
  loop: true,
  autoplay: {
    delay: 5000,
  },
};

const generalSlider = (elm) =>
{
  return new Swiper(elm, generalSliderOpt);
};

generalSlider('.banner__slider ')
