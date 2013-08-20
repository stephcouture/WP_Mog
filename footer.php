<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mog
 * @since Mog 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'mog_credits' ); ?>
			À l'exception des textes diffusés dans des revues tiers (voir page "publications", le contenu de ce site est est placé sous une licence 
			Creative Commons <a href = "http://creativecommons.org/licenses/by-nc-sa/2.5/ca/deed.fr">Paternité, 
			Pas d’Utilisation Commerciale, Partage dans les mêmes conditions</a>. Pour les droits 
			d'utilisation des publications, veuillez vous référer à la version officielle.<br>
			<?php printf( __( 'Fonctionne avec %1$s.'), '<a href="http://wordpress.org/">WordPress</a>'); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Thème: %1$s.'), '<a href="https://github.com/stephcouture/WP_Mog" rel="designer">Mog personnalisé</a>'); ?>			
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>