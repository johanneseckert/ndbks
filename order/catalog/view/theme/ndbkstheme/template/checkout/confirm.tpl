<?php echo $header; ?>

    <!-- headline & infos -->
    <div class="grid_4 alpha">
      <div id="title">
        <h3><?php echo $heading_title; ?></h3>
      </div>
      <div id="indibike-static">
        <img src="/images/static.php?output=small&<?php echo http_build_query($_SESSION["bike"]) ?>" width="300px" />
      </div>
      <div id="order-breadcrumb">
        <p><?php mlp_snippet("oc_cart_breadcrumb"); ?></p>
        <div class="steps step4">&nbsp;</div>
      </div>
      <?php mlp_snippet("oc_step4"); ?>
    </div>

    <!-- body/content from opencart -->
    <div class="grid_6 omega body">


    <?php if ($success) { ?>
    <div class="success"><?php echo $success; ?></div>
    <?php } ?>
    <?php if ($error_warning) { ?>
    <div class="warning"><?php echo $error_warning; ?></div>
    <?php } ?>

    <h4><?php mlp_snippet("oc_confirm_overview"); ?></h4>
    <div class="spacepadding">
      <table width="100%">
        <tr>
          <td width="33.3%" valign="top"><?php if ($shipping_method) { ?>
            <b><?php echo $text_shipping_method; ?></b><br />
            <?php echo $shipping_method; ?><br />
            <a href="<?php echo str_replace('&', '&amp;', $checkout_shipping); ?>"><?php echo $text_change; ?></a><br />
            <br />
            <?php } ?>
            <b><?php echo $text_payment_method; ?></b><br />
            <?php echo $payment_method; ?><br />
            <a href="<?php echo str_replace('&', '&amp;', $checkout_payment); ?>"><?php echo $text_change; ?></a></td>
          <td width="33.3%" valign="top"><?php if ($shipping_address) { ?>
            <b><?php echo $text_shipping_address; ?></b><br />
            <?php echo $shipping_address; ?><br />
            <a href="<?php echo str_replace('&', '&amp;', $checkout_shipping_address); ?>"><?php echo $text_change; ?></a>
            <?php } ?></td>
          <td width="33.3%" valign="top"><b><?php echo $text_payment_address; ?></b><br />
            <?php echo $payment_address; ?><br />
            <a href="<?php echo str_replace('&', '&amp;', $checkout_payment_address); ?>"><?php echo $text_change; ?></a></td>
        </tr>
      </table>
      </div>

    <h4><?php mlp_snippet("oc_confirm_parts"); ?></h4>
    <div class="spacepadding">
      <table width="100%">
        <tr>
          <th align="left"><?php echo $column_product; ?></th>
          <th align="right"><?php echo $column_quantity; ?></th>
          <th align="right"><?php echo $column_price; ?></th>
          <th align="right"><?php echo $column_total; ?></th>
        </tr>
        <?php foreach ($products as $product) { ?>
        <tr>
          <td align="left" valign="top"><?php echo $product['name']; ?>
            <?php foreach ($product['option'] as $option) { ?>
            <br />
            &nbsp;<small> - <?php echo $option['name']; ?> <?php echo $option['value']; ?></small>
            <?php } ?></td>
          <td align="right" valign="top"><?php echo $product['quantity']; ?></td>
          <td align="right" valign="top"><?php echo $product['price']; ?></td>
          <td align="right" valign="top"><?php echo $product['total']; ?></td>
        </tr>
        <?php } ?>
      </table>
      <br />
      <div style="width: 100%; display: inline-block;">
        <table style="float: right; display: inline-block;">
          <?php foreach ($totals as $total) { ?>
          <tr>
            <td align="right" class="sumpriceend"><?php echo $total['title']; ?></td>
            <td align="right" class="sumpriceend"><?php echo $total['text']; ?></td>
          </tr>
          <?php } ?>
        </table>
        <br />
      </div>
    </div>


    <?php if ($coupon_status) { ?>
    <h4><?php mlp_snippet("oc_coupon_headline"); ?></h4>
    <div class="spaceinside">
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="coupon">
        <p><?php echo $text_coupon; ?></p>
        <div style="text-align: right;"><?php echo $entry_coupon; ?>&nbsp;
        <input type="text" name="coupon" value="<?php echo $coupon; ?>" />
        &nbsp;<a onclick="$('#coupon').submit();" class="button"><span><?php echo $button_coupon; ?></span></a></div>
      </form>
    </div>
    <?php } ?>

    <?php if ($comment) { ?>
    <h4><?php echo $text_comment; ?></h4>
    <div><p><?php echo $comment; ?></p></div>
    <?php } ?>

    <div id="payment"><?php echo $payment; ?></div>

    <div class="spacebefore hint">
      <p><?php mlp_snippet("oc_confirm_disclaimer"); ?></p>
    </div>

  </div>
</div>


    </div>
    <!-- end of grid_6 right column -->
      
<?php echo $footer; ?> 