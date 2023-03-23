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
@media (min-width: 1024px) {
  <?php foreach($banner_sliders as $key=> $banner): ?> body .banner__slider .banner__slider__slide.slide<?php echo $key + 1;

  ?> {
    background-image: url('<?php echo $banner['full_image_url']; ?>') !important;
  }

  <?php endforeach;
  ?>
}

</style>

<!-- Section Banner -->
<section class="banner">
  <div class="banner__slider swiper-slider">
    <div class="banner__slider__wrapper swiper-wrapper">
      <?php foreach($banner_sliders_portrait as $key => $banner){ ?>
      <div class="swiper-slide banner__slider__slide slide<?php echo $key + 1; ?>"
        style="background-image: url('<?php echo $banner['full_image_url']; ?>');"></div>
      <?php } ?>
    </div>
  </div>
  <div class="banner__content">
    <div class="banner__content__subtitle"> Pawiwahan</div>
    <div class="banner__content__name">
      <h1>
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
    <h2><?php echo $intros['intro_title']; ?></h2>
    <p><?php echo $intros['intro_text']; ?></p>
  </div>
</section>
<!-- EOF Section ucapan pengantar -->

<!-- Section Profile -->
<section class="profile profile--groom">

</section>
<!-- EOF Section Profile -->


<?php get_footer('wedding'); ?>
