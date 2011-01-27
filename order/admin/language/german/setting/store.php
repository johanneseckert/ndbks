<?php
/**
 * @version		$Id: store.php 1094 2010-06-12 09:51:10Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 * @author		mic - http://osworx.net
 */

// Heading
$_['heading_title']           = 'Storeverwaltung';

// Text
$_['text_success']            = 'Store erfolgreich aktualisiert';
$_['text_image_manager']      = 'Bilderverwaltung';
$_['text_default']            = 'Standard';
$_['text_edit_store']         = 'Store bearbeiten';

// Entry
$_['entry_name']              = 'Store Name';
$_['entry_url']               = 'Store URL<span class="help">Komplette URL für diesen Store. URL muss mit einem Slash \'/\' abschliessen.<br />Beispiel: http://www.meinedomain.com/path/</span>';
$_['entry_ssl']               = 'Verwende SSL:<br /><span class="help">Verwende SSL falls ein SSL-Zertifikat installiert ist</span>';
$_['entry_title']             = 'Überschrift';
$_['entry_meta_description']  = 'Meta Tag Beschreibung';
$_['entry_template']          = 'Vorlage';
$_['entry_description']       = 'Willkommensnachricht';
$_['entry_country']           = 'Land';
$_['entry_zone']              = 'Region / Bundesland';
$_['entry_language']          = 'Sprache';
$_['entry_currency']          = 'Währung';
$_['entry_tax']               = 'Zeige Preise mit Steuer';
$_['entry_customer_group']    = 'Kundengruppe<span class="help">Standardgruppe in welche neue Kunden eingeordnet werden</span>';
$_['entry_customer_price']    = 'Zeige Preise<span class="help">Preise nur dann anzeigen wenn Besucher eingeloggt ist</span>';
$_['entry_customer_approval'] = 'Neue Kunden genehmigen<span class="help">Neue Kunden müssen vom Admin genehmigt werden</span>';
$_['entry_guest_checkout']    = 'Direktbestellung<span class="help">Erlaube es Kunden auch dann zu bezahlen wenn sie nicht registriert sind.<br />Nicht möglich bei Downloadprodukten</span>';
$_['entry_account']           = 'Bedingungen bei neuer Registrierung<span class="help">Besucher müssen vor der Registrierung die Bedingungen akzeptieren</span>';
$_['entry_checkout']          = 'Bedingungen bei Bezahlung<span class="help">Kunden müssen vor Bezahlung die Bedingungen akzeptieren</span>';
$_['entry_order_status']      = 'Auftragsstatus<span class="help">Standardvorgabe nach Auftragserteilung / Bestellabschluss</span>';
$_['entry_stock_display']     = 'Zeige Lagerstand<span class="help">Soll der Lagerstand auf der Produktseite angezeigt werden</span>';
$_['entry_stock_check']       = 'Kein Lagerstand<span class="help">Zeige eine Nachricht wenn das Produkt nicht auf Lager ist</span>';
$_['entry_stock_checkout']    = 'Ohne Lagerstand bezahlen<br /><span class="help">Kunden können auch dann bezahlen wenn kein Lagerstand</span>';
$_['entry_logo']              = 'Store Logo';
$_['entry_icon']              = 'Icon';
$_['entry_image_thumb']       = 'Größe Produktbild Vorschau';
$_['entry_image_popup']       = 'Größe Produktbild Popup';
$_['entry_image_category']    = 'Größe Kategoriebild';
$_['entry_image_product']     = 'Größe Bilder Produktliste';
$_['entry_image_additional']  = 'Größe Bilder weitere Produkte';
$_['entry_image_related']     = 'Größe Bilder ähnliche Produkte';
$_['entry_image_cart']        = 'Größe Einkaufswagen';
// new 1.4.7
$_['entry_catalog_limit']		= 'Standard Einträge pro Seite<span class="help">Anzahl der Einträge pro Seite (z.B. Produkte, Kategorien, usw.)</span>';
$_['entry_cart_weight']			= 'Zeige Gewicht in Warenkorb';

// Button
$_['button_add_store']        = 'Neuer Store';
$_['button_delete_store']     = 'Store löschen';

// Error
$_['error_permission']        = 'Warnung: nicht genug Rechte für diese Aktion!';
$_['error_name']              = 'Geschäftsname  muss zwischen 3 und 32 Zeichenlang sein!';
$_['error_url']               = 'Store URL erforderlich!';
$_['error_title']             = 'Titel muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_image_thumb']       = 'Größe Vorschaubilder erforderlich!';
$_['error_image_popup']       = 'Größe Popup Bilder erforderlich!';
$_['error_image_category']    = 'Größe Kategoriebilder erforderlich!';
$_['error_image_product']     = 'Größe Bilder Produktliste erforderlich!';
$_['error_image_additional']  = 'Größe Bilder weitere Produkte erforderlich!';
$_['error_image_related']     = 'Größe Bilder ähnliche Produkte erforderlich!';
$_['error_image_cart']        = 'Größe Einkaufswagen erforderlich!';
$_['error_store']             = 'Warnung: Dieser Store kann nicht gelöscht werden da aktuell %s Aufträge damit verbunden sind!';
$_['error_required_data']     = 'Nicht alle erforderlichen Daten vorhanden - bitte einzelne Felder nochmals prüfen!';
$_['error_limit']       	  = 'Limit erforderlich!';