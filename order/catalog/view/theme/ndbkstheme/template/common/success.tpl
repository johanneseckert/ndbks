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
        <div class="steps step4">&nbsp;</div>
      </div>
      <?php mlp_snippet("oc_final"); ?>
    </div>

    <!-- body/content from opencart -->
    <div class="grid_6 omega body">

    <h4><?php mlp_snippet("oc_success_title"); ?></h4>
    <div>
      <?php mlp_snippet("oc_success"); ?>
    </div>
        

    </div>
    <!-- end of grid_6 right column -->
      
<?php echo $footer; ?> 