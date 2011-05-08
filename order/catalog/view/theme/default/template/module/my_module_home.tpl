<?php if ($customers) { ?>
<div class="top">
  <div class="left"></div>
  <div class="right"></div>
  <div class="center">
    <div class="heading"><?php echo $heading_title; ?></div>
  </div>
</div>
<div class="middle">
    <table cellpadding="2" cellspacing="0" style="width: 100%;">
      <?php foreach ($customers as $customer) { ?>
      <tr>
        <td valign="top"><?php echo $customer['firstname']; ?></td>
      </tr>
      <?php } ?>
    </table>
</div>
<div class="bottom">
  <div class="left"></div>
  <div class="right"></div>
  <div class="center"></div>
</div>
<?php } ?>