<?php
include("header.php");
?>
<div class="settings-top-status"></div>
<table class="form-table">
  <form class="wooresturant_update_settings_form" action="" method="POST">
    <input type="hidden" name="action" value="update_settings">
    <tbody>
      <tr valign="top">
        <th scope="row" class="titledesc">
          <label for="delivery_date_required"><?php echo __("Date Delivery required","wooresturant"); ?></label>
        </th>
        <td class="forminp forminp-text">
          <input type="checkbox" name="delivery_date_required" id="delivery_date_required" value="yes" <?php if(get_option( "wooresturant_delivery_date_required" ) == "yes") { echo "checked='Checked'"; } ?>>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc">
          <label for="delivery_enabled"><?php echo __("Delivery Enabled","wooresturant"); ?></label>
        </th>
        <td class="forminp forminp-text">
          <input type="checkbox" name="delivery_enabled" id="delivery_enabled" value="yes" <?php if(get_option( "wooresturant_delivery_enabled" ) == "yes") { echo "checked='Checked'"; } ?>>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc">
          <label for="take_away_enabled"><?php echo __("Take Away Enabled","wooresturant"); ?></label>
        </th>
        <td class="forminp forminp-text">
          <input type="checkbox" name="takeaway_enabled" id="takeaway_enabled" value="yes" <?php if(get_option( "wooresturant_takeaway_enabled" ) == "yes") { echo "checked='Checked'"; } ?>>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row" class="save_settings_status">
        </th>
        <td class="forminp forminp-text">
          <button type="submit" class="submit_btn button button-primary" name="update_settings">
            <?php echo __("Save Settings","wooresturant"); ?>
          </button>
        </td>
      </tr>
    </tbody>
  </form>
</table>
<?php
include("footer.php");
