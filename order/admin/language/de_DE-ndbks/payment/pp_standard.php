<?php
// Heading
$_['heading_title']      = 'PayPal Standard';

// Text
$_['text_payment']       = 'Zahlung';
$_['text_success']       = 'PayPal erfolgreich geändert!';
$_['text_pp_standard']   = '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Genehmigung';
$_['text_sale']          = 'Verkauf';

// Entry
$_['entry_email']        = 'Email: <span class="help">Hier entweder die Email der Sandbox oder die wirkliche Verkäuferemail eintragen. <br />Siehe dazu auch Einstellung "Testmodus"</span>';
$_['entry_test']         = 'Testmodus:<span class="help">Je nach gewählter Emailadresse hier den richtigen Modus aktivieren<br />Im Testmodus werden Transaktionen nur simuliert, dazu jedoch ist ein eigener Account bei PayPal notwendig</span>';
$_['entry_transaction']  = 'Transaktionsmethode:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Status:';
$_['entry_sort_order']   = 'Reihenfolge:';
$_['entry_pdt_token']						= 'PDT Token:<br/><span class="help">PDT Token wird für zusätzliche Sicherheit und Zuverlässigkeit verwendet. Informationen zum Aktivieren von PDT sind <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_paymentdatatransfer" alt="">hier</a></span>';
$_['entry_itemized']						= 'Detaillierte Produkte:<br/><span class="help">Zeige detaillierte Artikelliste auf Paypal Rechnung anstatt Shopbezeichnung.</span>';
$_['entry_debug']							= 'Debug Modus:<br/><span class="help">Protokolliert zusätzliche Informationen im Systemprotokoll.</span>';
$_['entry_order_status']					= 'Auftragsstatus Vollständig: <br /><span class="help">Auftragsstatus, wenn die Zahlung erfolgreich abgewickelt wurde.</span>';
$_['entry_order_status_pending']			= 'Auftragsstatus Ausstehend: <br /><span class="help">Die Zahlung ist ausstehend; Die pending_reason Variable enthält weitere Informationen. Wenn der Auftragsstatus auf Vollständig, Fehlgeschlagen oder Abgelehnt wechselt, wird eine weitere IPN Nachricht erzeugt.</span>';
$_['entry_order_status_denied']				= 'Auftragsstatus Abgelehnt: <br /><span class="help">Sie als Händler haben die Zahlung abgelehnt. Dies passiert nur, wenn die Zahlung aufgrund der folgenden Gründe ausstehend war.</span>';
$_['entry_order_status_failed']				= 'Auftragsstatus Fehlgeschlagen: <br /><span class="help">Die Zahlung ist fehlgeschlagen. Das passiert nur, wenn die Zahlung vom Kundenkonto abgebucht wurde.</span>';
$_['entry_order_status_refunded']			= 'Auftragsstatus Erstattet: <br /><span class="help">Sie als Händler haben die Zahlung erstattet.</span>';
$_['entry_order_status_canceled_reversal']	= 'Auftragsstatus Erstattung Abgebrochen: <br /><span class="help">Eine Erstattung wurde abgebrochen. Dies passiert, wenn Sie als Händler eine Reklamation ablehnen und die Gutschrift zurückgebucht wurde.</span>';
$_['entry_order_status_reversed']			= 'Auftragsstatus Gutschrift: <br /><span class="help">Eine Zahlung wurde aufgrund einer Rückbuchung gutgeschrieben. Die Zahlung wurde von Ihrem Konto dem Kunden gutgeschrieben. Der Grund wird in der reason_code Variable angegeben.</span>';
$_['entry_order_status_unspecified']		= 'Auftragsstatus anderer Fehler:';

// Error
$_['error_permission']        = 'Warnung: Keine Berechtigung, um PayPal zu ändern!';
$_['error_email']        = 'Email erforderlich!';
?>