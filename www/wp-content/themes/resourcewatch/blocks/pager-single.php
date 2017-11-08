<?php $prev = get_previous_post_link( __( '%link', 'resourcewatch' ), '<span class="pager-title">' . __( 'Previous', 'resourcewatch' )  . '</span><span class="">%title</span>' ) ?>
<?php $next = get_next_post_link( __( '%link', 'resourcewatch' ), '<span class="pager-title">' . __( 'Next', 'resourcewatch' )  . '</span><span class="">%title</span>' ); ?>
<?php if ( $prev || $next ) : ?>
	<div class="navigation-single">
		<div class="container">
			<?php if ( $next ) : ?>
				<div class="next">
					<?php echo $next; ?>
				</div>
			<?php endif; ?>
			<?php if ( $prev ) : ?>
				<div class="prev">
					<?php echo $prev; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>