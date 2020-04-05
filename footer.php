<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drivitty
 */

?>


<footer id="colophon" class="site-footer">


</footer><!-- #colophon -->


<?php wp_footer(); ?>
<script type="text/javascript" src="wp-content/themes/drivity/js/slick.min.js"></script>
<script>

  jQuery(document).ready(function () {
    jQuery('.cpt-news-slider .slider').each(function () {
      jQuery(this).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        nextArrow: '<div class="sl-btn cpt-next"></div>',
        prevArrow: '<div class="sl-btn cpt-prev"></div>',
        appendArrows: jQuery('.featured-image', this),
        arrows: true,
        fade: true,
        dots: false,
      });
    });

    jQuery('.sl-btn.cpt-next').click(function () {
      jQuery(".cpt-news-slider .slider").slick('slickNext');
    })
    jQuery('.sl-btn.cpt-prev').click(function () {
      jQuery(".cpt-news-slider .slider").slick('slickPrev');
    })
  });

</script>
</body>
</html>
