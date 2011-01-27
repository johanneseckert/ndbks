<?php
/**
 * @version		$Id: pp_standard.php 1496 2010-09-18 09:16:35Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 */
// Heading
$_['heading_title']			= 'PayPal Standard';

// Text
$_['text_payment']			= 'Bezahlung';
$_['text_success']			= 'PayPal erfolgreich geändert!';
$_['text_pp_standard']		= '<a onclick="window.open(\'https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']	= 'Genehmigung';
$_['text_sale']				= 'Verkauf';

// Entry
$_['entry_email']			= 'Email<span class="help">Hier entweder die Email der Sandbox oder die wirkliche Verkäuferemail eintragen.<br />Siehe dazu auch Einstellung "Testmodus"</span>';
$_['entry_test']			= 'Testmodus<span class="help">Je nach gewählter Emailadresse hier den richtigen Modus aktivieren<br />Im Testmodus werden Transaktionen nur simuliert, dazu jedoch ist ein eigener Account bei PayPal (Sandbox) notwendig</span>';
$_['entry_transaction']		= 'Transaktionsmethode';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_pdt_token']		= 'PDT Token<span class="help">Payment Data Transfer Token wird für erweiterte Sicherheit und Zuverlässigkeit verwendet.<br />Mehr dazu unter <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_paymentdatatransfer" alt="" target="_blank">hier</a></span>';
$_['entry_itemized']		= 'Einzelprodukte<span class="help">Zeige alle Produkte einzeln bei PayPal anstatt nur den Shopnamen</span>';
$_['entry_debug']			= 'Debug Modus<span class="help">Speichert zusätzliche Meldungen im Systemlog</span>';
$_['entry_order_status']	= 'Auftragsstatus Erledigt<span class="help">Status wenn die Zahlung erfolgreich war</span>';
$_['entry_order_status_pending']			= 'Auftragsstatus in Verarbeitung<span class="help">Status der Zahlung wenn nicht erfolgreich abgeschlossen werden konnte (siehe Auswahlfeld).<br />Hinweis: PayPal sendet andere Statusmeldungen wenn die Zahlung auf Abgeschlossen, Abgelehnt oder Fehlgeschlagen ist</span>';
$_['entry_order_status_denied']				= 'Auftragsstatus Abgelehnt<span class="help">Die Zahlung wurde vom Shopbetreiber abgelehnt.<br />Dieser Fall tritt nur dann ein, wenn die Zahlung aus einem der nachfolgenden Gründe nicht abgeschlossen werden konnte</span>';
$_['entry_order_status_failed']				= 'Auftragsstatus Fehlgeschlagen<span class="help">Die Zahlung ist fehlgeschlagen.<br />Tritt dann ein wenn die Bank die Zahlung verweigert hat</span>';
$_['entry_order_status_refunded']			= 'Auftragsstatus Rückerstattung<span class="help">Zahlung wurde vom Shopbetreiber zurück erstattet</span>';
$_['entry_order_status_canceled_reversal']	= 'Auftragsstatus Umgedreht<span class="help">Bedeutet dass eine vorher rückerstattete Zahlung wieder zurück genommen wird/wurde. Beispiel: ein strittiger Auftrag wurde erfolgreich beendet, die vorher zurück erstattete Zahlung wird wieder an den Shopbetreiber gezahlt</span>';
$_['entry_order_status_reversed']			= 'Auftragsstatus Umgedreht<span class="help">Zahlung wurde an Kunde zurück angewiesen.</span>';
$_['entry_order_status_unspecified']		= 'Auftragsstatus Unbekannter Fehler';

// Error
$_['error_permission']						= 'Warnung: keine ausreichenden Rechte für diese Aktion!';
$_['error_email']							= 'Email erforderlich!';