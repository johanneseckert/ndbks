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
        <div class="steps step1">&nbsp;</div>
      </div>
      <?php mlp_snippet("oc_step1"); ?>
    </div>

    <!-- body/content from opencart -->
    <div class="grid_6 omega body">

    <h4><?php echo $heading_title; ?></h4>

    <?php if ($error_warning) { ?>
    <div class="warning"><?php echo $error_warning; ?></div>
    <?php } ?>
    <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="cart">
      <table class="cart">
        <tr>
          <th align="center"></th>
          <th align="left"><?php echo $column_name; ?></th>
          <th align="right"><?php echo $column_quantity; ?></th>
          <?php if ($display_price) { ?>
      <th align="right"><?php echo $column_price; ?></th>
      <?php } ?>
        </tr>
        <?php $class = 'odd'; ?>
        <?php foreach ($products as $product) { ?>
        <?php $class = ($class == 'even' ? 'odd' : 'even'); ?>
        <tr class="<?php echo $class; ?>">
          <td align="center"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></td>
          <td align="left" valign="top"><?php echo $product['name']; ?>
            <?php if (!$product['stock']) { ?>
            <span style="color: #FF0000; font-weight: bold;">***</span>
            <?php } ?>
            <div>
              <?php foreach ($product['option'] as $option) { ?>
              - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
              <?php } ?>
            </div></td>
          <td align="right" valign="top"><?php echo $product['quantity']; ?></td>
          <?php if ($display_price) { ?>
      <td align="right" valign="top"><?php 
        if (($product['price'] != "0,00€") AND ($product['price'] != "0.00€"))
          echo $product['price']; 
      ?></td>
      <?php } ?>
        </tr>
        <?php } ?>
      </table>
    <?php if ($display_price) { ?>
    <div style="width: 100%; display: inline-block;">
        <table class="summe">
          <?php foreach ($totals as $total) { ?>
          <tr>
            <td align="right"><b><?php echo $total['title']; ?></b></td>
            <td align="right"><?php echo $total['text']; ?></td>
          </tr>
          <?php } ?>
        </table>
        <br />
      </div>
    <?php } ?>

      <div class="buttons">
        <table>
          <tr>
            <td align="left"><a href="/build#<?php echo http_build_query($_SESSION["bike"]) ?>"><?php mlp_snippet("make_changes"); ?></a></td>
            <td align="right"><a onclick="location = '<?php echo str_replace('&amp;', '&', $checkout); ?>'" class="button"><span><?php mlp_snippet("oc_goto_step3"); ?></span></a></td>
          </tr>
        </table>
      </div>

    </form>

    </div>
    <!-- end of grid_6 right column -->
      
<?php echo $footer; ?> 