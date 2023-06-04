<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			<a href="mailto:andrevers.info@gmail.com" target="_blank">
				<?php
				/* translators: %s: WordPress trademark */
				printf( esc_html__( 'Creato da %s', 'inspiro' ), 'Andrea Gondolo & Mattia Devigus' );
				?>
			</a>
		</span>
	</span>
</div><!-- .site-info -->
