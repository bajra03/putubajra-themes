<?php

/**
 * Template Name: Page Wedding
 */
get_header('wedding');

$banners = get_field('banner_details');
$banner_sliders = get_field('banner_slider');
$banner_sliders_portrait = get_field('banner_slider_portrait');
$intros = get_field('intros');
?>
<style>
hr {
  background-image: url("<?php echo get_template_directory_uri() . '/assets/images/divider.svg'; ?>");
}

@media (min-width: 1024px) {
  <?php foreach ($banner_sliders as $key=> $banner) {
    ?>body .banner__slider .banner__slider__slide.slide<?php echo $key+1;

    ?> {
      background-image: url('<?php echo $banner['full_image_url']; ?>') !important;
    }

    <?php
  }

  ?>
}

</style>

<!-- Section Banner -->
<section class="banner">
  <div class="banner__slider swiper-slider">
    <div class="banner__slider__wrapper swiper-wrapper">
      <?php foreach ($banner_sliders_portrait as $key => $banner) { ?>
      <div class="swiper-slide banner__slider__slide slide<?php echo $key + 1; ?>"
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
    <div class="banner__content__date">17 . 04 . 2023</div>
    <div class="banner__content__address">
      <i class="fa-solid fa-location-dot"></i> <?php echo $banners['banner_address']; ?>
    </div>
  </div>
</section>
<!-- EOF Section Banner -->

<!-- Section ucapan pengantar -->
<section class="intro">
  <div class="intro__container">
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
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-2.jpg');">
      </div>
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-3.jpg');">
      </div>
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-1.jpg');">
      </div>
    </div>
  </div> <!-- EOF Slider Profile Groom -->

  <!-- Profile Details Groom -->
  <div class="profile__details">

    <figure class="profile__picture swiper-wrapper">
      <img src="http://localhost/putubajra/wp-content/uploads/2023/03/banner-3-p.jpg" alt="Profile picture groom"
        aria-hidden="true">
    </figure>

    <div class="profile__info">
      <div class="profile__info__dob">03 . 03</div>
      <h2 class="profile__info__name text-header">Ida Bagus Putu Bajra</h2>
      <hr>
      <p class="profile__info__desc">
        Putra pertama dari pasangan:<br>
        <strong>Ida Bagus Ketut Arjana</strong>
        <br>&<br>
        <strong>Ida Ayu Putu Martini</strong>
        <br><br>
        Br. Dinas Kauhan, Desa Kekeran, Busungbiu, Buleleng
      </p>
      <hr>
      <ul class="profile__info__socials">
        <li><a href="#"><i class="fa-brands fa-instagram social-ig"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook social-fb"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
      </ul>
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
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-1.jpg');">
      </div>
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-3.jpg');">
      </div>
      <div class="swiper-slide profile__slider__slide"
        style="background-image: url('http://localhost/putubajra/wp-content/uploads/2023/03/banner-2.jpg');">
      </div>
    </div>
  </div> <!-- EOF Slider Profile Bride -->

  <!-- Profile Details Bride -->
  <div class="profile__details">

    <figure class="profile__picture swiper-wrapper">
      <img src="http://localhost/putubajra/wp-content/uploads/2023/03/banner-2-p.jpg" alt="Profile picture bride"
        aria-hidden="true">
    </figure>

    <div class="profile__info">
      <div class="profile__info__dob">27 . 02</div>
      <h2 class="profile__info__name text-header">Ida Ayu Putri Widiantari</h2>
      <p class="profile__info__desc">
        Putri pertama dari pasangan:<br><br>
        <strong>Ida Bagus Rai Diksa</strong>
        <br>&<br>
        <strong>Ni Luh Wiarti</strong>
        <br><br>
        Jl. Turi No. 61, Br. Ujung, Kesiman, Denpasar
      </p>
      <hr>
      <ul class="profile__info__socials">
        <li><a href="#"><i class="fa-brands fa-instagram social-ig"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook social-fb"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-tiktok social-tiktok"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-linkedin-in social-linkedin"></i></a></li>
      </ul>
      <hr>
    </div>
  </div><!-- EOF Profile Details Bride -->
</section>
<!-- EOF Section Profile Bride -->


<?php get_footer('wedding'); ?>
