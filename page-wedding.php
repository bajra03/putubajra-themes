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
    <?php foreach ($banner_sliders_desktop as $key => $banner) {
    ?>body .banner__slider .banner__slider__slide.banner__slider__slide--<?php echo $key + 1;

                                                                          ?> {
      background-image: url('<?php echo $banner["full_image_url"]; ?>') !important;
    }

    <?php
    }
    ?>
    /* EOF Banner Section */

    /* Groom Slider */
    <?php foreach ($groom_slider_desktop as $key => $slide) { ?>body .profile--groom .profile__slider__slide.profile__slider__slide--<?php echo $key + 1; ?> {
      background-image: url('<?php echo $slide["full_image_url"]; ?>') !important;
    }

    <?php } ?>
    /* EOF Groom Slider */

    /* Bride Slider */
    <?php foreach ($bride_slider_desktop as $key => $slide) { ?>body .profile--bride .profile__slider__slide.profile__slider__slide--<?php echo $key + 1; ?> {
      background-image: url('<?php echo $slide["full_image_url"]; ?>') !important;
    }

    <?php } ?>
    /* EOF Bride Slider */
  }
</style>

<!-- Section Banner -->
<section class="banner">
  <div class="banner__slider swiper-slider">
    <div class="banner__slider__wrapper swiper-wrapper">
      <?php foreach ($banner_sliders_mobile as $key => $banner) { ?>
        <div class="swiper-slide banner__slider__slide banner__slider__slide--<?php echo $key + 1; ?>" style="background-image: url('<?php echo $banner['full_image_url']; ?>');"></div>
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
    <div class="banner__content__date"><?php echo $bannerDate; ?> . <?php echo $bannerMonth; ?> . <?php echo $bannerYear; ?></div>
    <div class="banner__content__address">
      <i class="fa-solid fa-location-dot"></i> <?php echo $banners['banner_address']; ?>
    </div>
  </div>
</section>
<!-- EOF Section Banner -->

<!-- Section ucapan pengantar -->
<section class="intro">
  <div class="intro__container">
    <?php if ($intros["intro_image"]["url"]) { ?>
      <figure>
        <img src="<?php echo $intros["intro_image"]["url"]; ?>" alt="Intro image" aria-hidden="true">
      </figure>
    <?php } ?>
    <h2 class="text-header"><?php echo $intros['intro_title']; ?></h2>
    <p><?php echo $intros['intro_text']; ?></p>
  </div>
</section>
<!-- EOF Section ucapan pengantar -->

<!-- Section Profile Groom -->
<section class="profile profile--groom">
  <!-- Slider Profile Groom -->
  <div class="profile__slider profile__slider--groom swiper-slider">
    <div class="swiper-wrapper profile__slider__wrapper">
      <?php foreach ($groom_slider_mobile as $key => $slide) { ?>
        <div class="swiper-slide profile__slider__slide profile__slider__slide--<?php echo $key + 1; ?>" style="background-image: url('<?php echo $slide['full_image_url']; ?>');">
        </div>
      <?php } ?>
    </div>
  </div>
  </div> <!-- EOF Slider Profile Groom -->
  <!-- Profile Details Groom -->
  <div class="profile__details">
    <figure class="profile__picture swiper-wrapper">
      <img src="<?php echo $section_groom['profile_picture']['url']; ?>" alt="Profile picture groom" aria-hidden="true">
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
            <li><a href="<?php $section_groom['socials']['instagram']; ?>"><i class="fa-brands fa-instagram social-ig"></i></a></li>
          <?php } ?>
          <?php if ($section_groom['socials']['facebook']) { ?>
            <li><a href="#"><i class="fa-brands fa-facebook social-fb"></i></a></li>
          <?php } ?>
          <?php if ($section_groom['socials']['tiktok']) { ?>
            <li><a href="#"><i class="fa-brands fa-tiktok social-tiktok"></i></a></li>
          <?php } ?>
          <?php if ($section_groom['socials']['linkedin']) { ?>
            <li><a href="#"><i class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
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
        <div class="swiper-slide profile__slider__slide profile__slider__slide--<?php echo $key + 1; ?>" style="background-image: url('<?php echo $slide['full_image_url']; ?>');">
        </div>
      <?php } ?>
    </div>
  </div> <!-- EOF Slider Profile Bride -->

  <!-- Profile Details Bride -->
  <div class="profile__details">

    <figure class="profile__picture swiper-wrapper">
      <img src="<?php echo $section_bride['profile_picture']['url']; ?>" alt="Profile picture bride" aria-hidden="true">
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
            <li><a href="<?php echo $section_bride['socials']['instagram']; ?>"><i class="fa-brands fa-instagram social-ig"></i></a></li>
          <?php } ?>
          <?php if ($section_bride['socials']['facebook']) { ?>
            <li><a href="<?php echo $section_bride['socials']['facebook']; ?>"><i class="fa-brands fa-facebook social-fb"></i></a></li>
          <?php } ?>
          <?php if ($section_bride['socials']['tiktok']) { ?>
            <li><a href="<?php echo $section_bride['socials']['tiktok']; ?>"><i class="fa-brands fa-tiktok social-tiktok"></i></a></li>
          <?php  } ?>
          <?php if ($section_bride['socials']['linkedin']) { ?>
            <li><a href="<?php echo $section_bride['socials']['linkedin']; ?>"><i class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
          <?php } ?>
        </ul>
      <?php } ?>
      <hr>
    </div>
  </div><!-- EOF Profile Details Bride -->
</section>
<!-- EOF Section Profile Bride -->


<?php get_footer('wedding'); ?>