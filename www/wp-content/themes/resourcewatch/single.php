<?php get_header(); ?>
<main id="main">
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="post-head">
			<div class="container">
				<div class="category">
					<?php the_category( ', ' ); ?>
				</div>
				<?php the_title( '<h1>', '</h1>' ); ?>
				<ul class="info-list">
					<li>
						<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> <?php _e( 'by', 'resourcewatch' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
					</li>
					<li>
						<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
							<?php the_time( 'F j, Y' ) ?>
						</time>
					</li>
				</ul>
			</div>
		</div>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-image">
				<?php the_post_thumbnail( 'thumbnail_1500x400' ); ?>
			</div>
		<?php endif; ?>

		<div class="post-content container">
			<div class="row">
				<div class="column col-2">
					<span class="st_sharethis_custom"><?php _e( 'Share story', 'resourcewatch' ); ?></span>
				</div>
				<div class="column col-8">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
					<?php comments_template(); ?>
				</div>
			</div>
		</div>

		<?php get_template_part( 'blocks/pager-single', get_post_type() ); ?>

	<?php endwhile; ?>
</main>
<?php get_footer(); ?>