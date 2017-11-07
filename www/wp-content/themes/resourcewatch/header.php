<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>">		
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="page-wrap">
			
			<header id="header" class="header">
				<div class="container">
					<?php if ( function_exists( 'the_custom_logo' ) ) : ?>
						<div class="logo" itemscope itemtype="http://schema.org/Brand">
							<?php the_custom_logo(); ?>
						</div>
					<?php endif; ?>
					
					<?php if( has_nav_menu( 'primary' ) )
						wp_nav_menu( array(
							'container' => false,
							'theme_location' => 'primary',
							'menu_id'        => 'navigation',
							'menu_class'     => 'primary-nav',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'walker'         => new Custom_Walker_Nav_Menu
						) ); ?>

					<div class="search-holder">
						<a href="#" class="search-opener"></a>
						<?php get_search_form(); ?>
					</div>

					<?php
						$header_login_icon = get_field( 'header_login_icon', 'option', false );
						$header_login_link = get_field( 'header_login_link', 'option' );
					?>
					<?php if ( $header_login_icon ) : ?>
						<?php if ( $header_login_link ) : ?><a class="user" href="<?php echo esc_url( $header_login_link ); ?>"><?php endif; ?>
						<?php echo wp_get_attachment_image( $header_login_icon, 'full' ); ?>
						<?php if ( $header_login_link ) : ?></a><?php endif; ?>
					<?php endif; ?>
				</div>

			</header>