<div class="box">
  <div class="top"><img src="catalog/view/theme/default/image/latest.png" alt="" /><?php echo $heading_title; ?></div>
  <div class="middle">
    <?php if ($customers) { ?>
    <table cellpadding="2" cellspacing="0" style="width: 100%;">
      <?php foreach ($customers as $customer) { ?>
      <tr>
        <td valign="top"><?php echo $customer['firstname']; ?></td>
      </tr>
      <?php } ?>
    </table>
    <?php } ?>
  </div>
  <div class="bottom">&nbsp;</div>
</div>
