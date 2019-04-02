<?php
/**
 * Contains all the current date, year of the theme.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */
/**
 * To display the current year.
 *
 * @uses date() Gets the current year.
 * @return string
 */
function interface_the_year() {
   return date( 'Y ' );
}
/**
 * To display a link back to the site.
 *
 * @uses get_bloginfo() Gets the site link
 * @return string
 */
function interface_site_link() {
   return '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a> ';
}
/**
 * To display a link to WordPress.org.
 *
 * @return string
 */
function interface_wp_link() {
   return '<a href="'.esc_url( 'http://wordpress.org' ).'" target="_blank" title="' . esc_attr__( 'WordPress', 'interface' ) . '"><span>' . __( 'WordPress', 'interface' ) . '</span></a> ';
}
/**
 * To display a link to interface.
 *
 * @return string
 */
function interface_themehorse_link() {
   return '<a href="'.esc_url( 'http://themehorse.com' ).'" target="_blank" title="'.esc_attr__( 'Theme Horse', 'interface' ).'" ><span>'.__( 'Theme Horse', 'interface') .'</span></a> ';
}
/**
 * To display a link to privacy policy.
 *
 * @return string
 */
function interface_themehorse_privacy() {
	if (function_exists('the_privacy_policy_link')) {
		the_privacy_policy_link('', ' | ');
	}
}
?>
