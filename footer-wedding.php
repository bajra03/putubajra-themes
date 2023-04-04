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
  <a href="" id="btn-toggle-audio"><i class="fa-solid fa-play"></i></a>
</div>
<!-- EOF Toggle audio -->

<!-- Back to top -->
<div class="to-top">
  <a href="" id="btn-to-top">
    <i class="fa-solid fa-angle-up"></i>
  </a>
</div>
<!-- EOF Back to top -->


<footer id="colophon" class="site-footer">
  <div class="site-info">
    Develop by <a href="<?php echo get_home_url(); ?>"> Bajra</a>, with full of <i class="fa-solid fa-heart"></i>
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
