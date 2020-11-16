<?php

class WooResturant {

  public static function plugin_activation() {

    add_option( "wooresturant_delivery_date_required", "yes");
    add_option( "wooresturant_delivery_enabled", "yes");
    add_option( "wooresturant_takeaway_enabled", "yes");

  }

  public static function plugin_deactivation() {



  }



}
?>
