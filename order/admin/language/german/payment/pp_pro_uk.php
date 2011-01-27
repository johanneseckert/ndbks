<?php
/**
 * @version		$Id: pp_pro_uk.php 1093 2010-06-11 04:48:59Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 */

// Heading
$_['heading_title']      = 'PayPal Payment Pro (UK)';

// Text
$_['text_payment']       = 'Zahlung';
$_['text_success']       = 'PayPal Payment Pro (UK) erfolgriech geändert!';
$_['text_pp_pro_uk']     = '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro (UK)" title="PayPal Website Payment Pro (UK)" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Genehmigung';
$_['text_sale']          = 'Verkauf';

// Entry
$_['entry_vendor']       = 'Anbieter:<br /><span class="help">Die Händler ID zum Login auf PayPal Payments Pro (UK).</span>';
$_['entry_user']         = 'Benutzer:<br /><span class="help">Wurden mehrere Benutzer auf PPPro angelegt, hier die ID desjenigen angeben welcher für Überweisungen berechtigt ist. Ist nur ein Berechtigter eingetragen, hier dieselbe ID wie beim Anbieter angeben.</span>';
$_['entry_password']     = 'Passwort:<br /><span class="help">Das 6 bis 32 Zeichen lange Passwort von PPPro.</span>';
$_['entry_partner']      = 'Partner:<br /><span class="help">Die ID welche vom PayPal Verkäufer erhalten wurde (für die Payflow SDK). Wurde direkt bei PayPal gekauft, dann hier die PayPal UK ID angeben.</span>';
$_['entry_test']         = 'Testmodus:<br /><span class="help">Verwende dieses Modul im Live- oder Testmodus (Sandbox)?</span>';
$_['entry_transaction']  = 'Transaktionsmethode:';
$_['entry_order_status'] = 'Auftragsstatus:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Reihenfolge:';

// Error
$_['error_permission']   = 'Warnung: keine ausreichenden Rechte für diese Aktion!';
$_['error_vendor']       = 'Anbieter erforderlich!';
$_['error_user']         = 'Benutzer erforderlich!';
$_['error_password']     = 'Passwort erforderlich!';
$_['error_partner']      = 'Partner erforderlich!';