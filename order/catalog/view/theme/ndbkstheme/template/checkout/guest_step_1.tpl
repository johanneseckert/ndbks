<?php echo $header; ?>

    <!-- headline & infos -->
    <div class="grid_4 alpha">
      <div id="title">
        <h3><?php echo $heading_title; ?></h3>
      </div>
      <div id="indibike-static">
        <img src="/images/static.php?output=small&<?php echo http_build_query($_SESSION["bike"]) ?>" width="300" height="185" />
      </div>
      <div id="order-breadcrumb">
        <p><?php mlp_snippet("oc_cart_breadcrumb"); ?></p>
        <div class="steps step2">&nbsp;</div>
      </div>
      <?php mlp_snippet("oc_step2"); ?>
    </div>

    <!-- body/content from opencart -->
    <div class="grid_6 omega body">

      <div class="clearfix">

    <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="guest">

      <h4><?php echo $text_your_details; ?></h4>
      <div class="clearfix">

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_firstname; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="firstname" value="<?php echo $firstname; ?>" />
          <?php if ($error_firstname) { ?>
              <div class="ui-state-error"><?php echo $error_firstname; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_lastname; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="lastname" value="<?php echo $lastname; ?>" />
          <?php if ($error_lastname) { ?>
              <div class="ui-state-error"><?php echo $error_lastname; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_email; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="email" value="<?php echo $email; ?>" />
          <?php if ($error_email) { ?>
              <div class="ui-state-error"><?php echo $error_email; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_telephone; ?></p></div>
        <div class="grid_4 omega spaceafter">
          <input type="text" name="telephone" value="<?php echo $telephone; ?>" />
          <input type="hidden" name="fax" value="<?php echo $fax; ?>" />
          <?php if ($error_telephone) { ?>
              <div class="ui-state-error"><?php echo $error_telephone; ?></div>
          <?php } ?>
        </div>
        </p>

      </div>

      <h4><?php echo $text_your_address; ?></h4>
      <div class="clearfix">

        <p class="clearfix">
        <div class="grid_2 alpha"><p><?php echo $entry_company; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="company" value="<?php echo $company; ?>" />
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_address_1; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="address_1" value="<?php echo $address_1; ?>" />
          <?php if ($error_address_1) { ?>
              <div class="ui-state-error"><?php echo $error_address_1; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha"><p><?php echo $entry_address_2; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="address_2" value="<?php echo $address_2; ?>" />
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_postcode; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="postcode" value="<?php echo $postcode; ?>" />
          <?php if ($error_postcode) { ?>
              <div class="ui-state-error"><?php echo $error_postcode; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_city; ?></p></div>
        <div class="grid_4 omega">
          <input type="text" name="city" value="<?php echo $city; ?>" />
          <?php if ($error_city) { ?>
              <div class="ui-state-error"><?php echo $error_city; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_country; ?></p></div>
        <div class="grid_4 omega">
          <select name="country_id" id="country_id" onchange="$('select[name=\'zone_id\']').load('index.php?route=checkout/guest_step_1/zone&country_id=' + this.value + '&zone_id=<?php echo $zone_id; ?>'); $('#postcode').load('index.php?route=checkout/guest_step_1/postcode&country_id=' + this.value);">
            <option value="FALSE"><?php echo $text_select; ?></option>
            <?php foreach ($countries as $country) { ?>
              <?php if ($country['country_id'] == $country_id) { ?>
                <option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
              <?php } else { ?>
                <option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
              <?php } ?>
            <?php } ?>
          </select>
          <?php if ($error_country) { ?>
              <div class="ui-state-error"><?php echo $error_country; ?></div>
          <?php } ?>
        </div>
        </p>

        <p class="clearfix">
        <div class="grid_2 alpha required"><p><?php echo $entry_zone; ?></p></div>
        <div class="grid_4 omega">
          <select name="zone_id"></select>
          <?php if ($error_zone) { ?>
              <div class="ui-state-error"><?php echo $error_zone; ?></div>
          <?php } ?>
        </div>
        </p>

      </div>

      <!-- start extra shipping address -->
      <div class="spaceafter">
      <?php if ($shipping_indicator) { ?>
        <input type="checkbox" value="1" checked="checked" onchange="(this.checked) ? $('#shipping_details').css('display','block') : $('#shipping_details').css('display','none');" name="shipping_indicator" id="shipping_indicator" /><label for="shipping_indicator"><?php echo $text_indicator; ?></label>
      <?php } else { ?>
        <input type="checkbox" value="1" onclick="(this.checked) ? $('#shipping_details').css('display','block') : $('#shipping_details').css('display','none');" name="shipping_indicator" id="shipping_indicator" /><label for="shipping_indicator"><?php echo $text_indicator; ?></label>
      <?php } ?>
      </div>
      
      <div id="shipping_details" style="<?php echo ($shipping_indicator) ? 'display:block;' : 'display:none;' ?>">
        
      <h4><?php echo $text_shipping_address; ?></h4>
      <div class="clearfix">

          <p class="clearfix">
          <div class="grid_2 alpha"><p><?php echo $entry_company; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_company" value="<?php echo $shipping_company; ?>" />
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_firstname; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_firstname" value="<?php echo $shipping_firstname; ?>" />
            <?php if ($error_shipping_firstname) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_firstname; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_lastname; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_lastname" value="<?php echo $shipping_lastname; ?>" />
            <?php if ($error_shipping_lastname) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_lastname; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_address_1; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_address_1" value="<?php echo $shipping_address_1; ?>" />
            <?php if ($error_shipping_address_1) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_address_1; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha"><p><?php echo $entry_address_2; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_address_2" value="<?php echo $shipping_address_2; ?>" />
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_postcode; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_postcode" value="<?php echo $shipping_postcode; ?>" />
            <?php if ($error_shipping_postcode) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_postcode; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_city; ?></p></div>
          <div class="grid_4 omega">
            <input type="text" name="shipping_city" value="<?php echo $shipping_city; ?>" />
            <?php if ($error_shipping_city) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_city; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_country; ?></p></div>
          <div class="grid_4 omega">
            <select name="shipping_country_id" id="shipping_country_id" onchange="$('select[name=\'shipping_zone_id\']').load('index.php?route=checkout/guest_step_1/zone&country_id=' + this.value + '&zone_id=<?php echo $shipping_zone_id; ?>'); $('#shipping_postcode').load('index.php?route=checkout/guest_step_1/postcode&country_id=' + this.value);">
                <option value="FALSE"><?php echo $text_select; ?></option>
                <?php foreach ($countries as $country) { ?>
                <?php if ($country['country_id'] == $shipping_country_id) { ?>
                <option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
                <?php } ?>
                <?php } ?>
            </select>
            <?php if ($error_shipping_country) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_country; ?></div>
            <?php } ?>
          </div>
          </p>

          <p class="clearfix">
          <div class="grid_2 alpha required"><p><?php echo $entry_zone; ?></p></div>
          <div class="grid_4 omega">
            <select name="shipping_zone_id"></select>
            <?php if ($error_shipping_zone) { ?>
                <div class="ui-state-error"><?php echo $error_shipping_zone; ?></div>
            <?php } ?>
          </div>
          </p>

      </div>


      </div>

      <div class="buttons">
        <table>
          <tr>
            <td align="left"><a onclick="location = '<?php echo str_replace('&', '&amp;', $back); ?>'" class="button"><span><?php mlp_snippet("oc_backto_step1"); ?></span></a></td>
            <td align="right"><a onclick="$('#guest').submit();" class="button"><span><?php mlp_snippet("oc_goto_step3"); ?></span></a></td>
          </tr>
        </table>
      </div>
    </form>

    </div>
    <!-- end of grid_6 right column -->

<script type="text/javascript">
$('select[name=\'zone_id\']').load('index.php?route=checkout/guest_step_1/zone&country_id=<?php echo $country_id; ?>&zone_id=<?php echo $zone_id; ?>');
$('select[name=\'shipping_zone_id\']').load('index.php?route=checkout/guest_step_1/zone&country_id=<?php echo $shipping_country_id; ?>&zone_id=<?php echo $shipping_zone_id; ?>');
$('#postcode').load('index.php?route=checkout/guest_step_1/postcode&country_id=<?php echo $country_id; ?>');
$('#shipping_postcode').load('index.php?route=checkout/guest_step_1/postcode&country_id=<?php echo $shipping_country_id; ?>');
</script>



<?php echo $footer; ?> 