<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="container">
			<p>
				<a target="_blank" href="http://www.raizesescola.com.br/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoraizes.png" alt="" class="logos"/>
					
				</a>
				<span id="mais-footer"> + </span>
				<a target="_blank" href="https://br.wordpress.org/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.png" alt="" class="gira logos"/>
				</a>

			</p>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
