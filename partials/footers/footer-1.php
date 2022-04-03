<?php
/**
 * Footer #1
 *
 * @package Go
 */

$has_background = Go\has_footer_background();
?>

<footer id="colophon" class="site-footer site-footer--1 <?php echo esc_attr( $has_background ); ?>">

	<div class="site-footer__inner max-w-wide m-auto text-center">

		<?php Go\social_icons( array( 'class' => 'social-icons list-reset' ) ); ?>

		<?php if ( has_nav_menu( 'footer-1' ) || is_customize_preview() ) : ?>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'go' ); ?>">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-1',
							'menu_class'     => 'footer-menu footer-menu--1 list-reset',
							'depth'          => 1,
						)
					);
				?>
			</nav>
		<?php endif; ?>

		<div class="site-footer__inner max-w-wide m-auto text-center">
			<a href="https://bezlik.org/2022/02/latarnie-pnwm/" target="_blank">
				<img src="<?= get_stylesheet_directory_uri() ?>/img/latarnie_dpjw_online.svg" style="height:75px;" alt="Latarnie PNWM / DPJW Leuchtürme" />
			</a>
			<a href="https://pnwm.org/" target="_blank" rel="nofollow">
				<img src="<?= get_stylesheet_directory_uri() ?>/img/pnwm_150px.png" style="height:75px;" alt="Projekt dofinansowała Polsko-Niemiecka Współpraca Młodzieży" />
			</a>
		</div>


		<div class="site-footer__inner max-w-wide m-auto text-center copyright-footer">
			<h6>Copyright by MDSM Mikuszewo 2016-<?= date("Y") ?></h6>
		</div>
		
	</div>

</footer>
