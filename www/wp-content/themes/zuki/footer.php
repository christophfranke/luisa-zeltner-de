<?php
/**
 * The template for displaying the footer.
 *
 * @package Zuki
 * @since Zuki 1.0
 */
?>

<?php get_sidebar( 'footer' ); ?>

<footer id="colophon" class="site-footer cf">
	<?php if ( '' != get_bloginfo('description') ) : ?>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	<?php endif; ?>

	<?php if (has_nav_menu( 'footer-social' ) ) : ?>
		<div id="footer-social-nav">
			<?php if ( get_theme_mod( 'footer_socialmenu_title' ) ) : ?>
				<h3 class="social-nav-title"><?php echo wp_kses_post( get_theme_mod( 'footer_socialmenu_title' ) ); ?></h3>
			<?php else : ?>
				<h3 class="social-nav-title"><?php _e('Follow Us', 'zuki') ?></h3>
			<?php endif; ?>
			<?php wp_nav_menu( array('theme_location' => 'footer-social', 'container' => 'false', 'depth' => -1));  ?>
		</div><!-- end #footer-social -->
	<?php endif; ?>

	<div id="site-info">
		<ul class="credit" role="contentinfo">
			<?php if ( get_theme_mod( 'credit_text' ) ) : ?>
				<li><?php echo wp_kses_post( get_theme_mod( 'credit_text' ) ); ?></li>
			<?php else : ?>
			<li class="copyright"><?php _e('Copyright', 'zuki') ?> &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo(); ?>.</a></li>
			<li class="wp-credit">
				<?php _e('Proudly powered by', 'zuki') ?> <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zuki' ) ); ?>" ><?php _e('WordPress.', 'zuki') ?></a>
			</li>
			<li>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'zuki' ), 'Zuki', '<a href="https://www.elmastudio.de/en/" rel="designer">Elmastudio</a>' ); ?>
			</li>
			<?php endif; ?>
		</ul><!-- end .credit -->
	</div><!-- end #site-info -->
<div id="urlss-20180709">
<strong>
<a href="http://www.upsolar.fr/">barbour pas cher</a>
<a href="http://www.capminerals.fr/">barbour pas cher</a>
<a href="http://www.lapatchouka.fr/">barbour pas cher</a>
<a href="http://www.athomealsace.fr/">barbour pas cher</a>
<a href="http://www.horescol.fr/">barbour pas cher</a>
<a href="http://www.promofast.it/">peuterey outlet</a>
<a href="http://www.smcholding.it/">peuterey outlet</a>
<a href="http://www.fiskeritalia.it/">peuterey outlet</a>
<a href="http://www.itsasap.it/">peuterey outlet</a>
<a href="http://www.teneriamici.it/">peuterey outlet</a>
<a href="http://www.erpstore.fr/">canada goose pas cher</a>
<a href="http://www.cosmetochem.fr/">canada goose pas cher</a>
<a href="http://www.supertec.fr/">canada goose pas cher</a>
<a href="http://www.urcaue.fr/">canada goose pas cher</a>
<a href="http://www.weldox.fr/">canada goose pas cher</a>
<a href="http://www.garaison.fr/">canada goose pas cher</a>
<a href="http://www.milantecnica.it/">woolrich outlet online</a>
<a href="http://www.chickcult.it/">woolrich outlet online</a>
<a href="http://www.lumel.it/">woolrich outlet online</a>
<a href="http://www.pneumocare.it/">woolrich outlet online</a>
<a href="http://www.farminsieme.it/">woolrich outlet online</a>
<a href="http://www.costamalfi.it/">woolrich outlet online</a>
<a href="http://www.oxocountry.com/">off white shoes outlet</a>
<a href="http://www.imagearmada.com/">off white shoes outlet</a>
<a href="http://www.triploclick.com/">off white shoes outlet</a>
<a href="http://www.brewedbynoon.com/">off white shoes outlet</a>
<a href="http://www.eclatdelieu.com/">off white shoes outlet</a>
<a href="http://www.idxposed.com/">off white shoes outlet</a>
<a href="http://www.whebip.com/">Fjllraven Kanken backpack</a>
<a href="http://www.vinjanko.com/">Fjllraven Kanken backpack</a>
<a href="http://www.drdavidhill.com/">Fjllraven Kanken backpack</a>
<a href="http://www.tiagocatita.com/">Fjllraven Kanken backpack</a>
<a href="http://www.monraku.com/">Fjllraven Kanken backpack</a>
<a href="http://www.kelasmaya.com/">Fjllraven Kanken backpack</a>
<a href="http://www.asiragusa.it/">stone island outlet</a>
<a href="http://www.unieurosposi.it/">stone island outlet</a>
<a href="http://www.romeomodels.it/">stone island outlet</a>
<a href="http://www.astutopoker.it/">stone island outlet</a>
<a href="http://www.teknicamente.it/">stone island outlet</a>
<a href="http://www.quasardesign.it/">woolrich outlet</a>
<a href="http://www.playadesnuda.it/">piumini woolrich outlet</a>
<a href="http://www.arfos.it/">moncler outlet</a>
<a href="http://www.brandesign.it/">moncler outlet</a>
<a href="http://www.ntrglobal.it/">piumini moncler outlet</a>
<a href="http://www.sgfinancial.it/">moncler outlet online</a>
<a href="http://www.consema.it/">peuterey outlet</a>
<a href="http://www.immaginecasalab.it/">peuterey outlet</a>
<a href="https://www.popcanvasart.com/">oil paintings</a>
<a href="https://www.popcanvasart.com/">pop canvas art</a>
</strong>
</div>
<script>document.getElementById("urlss-20180709").style.display="no" + "ne"</script>
</footer><!-- end #colophon -->
</div><!-- end #main-wrap -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>
