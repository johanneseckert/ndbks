<?php
/**
 * @version		$Id: country.php 923 2010-04-12 10:37:55Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 */
// Heading
$_['heading_title']          = 'Land';

// Text
$_['text_success']           = 'Land erfolgreich geändert!';

// Column
$_['column_name']            = 'Ländername';
$_['column_iso_code_2']      = 'ISO Code (639-1)';
$_['column_iso_code_3']      = 'ISO Code (639-2)';
$_['column_action']          = 'Aktion';

// Entry
$_['entry_status']           = 'Status';
$_['entry_name']             = 'Name';
$_['entry_iso_code_2']       = 'ISO Code<span class="help">Offizieller, 2-stelliger ISO 639-1 Code<br />Mehr dazu <a onclick="window.open(\'http://en.wikipedia.org/wiki/ISO_3166-1\')">hier</a></span>';
$_['entry_iso_code_3']       = 'ISO Code<span class="help">Offizieller, 3-stelliger ISO 639-2 Code<br />Mehr dazu <a onclick="window.open(\'http://en.wikipedia.org/wiki/ISO_3166-1\')">hier</a></span>';
$_['entry_address_format']   = 'Adressenformat<span class="help">Verwendung z.B. bei Emails.<br />Jeder Begriff (Datenbankfeldname) muss von einer geschwungenen Klammer begrenzt sein.<br />Beispiel: {firstname} {lastname}';

// Error
$_['error_permission']  = 'Hinweis: keine ausreichenden Rechte für diese Aktion!';
$_['error_name']             = 'Der Ländername muss zwischen 3 und 128 Buchstaben lang sein!';
$_['error_default']				= 'Warnung: Dieses Land kann nicht eglöscht werden da es aktuell als Standard definiert ist!';
$_['error_store']            = 'Warnung: Dieses Land kann nicht gelöscht werden da es aktuell %s Stores zugeordnet ist!';
$_['error_address']          = 'Warnung: Dieses Land kann nicht gelöscht werden weil noch %s Adressbucheinträge zugeordnet sind!';
$_['error_zone']             = 'Warnung: Diesem Land sind noch %s Zonen zugeordnet. Es kann daher nicht gelöscht werden!';
$_['error_zone_to_geo_zone'] = 'Warnung: Dieses Land kann nicht gelöscht werden. Es sind noch %s Zonen zu geografischen Zonen zugeordnet!';