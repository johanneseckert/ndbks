<?php
// Heading
$_['heading_title']           = 'Shopverwaltung';

// Text
$_['text_success']            = 'Shop erfolgreich aktualisiert';
$_['text_image_manager']      = 'Bildverwaltung';
$_['text_default']            = 'Standard';
$_['text_edit_store']         = 'Shop bearbeiten:';

// Entry
$_['entry_name']              = 'Shopname:';
$_['entry_url']               = 'Shop URL:<span class="help">Komplette URL für diesen Shop. URL muss mit einem Slash \'/\' abschliessen.<br />Beispiel: http://www.meinedomain.com/path/</span>';
$_['entry_ssl']					= 'Verwende SSL:<span class="help">SSL benutzen, wenn Zertifikat auf Host installiert ist und in der Konfiguration hier angegeben wurde.</span>';
$_['entry_title']             = 'Bezeichnung:';
$_['entry_meta_description']  = 'Meta Tag Beschreibung:';
$_['entry_template']          = 'Vorlage:';
$_['entry_description']       = 'Willkommensnachricht:';
$_['entry_country']           = 'Land:';
$_['entry_zone']              = 'Bundesland:';
$_['entry_language']          = 'Sprache:';
$_['entry_currency']          = 'Währung:';
$_['entry_tax']					= 'Zeige Preise mit Steuern:<span class="help">Hinweis:<br />Texte zur USt. sind in den diversen Sprachdateien hinterlegt</span>';
$_['entry_customer_group']    = 'Kundengruppe:<span class="help">Standardgruppe in welche neue Kunden eingeordnet werden</span>';
$_['entry_customer_price']		= 'Zeige Preise nur angemeldeten Besuchern:<span class="help">Preise werden nur dann angezeigt, wenn der Besucher angemeldet ist</span>';
$_['entry_customer_approval']	= 'Neue Kunden genehmigen:<span class="help">Müssen neue Kunden vor dem ersten Login vom Admin manuell genehmigt werden?</span>';
$_['entry_guest_checkout']    = 'Direktbestellung:<span class="help">Erlaube es Kunden auch dann zu bezahlen wenn sie nicht registriert sind.<br />Nicht möglich bei Downloadprodukten</span>';
$_['entry_account']           = 'Bedingung bei Registrierung:<span class="help">Neue Kunden müssen die Bedingungen akzeptieren bevor sie sich registrieren können</span>';
$_['entry_checkout']          = 'Bedingung bei Bezahlung:<span class="help">Kunden müssen vor Bezahlung die Bedingungen akzeptieren</span>';
$_['entry_order_status']      = 'Auftragsstatus: <span class="help">Standardvorgabe nach Auftragserteilung / Bestellabschluss</span>';
$_['entry_stock_display']		= 'Lagerbestand: <span class="help">Zeige den Lagerbestand auf der Produktseite</span>';
$_['entry_stock_check']       = 'Kein Lagerbestand: <span class="help">Zeige eine Nachricht wenn das Produkt nicht auf Lager ist</span>';
$_['entry_stock_checkout']    = 'Ohne Lagerbestand bezahlen: <br /><span class="help">Kunden können auch dann bezahlen wenn kein Lagerstand</span>';
$_['entry_logo']              = 'Shop Logo:';
$_['entry_icon']              = 'Icon:<br /><span class="help">Das Icon sollte im Format PNG vorliegen und 16x16 Pixel groß sein.</span>';
$_['entry_image_thumb']       = 'Größe Produktbild Vorschau:';
$_['entry_image_popup']       = 'Größe Produktbild Popup:';
$_['entry_image_category']    = 'Größe Kategoriebild:';
$_['entry_image_product']     = 'Größe Bilder Produktliste:';
$_['entry_image_additional']  = 'Größe Bilder weitere Produkte:';
$_['entry_image_related']     = 'Größe Bilder ähnliche Produkte:';
$_['entry_image_cart']        = 'Größe Einkaufswagenbild:';
$_['entry_catalog_limit']		= 'Standardanzahl pro Seite (Katalog):<span class="help">Vorgabe wieviele Einträge pro Seite angezeigt werden sollen (z.B. Produkte, Kategorien usw.)</span>';
$_['entry_cart_weight']			= 'Zeige Gewicht im Warenkorb:';

// Button
$_['button_add_store']        = 'Neuer Shop';
$_['button_delete_store']     = 'Shop löschen';

// Error
$_['error_permission']        = 'Warnung: Keine Berechtigung, um Shops zu ändern!';
$_['error_name']              = 'Geschäftsname  muss zwischen 3 und 32 Zeichenlang sein!';
$_['error_url']               = 'Shop URL erforderlich!';
$_['error_title']             = 'Bezeichnung muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_image_thumb']       = 'Größe Produktbild Vorschaubilder erforderlich!';
$_['error_image_popup']       = 'Größe Produktbild Popup erforderlich!';
$_['error_image_category']    = 'Größe Kategoriebilder erforderlich!';
$_['error_image_product']     = 'Größe Bilder Produktliste erforderlich!';
$_['error_image_additional']  = 'Größe Bilder weitere Produkte erforderlich!';
$_['error_image_related']     = 'Größe Bilder ähnliche Produkte erforderlich!';
$_['error_image_cart']        = 'Größe Einkaufswagenbild erforderlich!';
$_['error_store']             = 'Warnung: Dieser Shop kann nicht gelöscht werden da aktuell %s Aufträge damit verbunden sind!';
$_['error_required_data']		= 'Erforderliche Daten nicht angegeben! Bitte Felder überprüfen.';
$_['error_limit']       	  = 'Limit erforderlich!';
?>