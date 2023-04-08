document.body.classList.add("fixbody");

$(function ()
{
  AOS.init({
    once: true,
  });
})

window.addEventListener(
  "load",
  function ()
  {
    if (document.readyState == 'complete')
    {
      AOS.refresh();
    }

    // console.log(document.readyState)
    const generalSliderOpt = {
      effect: "fade",
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
        effect: "fade",
        loop: true,
        autoplay: true,
        thumbs: {
          swiper: new Swiper(elmThumb, {
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

    generalSlider(".banner__slider");
    generalSlider(".profile__slider--groom");
    generalSlider(".profile__slider--bride");

    // Countdown date
    const countdownDate = new Date("Apr 17, 2023 17:00:00").getTime();

    const countDate = setInterval(function () {
      const now = new Date().getTime();
      const distance = countdownDate - now;

      // Time calculations for days, hours, minutes and seconds
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.querySelector(".countdown__timer__day").innerHTML = days;
      document.querySelector(".countdown__timer__hour").innerHTML = hours;
      document.querySelector(".countdown__timer__minute").innerHTML = minutes;
      document.querySelector(".countdown__timer__second").innerHTML = seconds;

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(countDate);
        document.querySelector(".countdown__timer__day").innerHTML = "0";
        document.querySelector(".countdown__timer__hour").innerHTML = "0";
        document.querySelector(".countdown__timer__minute").innerHTML = "0";
        document.querySelector(".countdown__timer__second").innerHTML = "0";
      }
    }, 1000);
    // EOF Countdown date

    // Galleries
    const grid = document.getElementById("galleries");

    const iso = new Isotope(grid, {
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
        columnWidth: ".grid-sizer",
        // gutter: 10
      },
    });
    // EOF Galleries

    // Scroll top
    const btnToTop = document.getElementById("btn-to-top");
    const btnToggleAudio = document.getElementById("btn-toggle-audio");

    btnToTop.addEventListener("click", function (e) {
      e.preventDefault();
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    });

    const toTopBtnDisplay = function () {
      window.scrollY > 200 ? btnToTop.parentElement.classList.add("show") : btnToTop.parentElement.classList.remove("show");
      window.scrollY > 200 ? btnToggleAudio.parentElement.classList.add("show") : btnToggleAudio.parentElement.classList.remove("show");
    };

    window.addEventListener("scroll", toTopBtnDisplay);
    // EOF Scroll top

    // Toggle Audio Play & Stop
    const myAudio = document.getElementById("myAudio");
    const btnAudioToggle = document.getElementById("btn-toggle-audio");
    let isPlaying = true;

    btnAudioToggle.addEventListener("click", function (e) {
      e.preventDefault();
      toggleAudio();
    });

    function toggleAudio() {
      isPlaying ? playAudio() : pauseAudio();
    }

    function playAudio() {
      myAudio.play();
      isPlaying = !isPlaying;
      btnAudioToggle.innerHTML = '<i class="fa-solid fa-pause"></i>';
    }

    function pauseAudio() {
      myAudio.pause();
      isPlaying = !isPlaying;
      btnAudioToggle.innerHTML = '<i class="fa-solid fa-play"></i>';
    }
    // EOF Toggle Audio Play & Stop

    // Get invited name
    const url = window.location.search;
    const urlParams = new URLSearchParams(url);
    const btnOpenInvitation = document.getElementById("btn-open-invitation");
    const popupInvitationEl = document.getElementById("popup-invitation");

    if (urlParams.get("to")) {
      let guestName = urlParams.get("to");
      let newGuestName = guestName.split("-").join(" ");
      console.log(newGuestName);
      document.querySelector(".popup-invitation__details__name").innerHTML = newGuestName;
    }

    btnOpenInvitation.addEventListener("click", function (e) {
      e.preventDefault();
      popupInvitationEl.classList.add("hide");
      btnAudioToggle.click();
      document.body.classList.remove("fixbody");
    });
    // EOF Get invited name

    // Popup Amplop Digital
    const btnOpenAmplop = document.getElementById('btn-amplop');
    const amplopPopup = document.getElementById('amplop-popup');
    const closePopupAmplop = document.getElementById('amplop-popup__close');
    const btnCopyBank = document.querySelectorAll('.amplop-popup__detail__account__bank__copy');
    const copyMessages = document.querySelectorAll('.amplop-popup__detail__account__bank__message');

    btnOpenAmplop.addEventListener('click', function (e)
    {
      e.preventDefault();
      amplopPopup.classList.add('show');
      document.body.classList.add("fixbody");
    });

    closePopupAmplop.addEventListener('click', function (e)
    {
      e.preventDefault();
      amplopPopup.classList.remove('show');
      document.body.classList.remove("fixbody");
    });

    for (let i = 0; i < btnCopyBank.length; i++)
    {
      btnCopyBank[i].addEventListener('click', function (e)
      {
        e.preventDefault();
        const dataBank = this.getAttribute('data-bank');
        navigator.clipboard.writeText(dataBank);
        copyMessages[i].classList.add('show');

        setTimeout(function ()
        {
          copyMessages[i].classList.remove('show');
        }, 1000);
      });
    }
    // EOF Popup Amplop Digital
  },
  false
); // EOF Document on load
