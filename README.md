BuddyPress Remove Members Slug

If you want to get rid of BuddyPress' annoying /Members/ slug, simply use this plugin.
For example: www.example.com/members/john/ >> www.example.com/john/

Consider using the plugin "Restrict Usernames" to avoid problems with your pages.

If you are familiar with functions.php I suggest to use the following line instead of using the plugin:

add_filter( 'bp_core_enable_root_profiles', '__return_true' );

If you are not familiar with functions.php, simply go to your WordPress Dashboard >> Plugins >> Add New >> Upload 
and then upload, install and activate the .zip file.
