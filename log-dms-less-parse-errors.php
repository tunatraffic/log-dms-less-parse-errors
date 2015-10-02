<?php
/**
 * Plugin Name: Log DMS LESS Parse Errors
 * Description: Because it's nice to know when things blow up ;)
 * Author: Evan Mattson
 */

add_filter('pre_set_theme_mod_less_last_error', function($error)
{
	do_action('dms/less/parse_error', $error);

	trigger_error($error, E_USER_WARNING);

	return $error;
});
