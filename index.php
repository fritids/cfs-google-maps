<?php
/*
Plugin Name: CFS - Google Maps Add-on
Plugin URI: https://uproot.us/
Description: Adds a Google Maps field type.
Version: 1.0.0
Author: Matt Gibbs
Author URI: https://uproot.us/
License: GPL2
*/

$cfs_google_maps_addon = new cfs_google_maps_addon();

class cfs_google_maps_addon
{
    function __construct() {
        add_filter('cfs_field_types', array($this, 'cfs_field_types'));
    }

    function cfs_field_types( $field_types ) {
        $field_types['google_maps'] = dirname( __FILE__ ) . '/google_maps.php';
        return $field_types;
    }
}
