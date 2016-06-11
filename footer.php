<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

				<div class="footer-text">
				<h5>Code for Africa</h5>
				<p>Code for Africa is the continent’s largest federation of civic technology and digital democracy organisations that seek to empower citizens by giving them access to actionable information along with new ways to amplify their voices. The federation operates a network of civic labs and manages pan-African digital infrastructure, with country-based affiliates in Cameroon, Ethiopia, Ghana, Kenya, Nigeria, South Africa, Tanzania, and Uganda, with additional projects in another 15 African countries.</p>
			</div><!-- /.footer-text -->

				<div class="footer-partners">
				<div class="logos">
					<a href="http://www.codeforafrica.org/" target="_blank"><img src="/wp-content/uploads/2016/06/c4a.png"  alt="Visit Code For Africa website" /></a> 
					<a href="http://icfj.org/" target="_blank"><img src="/wp-content/uploads/2016/06/icfj-white.png" alt="Visit ICFJ website" /></a> 
				</div><!-- /.logos -->

				<div class="socials">
					<ul>
						<li>
							<span>3, 414 followers</span>
							<a target="_blank" href="https://twitter.com/code4africa">
								&nbsp;FOLLOW &nbsp;<img src="/wp-content/uploads/2016/06/icon-twitter-small.png" alt="Follow"/>
							</a>
						</li>
						<li>
							<span>29,446 fans</span>
							<a target="_blank" href="https://www.facebook.com/impactafricacontest/">
								&nbsp;LIKE &nbsp;<img src="/wp-content/uploads/2016/06/icon-facebook-small.png" alt="Like"/>
									</a>
						</li>
					</ul>
				</div><!-- /.socials -->
			</div><!-- /.footer-partners -->

		</div><!-- /.shell -->
		</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>