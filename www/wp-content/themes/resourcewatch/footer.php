		</div>
		
		<div class="footer-holder">
			<div class="nav-holder">
				<div class="container">
					<?php
						$footer_logo = get_field( 'footer_logo', 'option', false );
						$footer_logo_link = get_field( 'footer_logo_link', 'option' );
					?>
					<?php if ( $footer_logo ) : ?>
						<div class="secondary-logo">
							<?php if ( $footer_logo_link ) : ?><a href="<?php echo esc_url( $footer_logo_link ); ?>"><?php endif; ?>
							<?php echo wp_get_attachment_image( $footer_logo, 'full' ); ?>
							<?php if ( $footer_logo_link ) : ?></a><?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-navigation' ) ) : ?>
						<div class="secondary-nav">
							<?php dynamic_sidebar( 'footer-navigation' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			
			<?php
				$partners_title = get_field( 'partners_title', 'option' );
				$partners_title_link = get_field( 'partners_title_link', 'option' );
			?>
			<?php if ( have_rows( 'partners', 'option' ) ) : ?>
				<div class="partners">
					<div class="container">
						<?php if ( $partners_title ) : ?>
							<h3>
								<?php if ( $partners_title_link ) : ?><a href="<?php echo esc_url( $partners_title_link ); ?>"><?php endif; ?>
								<?php echo $partners_title; ?>
								<?php if ( $partners_title_link ) : ?></a><?php endif; ?>
							</h3>
						<?php endif; ?>
						<div class="slick-slider">
							<?php while ( have_rows( 'partners', 'option' ) ) : the_row(); ?>
								<?php
									$logo = get_sub_field( 'logo', false );
									$link = get_sub_field( 'link' );
								?>
								<?php if ( $logo ) : ?>
									<div class="slide">
									<?php if ( $link ) : ?><a href="<?php echo esc_url( $link ); ?>"><?php endif; ?>
									<?php echo wp_get_attachment_image( $logo, 'full' ); ?>
									<?php if ( $link ) : ?></a><?php endif; ?>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<footer id="footer" class="footer">
				<div class="container">
					<?php
						$footer_bottom_logo = get_field( 'footer_bottom_logo', 'option', false );
						$footer_bottom_logo_link = get_field( 'footer_bottom_logo_link', 'option' );
						$footer_contact_info = get_field( 'footer_contact_info', 'option' );
					?>

					<?php if ( $footer_bottom_logo ) : ?>
						<div class="footer-logo">
							<?php if ( $footer_bottom_logo_link ) : ?><a href="<?php echo esc_url( $footer_bottom_logo_link ); ?>" target="_blank"><?php endif; ?>
							<?php echo wp_get_attachment_image( $footer_bottom_logo, 'full' ); ?>
							<?php if ( $footer_bottom_logo_link ) : ?></a><?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ( $footer_contact_info ) : ?>
						<div class="footer-content">
							<?php echo $footer_contact_info; ?>
						</div>
					<?php endif; ?>

				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>