<?php
// Text
$_['text_title'] = 'PayPal';
$_['text_reason'] 				= 'REASON';
$_['text_attn_email']			= 'ATTN: Paypal Auftrag %s muss manuell genehmigt werden';
$_['text_testmode']	   	 		= 'ACHTUNG!!! Diese Zahlungsmodul ist im \'Testmodus\'. Ihr Konto wird nicht belastet.';
$_['text_tax']	 				= 'Steuer';

// Error
$_['error_referer'] 			= 'PP_Standard - Möglicher Betrug: IPN/PDT Referrer URL "%s" war nicht Paypal.com. Auftrag muss manuell überprüft werden.';
$_['error_amount_mismatch']		= 'PP_Standard - Möglicher Betrug: IPN/PDT Preis "%s" entspricht nicht der OpenCart Summe "%s". Auftrag muss manuell überprüft werden.';
$_['error_email_mismatch']		= 'PP_Standard - Möglicher Betrug: IPN/PDT Empfänger Email entspricht nicht der Verkäufer Email. Auftrag muss manuell überprüft werden.';
$_['error_verify']				= 'PP_Standard - IPN/PDT Automatische Überprüfung fehlgeschlagen. Dies wird häufig durch fremde Zeichen in der Kundenadresse oder Name ausgelöst. Bitte manuell überprüfen.';
$_['error_non_complete']		= 'PP_Standard - Unvollständiger Auftragsstatus empfangen. Manuelle Untersuchung nötig.';
$_['error_no_data']				= 'PP_Standard - Keine Rückantwort bei der Überprüfung.';
?>