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

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'putubajra' ) ); ?>">
      <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'putubajra' ), 'WordPress' );
				?>
    </a>
    <span class="sep"> | </span>
    <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'putubajra' ), 'putubajra', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"
  integrity="sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri() . '/js/wedding.js'; ?>"></script>
</body>

</html>
