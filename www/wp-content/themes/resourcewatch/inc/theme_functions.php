<?php
// Theme functions

add_filter( 'dynamic_sidebar_params', 'resourcewatch_dynamic_sidebar_params' );

function resourcewatch_dynamic_sidebar_params( $params ) {
	if ( $widget_title_link = get_field( 'widget_title_link', 'widget_' . $params[0]['widget_id'] ) ) {
		$params[0]['before_title'] .= '<a href="' . esc_url( $widget_title_link ) . '">';
		$params[0]['after_title'] = '</a>' . $params[0]['after_title'];
	}
	return $params;
}
