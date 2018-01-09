<?php
/*
Plugin Name: BuddyPress Remove Members Slug
Description: Removes BuddyPress /members/ from users' slug. Requires "BuddyPress" plugin. Consider use the plugin "Restrict Usernames" to avoid problems with your pages.
Version: 1.0
Author: Shay Seferstein <shay1383@gmail.com>
Author URI: https://shay.seferstein.com
Plugin URI:  https://github.com/shay1383/buddypress-remove-members-slug
*/

// That is all.
add_filter( 'bp_core_enable_root_profiles', '__return_true' );