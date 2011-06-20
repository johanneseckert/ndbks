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

<!-- Google Code for best&auml;tigte Bestellung Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 969147527;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "0OCcCPms6AIQh4mQzgM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/969147527/?label=0OCcCPms6AIQh4mQzgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
      
<?php echo $footer; ?> 