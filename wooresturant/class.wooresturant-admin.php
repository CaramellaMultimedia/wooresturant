<?php

class WooResturant_Admin {

  public static function init() {

    add_action( 'wp_ajax_update_settings', array('WooResturant_Admin', 'update_settings') );

  }

  public static function update_settings() {

    //global $wpdb;
    $delivery_date_required = "no";
    if(!empty($_POST['delivery_date_required'])) { $delivery_date_required = "yes"; }
    update_option( "wooresturant_delivery_date_required", $delivery_date_required);

    $delivery_enabled = "no";
    if(!empty($_POST['delivery_enabled'])) { $delivery_enabled = "yes"; }
    update_option( "wooresturant_delivery_enabled", $delivery_enabled);

    $takeaway_enabled = "no";
    if(!empty($_POST['takeaway_enabled'])) { $takeaway_enabled = "yes"; }
    update_option( "wooresturant_takeaway_enabled", $takeaway_enabled);

    echo "<div class='notice notice-success'><p>" . __("Settings have been updated", "wooresturant") . "</p></div>";

    wp_die();

  }

  public static function admin_page() {

    include("templates/admin/admin.php");

  }

  public static function settings_page() {

    wp_enqueue_script( 'wooresturant-admin-ajax',  plugin_dir_url(__FILE__) . 'assets/js/admin/settings.js', array('jquery'), null, true );
    wp_localize_script( 'wooresturant-admin-ajax', 'wooresturant_admin_ajax_object', array('ajaxurl' => admin_url( 'admin-ajax.php' )));

    include("templates/admin/settings.php");

  }

}
?>
