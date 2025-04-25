<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			get_template_part( 'template-parts/dynamic-footer' );
		} else {
			get_template_part( 'template-parts/footer' );
		}
	}
}
?>

<?php wp_footer(); ?>
<script>
  window.addEventListener('load', () => {
    const splash = document.getElementById('splash-logo');
    const splashImg = splash.querySelector('img');
    const siteLogo = document.getElementById('site-logo');

    if (!siteLogo || !splashImg) {
      splash?.remove();
      return;
    }

    const siteLogoRect = siteLogo.getBoundingClientRect();
    const splashRect = splashImg.getBoundingClientRect();

    // Calculate the basic delta
    const deltaX = siteLogoRect.left - splashRect.left;
    const deltaY = siteLogoRect.top - splashRect.top;

    // Shrink factor
    const rawScale = siteLogoRect.width / splashRect.width;
    const scale = rawScale * 0.25; // Shrink even more if you want

    // 🔧 Adjust for the vertical shift caused by scaling
    const offsetY = (splashRect.height - splashRect.height * scale) / 2;
    const offsetX = (splashRect.width - splashRect.width * scale) / 2;

    // Final transform with adjusted offset
    splashImg.style.transform = `translate(${deltaX + offsetX}px, ${deltaY + offsetY}px) scale(${scale})`;

    // Fade out after transition
    setTimeout(() => {
      splash.style.opacity = 0;
      setTimeout(() => {
        splash.style.display = 'none';
      }, 1000);
    }, 1000);
  });
</script>







</body>
</html>
