jQuery(document).ready(function($) {

    jQuery('.wooresturant_update_settings_form').submit(function(e) {

      $('.settings-top-status').html("");
      $('.save_settings_status').html('<img src="./images/spinner.gif">');

      e.preventDefault();

      $.ajax({
          url: wooresturant_admin_ajax_object.ajaxurl,
          type: 'post',
          data: $('form').serialize(),
          success: function( response ) {
              console.log(response);
              $('.save_settings_status').html("");
              $('.settings-top-status').html(response);
          },
      });

    })

});
