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
        <div class="steps step3">&nbsp;</div>
      </div>
      <?php mlp_snippet("oc_step3"); ?>
    </div>

    <!-- body/content from opencart -->
    <div class="grid_6 omega body">


    <?php if ($success) { ?>
    <div class="ui-state-highlight"><?php echo $success; ?></div>
    <?php } ?>
    <?php if ($error_warning) { ?>
    <div class="ui-state-error style"><?php echo $error_warning; ?></div>
    <?php } ?>
    <?php if ($coupon_status) { ?>

    <h4><?php mlp_snippet("oc_coupon_headline"); ?></h4>
    <div>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="coupon">
        <p><?php echo $text_coupon; ?></p>
        <div><p><?php echo $entry_coupon; ?>
        <input type="text" name="coupon" value="<?php echo $coupon; ?>" />
        &nbsp;<a onclick="$('#coupon').submit();" class="button"><span><?php echo $button_coupon; ?></span></a></p></div>
      </form>
    </div>
    <?php } ?>

    <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="guest">
      <?php if ($shipping_methods) { ?>
      <h4><?php echo $text_shipping_method; ?></h4>
      <div>
        <p><?php echo $text_shipping_methods; ?></p>
        <p class="buttonset" id="shipping-buttons">

  <?php 
  foreach ($shipping_methods as $shipping_method) {
  foreach ($shipping_method['quote'] as $quote) {
    
    if (!$shipping)
      $shipping = $quote['id'];
  
    switch ($quote['id']) {
      case "flat.flat": ?>
<input type="radio" name="shipping_method" value="flat.flat" id="ship_flat" <?php if ($quote['id'] == $shipping) echo 'checked="checked"'; ?> /><label for="ship_flat">
  <span class="ship_title"><?php mlp_snippet("ship_pickup_title"); ?></span>
  <span class="ship_sub"><?php mlp_snippet("ship_pickup_sub"); ?></span>
  <span class="ship_cost"><?php mlp_snippet("ship_pickup_cost"); ?></span>
</label>
      <?php 
        break;
      case "free.free": ?>
<input type="radio" name="shipping_method" value="free.free" id="ship_free" <?php if ($quote['id'] == $shipping) echo 'checked="checked"'; ?> /><label for="ship_free">
  <span class="ship_title"><?php mlp_snippet("ship_free_title"); ?></span>
  <span class="ship_sub"><?php mlp_snippet("ship_free_sub"); ?></span>
  <span class="ship_cost"><?php mlp_snippet("ship_free_cost"); ?></span>
</label>
      <?php
        break;
      case "item.item": ?>
<input type="radio" name="shipping_method" value="item.item" id="ship_item" <?php if ($quote['id'] == $shipping) echo 'checked="checked"'; ?> /><label for="ship_item" id="ship_item_label">
  <span class="ship_title"><?php mlp_snippet("ship_intl_title"); ?></span>
  <span class="ship_sub"><?php mlp_snippet("ship_intl_sub"); ?></span>
  <span class="ship_cost"><?php mlp_snippet("ship_intl_cost"); ?></span>
</label>
      <?php
        break;
    }
  
  }
  } ?>
  
        </p>
      </div>
      <?php } // end if ($shipping_methods) ?>


      <?php if ($payment_methods) { ?>
      <h4><?php echo $text_payment_method; ?></h4>
      <div>
        <p><?php echo $text_payment_methods; ?></p>
        <p class="buttonset" id="payment-buttons">
          <?php foreach ($payment_methods as $payment_method) { ?>
              <?php if ($payment_method['id'] == $payment || !$payment) { 
                $payment= $payment_method['id']; ?>
              <input type="radio" name="payment_method" value="<?php echo $payment_method['id']; ?>" id="<?php echo $payment_method['id']; ?>" checked="checked" style="margin: 0px;" />
              <?php } else { ?>
              <input type="radio" name="payment_method" value="<?php echo $payment_method['id']; ?>" id="<?php echo $payment_method['id']; ?>" style="margin: 0px;" />
              <?php } ?></td>
            <td><label for="<?php echo $payment_method['id']; ?>" style="cursor: pointer;"><?php echo $payment_method['title']; ?></label></td>
          <?php } ?>
        </p>
      </div>
      <?php } ?>


      <h4><?php echo $text_comments; ?></h4>
      <div>
        <p><textarea name="comment" rows="3" style="width: 99%;"><?php echo $comment; ?></textarea></p>
      </div>

      <div class="spaceafter">
      <?php if ($agree) { ?>
              <input type="checkbox" id="agree" name="agree" value="1" checked="checked" />
              <?php } else { ?>
              <input type="checkbox" id="agree" name="agree" value="1" />
              <?php } ?>
      <label for="agree"><?php mlp_snippet("oc_read_agb"); ?></label>
      </div>

      <div class="buttons">
        <table>
          <tr>
            <td align="left"><a onclick="location = '<?php echo str_replace('&', '&amp;', $back); ?>'" class="button"><span><?php mlp_snippet("oc_backto_step2"); ?></span></a></td>
            <td align="right"><a onclick="$('#guest').submit();" class="button"><span><?php mlp_snippet("oc_goto_step4"); ?></span></a></td>
          </tr>
        </table>
      </div>
    </form>

    </div>
    <!-- end of grid_6 right column -->

<?php echo $footer; ?> 