<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package putubajra
 */

?>
<!-- Toggle audio -->
<div class="toggle-audio">
  <a href="#" id="btn-toggle-audio"><i class="fa-solid fa-play"></i></a>
</div>
<!-- EOF Toggle audio -->

<!-- Back to top -->
<div class="to-top">
  <a href="#" id="btn-to-top">
    <i class="fa-solid fa-angle-up"></i>
  </a>
</div>
<!-- EOF Back to top -->

<!-- Audio -->
<audio id="myAudio" loop>
  <source src="<?php echo get_template_directory_uri(); ?>/assets/audios/audio-1.mp3" type="audio/ogg">
  <source src="<?php echo get_template_directory_uri(); ?>/assets/audios/audio-1.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<!-- EOF Audio -->

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url(__('https://wordpress.org/', 'putubajra')); ?>">
      <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'putubajra'), 'WordPress');
            ?>
    </a>
    <span class="sep"> | </span>
    <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', 'putubajra'), 'putubajra', '<a href="http://underscores.me/">Underscores.me</a>');
        ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script type="module">
import PhotoSwipeLightbox from '<?php echo get_template_directory_uri(); ?>/js/photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
  gallery: '#galleries',
  children: 'a',
  pswpModule: () => import('<?php echo get_template_directory_uri(); ?>/js/photoswipe.esm.js'),
});

lightbox.init();
</script>
</body>

</html>
