<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

 $baseUrl = get_bloginfo('url');

?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<h3>Google, luego existo</h3>
			<br>
			<ul>
        <li><a href="<?= $baseUrl ?>/contacto">Contacto</a></li>
        <li><a href="<?= $baseUrl ?>/aviso-legal">Aviso Legal</a></li>
        <li><a href="<?= $baseUrl ?>/politica-de-privacidad">Política de privacidad</a></li>
        <li><a href="<?= $baseUrl ?>/politica-de-cookies">Política de cookies</a></li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
