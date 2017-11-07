<?php $sq = get_search_query() ? get_search_query() : __( 'Enter search terms&hellip;', 'resourcewatch' ); ?>
<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
	<fieldset>
		<input type="search" name="s" placeholder="<?php echo $sq; ?>" value="<?php echo get_search_query(); ?>" />
		<button type="submit"><i class="fa fa-search"></i></button>
	</fieldset>
</form>