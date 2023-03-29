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

// print_r($section_bride['socials']['facebook']);
?>
<style>
hr {
  background-image: url("<?php echo get_template_directory_uri() . '/assets/images/divider.svg'; ?>");
}

@media (min-width: 768px) {

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
    <figure>
      <img src="<?php echo $intros["intro_image"]["url"]; ?>" alt="Intro image" aria-hidden="true" loading="lazy">
    </figure>
    <?php } ?>
    <h2 class="text-header"><?php echo $intros['intro_title']; ?></h2>
    <p><?php echo $intros['intro_text']; ?></p>
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
    <figure class="profile__picture">
      <img src="<?php echo $section_groom['profile_picture']['url']; ?>" alt="Profile picture groom" aria-hidden="true"
        loading="lazy">
    </figure>
    <div class="profile__info">
      <div class="profile__info__dob"><?php echo $groomDate; ?> . <?php echo $groomMonth; ?></div>
      <h2 class="profile__info__name text-header"><?php echo $section_groom['name']; ?></h2>
      <hr>
      <div class="profile__info__desc">
        <?php echo $section_groom['description']; ?>
      </div>
      <hr>
      <?php if ($section_groom['socials']) { ?>
      <ul class="profile__info__socials">
        <?php if ($section_groom['socials']['instagram']) { ?>
        <li><a href="<?php echo $section_groom['socials']['instagram']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-instagram social-ig"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['facebook']) { ?>
        <li><a href="<?php echo $section_groom['socials']['facebook']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-facebook social-fb"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['tiktok']) { ?>
        <li><a href="<?php echo $section_groom['socials']['tiktok']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <?php } ?>
        <?php if ($section_groom['socials']['linkedin']) { ?>
        <li><a href="<?php echo $section_groom['socials']['linkedin']; ?>" target="_blank" rel="noopener"><i
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
    <figure class="profile__picture">
      <img src="<?php echo $section_bride['profile_picture']['url']; ?>" alt="Profile picture bride" aria-hidden="true"
        loading="lazy">
    </figure>
    <div class="profile__info">
      <div class="profile__info__dob"><?php echo $brideDate; ?> . <?php echo $brideMonth; ?></div>
      <h2 class="profile__info__name text-header"><?php echo $section_bride['name']; ?></h2>
      <hr>
      <div class="profile__info__desc">
        <?php echo $section_bride['description']; ?>
      </div>
      <hr>
      <?php if ($section_bride['socials']) { ?>
      <ul class="profile__info__socials">
        <?php if ($section_bride['socials']['instagram']) { ?>
        <li><a href="<?php echo $section_bride['socials']['instagram']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-instagram social-ig"></i></a></li>
        <?php } ?>
        <?php if ($section_bride['socials']['facebook']) { ?>
        <li><a href="<?php echo $section_bride['socials']['facebook']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-facebook social-fb"></i></a></li>
        <?php } ?>
        <?php if ($section_bride['socials']['tiktok']) { ?>
        <li><a href="<?php echo $section_bride['socials']['tiktok']; ?>" target="_blank" rel="noopener"><i
              class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <?php  } ?>
        <?php if ($section_bride['socials']['linkedin']) { ?>
        <li><a href="<?php echo $section_bride['socials']['linkedin']; ?>" target="_blank" rel="noopener"><i
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
  <div class="venue__info">
    <div class="venue__info__title">
      <h2 class="text-header">Acara Kami</h2>
    </div>
    <hr>
    <div class="venue__info__subtitle">
      <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir untuk
        memberikan doa restu kepada kami pada :</p>
    </div>
    <div class="venue__info__table">
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
    <a href="https://goo.gl/maps/pu8Db9E6KeK4mpXTA" target="_blank" rel="noopener" class="btn btn--primary">Buka
      Maps</a>
  </div>
  <div class="venue__map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.756699679298!2d115.32812951550515!3d-8.522986363687501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd216542cc4ede7%3A0x2308fdb0be993019!2sTaman%20Prakerti%20Bhuana!5e0!3m2!1sen!2sid!4v1680102092816!5m2!1sen!2sid"
      width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<!-- EOF Section Venue -->

<?php get_footer('wedding'); ?>
