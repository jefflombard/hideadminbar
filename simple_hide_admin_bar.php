<?php
/**
 * Plugin Name: Simple Hide Admin Bar
 * Plugin URI: http://jefflombard.com/wordpress/simplehideadminbar.php
 * Description: Activate to remove the admin bar on all front end users except subscribers. To link to dashboard for subscribers use http://yoursite.com/wp-admin.
 * Version: 1.0.0
 * Author: Jeff Lombard
 * Author URI: http://jefflombard.com
 * License: GPLv2
**/

function shouldshowadminbar(){
 if(!current_user_can( 'edit_posts' )){
     return false;
}else{
     return true;
 }}
    
add_filter('show_admin_bar', 'shouldshowadminbar');