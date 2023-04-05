<?php

/**
 * Template Name: Page Wedding
 */

get_header('wedding');

// Get All Fields
$banners = get_field('banner_section');
$banner_sliders_desktop = get_field('banner_slider_desktop');
$banner_sliders_mobile = get_field('banner_slider_mobile');
$intros = get_field('intros');
$section_groom = get_field('section_groom');
$groom_slider_mobile = get_field('groom_slider_mobile');
$groom_slider_desktop = get_field('groom_slider_desktop');
$section_bride = get_field('section_bride');
$bride_slider_mobile = get_field('bride_slider_mobile');
$bride_slider_desktop = get_field('bride_slider_desktop');
$section_countdown = get_field('section_countdown');
$section_gallery = get_field('section_gallery');
$galleries = get_field('gallery_images');
$popup_invitation_bg = get_field('background_image_popup_invitation');
$popup_invitation_bg_mobile = get_field('background_image_popup_invitation_mobile');
$backsound_url = get_field('back_song_url');
// EOF Get All Fields

$datesBanner = strtotime($banners['banner_date']);
$bannerDate = date("d", $datesBanner);
$bannerMonth = date("m", $datesBanner);
$bannerYear = date("Y", $datesBanner);

$datesGroom = strtotime($section_groom['dob']);
$groomDate = date("d", $datesGroom);
$groomMonth = date("m", $datesGroom);
$groomYear = date("Y", $datesGroom);

$datesBride = strtotime($section_bride['dob']);
$brideDate = date("d", $datesBride);
$brideMonth = date("m", $datesBride);
$brideYear = date("Y", $datesBride);

// print_r($section_countdown);
?>
<style>
hr {
  background-image: url("<?php echo get_template_directory_uri() . '/assets/images/divider.svg'; ?>");
}

@media (min-width: 768px) {

  /* Popup Invitation Banner */
  .popup-invitation {
    background-image: url(<?php echo $popup_invitation_bg["url"]; ?>);
  }

  /* EOF Popup Invitation Banner */

  /* Banner Section */
  <?php foreach ($banner_sliders_desktop as $key=> $banner) {
    ?>body .banner__slider .banner__slider__slide.banner__slider__slide--<?php echo $key+1;

    ?> {
      background-image: url('<?php echo $banner["full_image_url"]; ?>') !important;
    }

    <?php
  }

  ?>
  /* EOF Banner Section */

  /* Groom Slider */
  <?php foreach ($groom_slider_desktop as $key=> $slide) {
    ?>body .profile--groom .profile__slider__slide.profile__slider__slide--<?php echo $key+1;

    ?> {
      background-image: url('<?php echo $slide["full_image_url"]; ?>') !important;
    }

    <?php
  }

  ?>
  /* EOF Groom Slider */

  /* Bride Slider */
  <?php foreach ($bride_slider_desktop as $key=> $slide) {
    ?>body .profile--bride .profile__slider__slide.profile__slider__slide--<?php echo $key+1;

    ?> {
      background-image: url('<?php echo $slide["full_image_url"]; ?>') !important;
    }

    <?php
  }

  ?>
  /* EOF Bride Slider */
}

</style>

<!-- Section Intro Overlay -->
<section id="popup-invitation" class="popup-invitation"
  style="background-image: url(<?php echo $popup_invitation_bg_mobile["url"]; ?>);">
  <div class="popup-invitation__container">
    <div class="popup-invitation__details">
      <div>Kpd Bpk/Ibu/Saudara/i</div>
      <div class="popup-invitation__details__name text-header">
        Nama Tamu
      </div>
      <div>Mohon maaf apabila ada kesalahan penulisan nama/gelar</div>
      <button class="btn btn--primary" id="btn-open-invitation"><i class="fa-regular fa-envelope-open"></i> Buka
        Undangan</button>
    </div>
  </div>
</section>
<!-- EOF Section Intro Overlay -->

<!-- Section Banner -->
<section class="banner">
  <div class="banner__slider swiper-slider">
    <div class="banner__slider__wrapper swiper-wrapper">
      <?php foreach ($banner_sliders_mobile as $key => $banner) { ?>
      <div class="swiper-slide banner__slider__slide banner__slider__slide--<?php echo $key + 1; ?>"
        style="background-image: url('<?php echo $banner['full_image_url']; ?>');"></div>
      <?php } ?>
    </div>
  </div>
  <div class="banner__content">
    <div class="banner__content__subtitle"> Pawiwahan</div>
    <div class="banner__content__name">
      <h1 class="text-header">
        <span class="banner__content__name__groom"><?php echo $banners['groom_name']; ?></span>
        <span class="banner__content__name__and">&</span>
        <span class="banner__content__name__bride"><?php echo $banners['bride_name']; ?></span>
      </h1>
    </div>
    <div class="banner__content__date"><?php echo $bannerDate; ?> . <?php echo $bannerMonth; ?> .
      <?php echo $bannerYear; ?></div>
    <div class="banner__content__address">
      <i class="fa-solid fa-location-dot"></i> <?php echo $banners['banner_address']; ?>
    </div>
  </div>
</section>
<!-- EOF Section Banner -->

<!-- Section Intro -->
<section class="intro">
  <div class="intro__container">
    <?php if ($intros["intro_image"]["url"]) { ?>
    <figure data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
      <img src="<?php echo $intros["intro_image"]["url"]; ?>" alt="Intro image" aria-hidden="true" loading="lazy">
    </figure>
    <?php } ?>
    <h2 class="text-header" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
      <?php echo $intros['intro_title']; ?></h2>
    <div data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out"><?php echo $intros['intro_text']; ?>
    </div>
  </div>
</section>
<!-- EOF Section Intro -->

<!-- Section Profile Groom -->
<section class="profile profile--groom">
  <!-- Slider Profile Groom -->
  <div class="profile__slider profile__slider--groom swiper-slider">
    <div class="swiper-wrapper profile__slider__wrapper">
      <?php foreach ($groom_slider_mobile as $key => $slide) { ?>
      <div class="swiper-slide profile__slider__slide profile__slider__slide--<?php echo $key + 1; ?>"
        style="background-image: url('<?php echo $slide['full_image_url']; ?>');">
      </div>
      <?php } ?>
    </div>
  </div>
  </div> <!-- EOF Slider Profile Groom -->
  <!-- Profile Details Groom -->
  <div class="profile__details">
    <figure class="profile__picture" data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
      <img src="<?php echo $section_groom['profile_picture']['url']; ?>" alt="Profile picture groom" aria-hidden="true"
        loading="lazy">
    </figure>
    <div class="profile__info">
      <div class="profile__info__dob" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
        <?php echo $groomDate; ?> .
        <?php echo $groomMonth; ?></div>
      <h2 class="profile__info__name text-header" data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out">
        <?php echo $section_groom['name']; ?></h2>
      <hr>
      <div class="profile__info__desc" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out">
        <?php echo $section_groom['description']; ?>
      </div>
      <hr>
      <?php if ($section_groom['socials']) { ?>
      <ul class="profile__info__socials">
        <?php if ($section_groom['socials']['instagram']) { ?>
        <li data-aos="fade-up" data-aos-delay="250" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_groom['socials']['instagram']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-instagram social-ig"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['facebook']) { ?>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_groom['socials']['facebook']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-facebook social-fb"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['tiktok']) { ?>
        <li data-aos="fade-up" data-aos-delay="350" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_groom['socials']['tiktok']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['linkedin']) { ?>
        <li data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_groom['socials']['linkedin']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
        <?php } ?>
      </ul>
      <?php } ?>
      <hr>
    </div>
  </div><!-- EOF Profile Details Groom -->
</section>
<!-- EOF Section Profile Groom -->

<!-- Section Profile Bride -->
<section class="profile profile--bride">
  <!-- Slider Profile Bride -->
  <div class="profile__slider profile__slider--bride swiper-slider">
    <div class="swiper-wrapper profile__slider__wrapper">
      <?php foreach ($bride_slider_mobile as $key => $slide) { ?>
      <div class="swiper-slide profile__slider__slide profile__slider__slide--<?php echo $key + 1; ?>"
        style="background-image: url('<?php echo $slide['full_image_url']; ?>');">
      </div>
      <?php } ?>
    </div>
  </div> <!-- EOF Slider Profile Bride -->

  <!-- Profile Details Bride -->
  <div class="profile__details">
    <figure class="profile__picture" data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
      <img src="<?php echo $section_bride['profile_picture']['url']; ?>" alt="Profile picture bride" aria-hidden="true"
        loading="lazy">
    </figure>
    <div class="profile__info">
      <div class="profile__info__dob" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
        <?php echo $brideDate; ?> . <?php echo $brideMonth; ?></div>
      <h2 class="profile__info__name text-header" data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out">
        <?php echo $section_bride['name']; ?></h2>
      <hr>
      <div class="profile__info__desc" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out">
        <?php echo $section_bride['description']; ?>
      </div>
      <hr>
      <?php if ($section_bride['socials']) { ?>
      <ul class="profile__info__socials">
        <?php if ($section_bride['socials']['instagram']) { ?>
        <li data-aos="fade-up" data-aos-delay="250" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_bride['socials']['instagram']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-instagram social-ig"></i></a></li>
        <?php } ?>
        <?php if ($section_bride['socials']['facebook']) { ?>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_bride['socials']['facebook']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-facebook social-fb"></i></a></li>
        <?php } ?>
        <?php if ($section_bride['socials']['tiktok']) { ?>
        <li data-aos="fade-up" data-aos-delay="350" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_bride['socials']['tiktok']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <?php  } ?>
        <?php if ($section_bride['socials']['linkedin']) { ?>
        <li data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out"><a
            href="<?php echo $section_bride['socials']['linkedin']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
        <?php } ?>
      </ul>
      <?php } ?>
      <hr>
    </div>
  </div><!-- EOF Profile Details Bride -->
</section>
<!-- EOF Section Profile Bride -->

<!-- Section Venue -->
<section class="venue">
  <div class="venue__container">
    <div class="venue__info">
      <div class="venue__info__title" data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
        <h2 class="text-header">Waktu & Tempat</h2>
      </div>
      <hr>
      <div class="venue__info__subtitle" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
        <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir untuk
          memberikan doa restu kepada kami pada :</p>
      </div>
      <div class="venue__info__table" data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out">
        <div class="venue__info__table__dates">
          <div class="venue__info__table__dates__month">April</div>
          <div class="venue__info__table__dates__date">17</div>
          <div class="venue__info__table__dates__year">2023</div>
        </div>
        <div class="venue__info__table__details">
          <div class="venue__info__table__details__time"><i class="fa-regular fa-clock"></i> 17.00 - 20.00 WITA</div>
          <div class="venue__info__table__details__location"><i class="fa-solid fa-location-dot"></i> Taman Prakerti
            Bhuana,<br> Beng, Kabupaten Gianyar, Bali</div>
        </div>
      </div>
      <a href="https://goo.gl/maps/pu8Db9E6KeK4mpXTA" target="_blank" rel="noopener" class="btn btn--primary"
        data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out"><i class="fa-solid fa-map"></i> Buka
        Map</a>
    </div>
    <div class="venue__map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.756699679298!2d115.32812951550515!3d-8.522986363687501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd216542cc4ede7%3A0x2308fdb0be993019!2sTaman%20Prakerti%20Bhuana!5e0!3m2!1sen!2sid!4v1680102092816!5m2!1sen!2sid"
        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<!-- EOF Section Venue -->

<!-- Section Countdown -->
<section class="section-countdown"
  <?php if ($section_countdown['background_image']) { ?>style="background-image: url(<?php echo $section_countdown['background_image']['url']; ?>);"
  <?php } ?>>
  <div class="countdown">
    <div class="countdown__title" data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
      <h2 class="text-header">Menuju Hari Bahagia</h2>
    </div>
    <hr>
    <div class="countdown__quote" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
      Dua jiwa namun satu pikiran, dua hati namun satu perasaan, dua keinginan namun satu tujuan. #satujuan
    </div>
    <div class="countdown__timer" data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out">
      <div class="countdown__timer__inner countdown__timer__inner--day">
        <span class="countdown__timer__day">0</span>
        Hari
      </div>
      <div class="countdown__timer__inner countdown__timer__inner--hour">
        <span class="countdown__timer__hour">0</span>
        Jam
      </div>
      <div class="countdown__timer__inner countdown__timer__inner--minute">
        <span class="countdown__timer__minute">0</span>
        Menit
      </div>
      <div class="countdown__timer__inner countdown__timer__inner--second">
        <span class="countdown__timer__second">0</span>
        Detik
      </div>
    </div>
  </div>
</section>
<!-- EOF Section Countdown -->

<!-- Section Gallery -->
<section class="gallery">
  <div class="gallery__title" data-aos="fade-up" data-aos-delay="50" data-aos-easing="ease-in-out">
    <?php if ($section_gallery) { ?>
    <h2 class="text-header"><?php echo $section_gallery['title']; ?></h2>
    <?php if ($section_gallery['quote']) { ?>
    <hr>
    <div class="gallery__quote"><?php echo $section_gallery['quote']; ?></div>
    <?php } ?>
    <?php } ?>

    <hr>
  </div>
  <div class="grid gallery__container" id="galleries">
    <div class="grid-sizer"></div>
    <?php if ($galleries) { ?>
    <?php foreach ($galleries as $key => $gallery) {
                $dataWidth = $gallery['caption'];
                $dataWidthArr = explode('x', $dataWidth);
            ?>
    <a href="<?php echo $gallery['full_image_url']; ?>" target="_blank" class="grid-item"
      data-pswp-width="<?php echo $dataWidthArr[0]; ?>" data-pswp-height="<?php echo $dataWidthArr[1]; ?>"
      data-aos="fade-up" data-aos-delay="<?php echo $key ?>00" data-aos-easing="ease-in-out">
      <img src="<?php echo $gallery['full_image_url']; ?>" alt="Gallery image" aria-hidden="true">
    </a>
    <?php } ?>
    <?php } ?>
  </div>
</section>
<!-- EOF Section Gallery -->

<!-- Audio -->
<audio id="myAudio" loop>
  <source src="<?php echo $backsound_url; ?>" type="audio/ogg">
  <source src="<?php echo $backsound_url; ?>" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<!-- EOF Audio -->

<?php get_footer('wedding'); ?>
