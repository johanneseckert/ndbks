<?php
/**
 * @version		$Id: language.php 1093 2010-06-11 04:48:59Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 */
// Heading
$_['heading_title']     = 'Sprache';

// Text
$_['text_success']      = 'Sprache erfolgreich geändert!';

// Column
$_['column_name']       = 'Name';
$_['column_code']       = 'Code';
$_['column_sort_order'] = 'Reihenfolge';
$_['column_action']     = 'Aktion';

// Entry
$_['entry_name']        = 'Name<span class="help">Diese Bezeichnung wird auch im Frontend angezeigt</span>';
$_['entry_code']        = 'Code<span class="help">Wird unter anderem zur HTML-Erstellung verwendet und muss XHTML-Konform sein.<br />Beispiel:de oder de-DE</span>';
$_['entry_locale']      = 'Lokalisierung<span class="help">Wird zur Browsererkennung verwendet.<br />Beispiel: de,de_de,de-DE (mehrere mit Komma trennen)</span>';
$_['entry_image']       = 'Bild<span class="help">Wird zur Anzeige der Flaggen verwendet.<br />Sollte nicht größer als 16x16px sein</span>';
$_['entry_directory']   = 'Ordner<span class="help">Verzeichnis in welchem sich die Sprachdateien befinden</span>';
$_['entry_filename']    = 'Dateiname<span class="help">Name der Hauptsprachdatei (kann der Gleiche wie der Ordner sein)</span>';
$_['entry_status']      = 'Status';
$_['entry_sort_order']  = 'Reihenfolge';

// Error
$_['error_permission']  = 'Hinweis: keine ausreichenden Rechte für diese Aktion!';
$_['error_name']        = 'Der Name der Sprache muss zwischen 3 und 32 Buchstaben lang sein!';
$_['error_code']        = 'Der Sprachcode muss mind. aus zwei Buchstaben bestehen!';
$_['error_locale']      = 'Lokalisierung erforderlich!';
$_['error_image']       = 'Der Name der Bilddatei muss zwischen 3 und 64 Zeichen lang sein!';
$_['error_directory']   = 'Verzeichnis erforderlich!';
$_['error_filename']    = 'Der Dateiname muss zwischen 3 und 64 Zeichen lang sein!';
$_['error_default']     = 'Warnung: Diese Sprache kann nicht gelöscht werden, weil sie die Standardsprache des Shops ist!';
$_['error_admin']       = 'Warnung: Diese Sprache ist momentan die Standardsprache der Verwaltung und kann daher nicht gelöscht werden!';
$_['error_store']       = 'Warnung: Diese Sprache kann nicht gelöscht werden, da es aktuell %s Stores zugeordnet ist!';
$_['error_order']       = 'Warnung: Diese Sprache kann nicht gelöscht werden, weil sie noch %s Bestellungen zugeordnet ist!';