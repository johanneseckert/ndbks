<?php
/**
 * @version		$Id: setting.php 1484 2010-09-12 12:25:29Z mic $
 * @package		OCIE
 * @subpackage	Language Admin German
 */

// new only OCIE (@since 1.2.0)
$_['tab_additional']			= 'Weitere';

$_['text_price_labeling']		= 'Preisauszeichnungen';
$_['text_registration_required']= 'Pflicht- &amp; Wahlfelder bei Registrierung';
$_['text_other']				= 'Sonstiges';

// new ocie.122
$_['text_field']				= 'Feld';
$_['text_requiredField']		= 'Eingabe erforderlich';
$_['text_showField']			= 'Zeige Feld';
$_['text_companyAccount']		= 'Firmenkonto';

$_['entry_subtotal_add']		= 'Zwischensumme';
$_['entry_total_add']			= 'Gesamtsumme';
$_['entry_price_add']			= 'Preis';
$_['entry_birthday']			= 'Geburtstag';
$_['entry_company_name']		= 'Firmenname';
$_['entry_zip']					= 'Postleitzahl';
$_['entry_show_tax_always']		= 'Zeige Steuer immer an<span class="help"><strong>Hinweis</strong>:<br />ist die Einstellung <strong>Zeige Preise mit Steuern</strong> auf Ja gesetzt, werden wenn das Besucherland noch nicht fest steht, Preise mit der Steuer Priorität 1 berechnet und angezeigt!</span>';
$_['entry_add_emailtext_order']	= 'Text bei Bestellungen<span class="help">Hier den Text angeben welcher nur bei Bestellbestätigungen mitgesendet werden soll (z.B. Widerruf)</span>';
$_['entry_add_emailtext_all']	= 'Text bei allen Emails<span class="help">Hier den text angeben welcher <strong>allen</strong> Emails angehängt werden soll (z.B. Firmendaten, Link zum Impressum, usw.)</span>';
$_['entry_business_default_group']	= 'Standardgruppe Firma<span class="help">Standardgruppe wenn bei der Registrierung "Firma" gewählt wird</span>';
$_['entry_customer_id_prefix']	= 'Vorzeichen Kundennummern<span class="help">Hier kann ein Vorzeichen zur Kundennummer angegeben werden welches automatisch vor die vorhandene Datenbank-ID gesetzt wird</span>';
$_['entry_vatin']				= 'Ust.Id';
$_['entry_ssn']					= 'Sozialversicherungsnummer';
$_['entry_gender']				= 'Geschlecht';
$_['entry_fax']					= 'Fax';

	// help
$_['help_price_labeling']		= 'Zusätzlicher Text (optional kombinierbar mit Link), z.B.:<br />&lt;span style="font-style:normal; font-size:10px; color:#666666;"&gt;(inkl. MwSt. zzgl. &lt;a class="thickbox" href="index.php?route=information/information/loadInfo&amp;information_id=XX"&gt;Versand&lt;/a&gt;)&lt;/span&gt;<br /><strong>Hinweis</strong>:<br />Der Text &quot;class=&quot;thickbox&quot; ist optional, damit wird dieser Text in einem Popup geöffnet.<br />Soll ein Popup verwendet werden, MUSS zum Link die Info <strong>loadInfo</strong> (siehe Beispiel) hinzugefügt werden!<br />XX im Link ist durch die Textnummer (siehe Information) zu ersetzen!';
$_['help_registration_required']= 'Hier können weitere Felder als Pflichtfelder - zu den schon Bestehenden wie z.B. Name, Passwort - definiert werden. Ebenso kann die Anzeige einiger Felder bestimmt werden.<br />Hinweis: ist ein Feld als Pflichtfeld markiert, wird es automatisch angezeigt.';
$_['help_other']				= 'Diverse weitere Einstellmöglichkeiten';
$_['help_companyAccount']		= 'Keine Verwendung bei Sofortkauf!';

// new ocie.122
$_['help_vatin']				= 'In manchen Ländern ist die Angabe der UID bei einem Firmenkonto Pflicht!';
$_['help_ssn']					= 'Wird nur bei einigen Zahlungsmöglichkeiten (z.B. Klarna) verwendet.<br /><strong>Hinweis</strong>: keine Verwendung bei Sofortkauf!';
$_['help_gender']				= 'Wird nur bei einigen Zahlungsmöglichkeiten (z.B. Klarna) verwendet.<br /><strong>Hinweis</strong>: keine Verwendung bei Sofortkauf!';

// new ocie 123
$_['entry_add_invoice']			= 'Text bei Rechnungen';
$_['entry_navigation']			= 'Zeige Navigation';
$_['help_add_invoice']			= 'Text welcher allen Rechnungen im Footer hinzugefügt wird';
$_['help_navigation']			= 'Zeigt in der Produktansicht Links zum vorigen und nächsten Produkt';
// end only OCGE

// Heading
$_['heading_title']              = 'Einstellungen';

// Text
$_['text_success']               = 'Einstellungen erfolgreich geändert!';
$_['text_image_manager']		= 'Bildverwaltung';
$_['text_default']				= 'Standard';
$_['text_edit_store']			= 'Store bearbeiten';
$_['text_mail']                  = 'php.Mail';
$_['text_smtp']                  = 'SMTP';

// Entry
$_['entry_name']				= 'Storename';
$_['entry_url']					= 'Store-URL<span class="help">Komplette (relative) URL zum Store. Wichtig: die URL mit einem Backslash abschließen: \'/\'.<br />Beispiel: http://www.meinedoamin.com/path/</span>';
$_['entry_owner']                = 'Geschäftsinhaber';
$_['entry_address']              = 'Adresse';
$_['entry_email']                = 'Email';
$_['entry_alert_emails']		= 'Weitere Benachrichtigungen<span class="help">Hier weitere Emailadressen angeben welche eine Benachrichtung erhalten sollen (jeweils mit Komma trennen)</span>';
$_['entry_telephone']            = 'Telefon';
$_['entry_fax']                  = 'Fax';
$_['entry_title']				= 'Titel';
$_['entry_meta_description']	= 'Metatag Beschreibung';
$_['entry_description']			= 'Willkommennachricht';
$_['entry_template']             = 'Vorlage';
$_['entry_country']				= 'Land';
$_['entry_zone']				= 'Region / Bundesland';
$_['entry_language']			= 'Benutzersprache<span class="help">Sind mehrere Sprachen installiert, kann der Besucher mit dem Sprachauswahlfeld wählen</span>';
$_['entry_admin_language']		= 'Adminsprache';
$_['entry_currency']             = 'Währung';
$_['entry_currency_auto']        = 'Automatische Aktualisierung der Währungskurse<br /><span class="help">Währungskurse täglich aktualisieren.</span>';
$_['entry_weight_class']         = 'Gewichtseinheit';
$_['entry_length_class']		= 'Längenklasse';
$_['entry_tax']					= 'Zeige Preise mit Steuern<span class="help">Hinweis:<br />Texte zur MwSt. sind in den diversen Sprachdateien hinterlegt</span>';
$_['entry_invoice']				= 'Rechnungsnr. Beginn<span class="help">Hier die erste Rechnungsnummer angeben mit welcher der Rechnungslauf gestartet wird.</span>';
$_['entry_invoice_prefix']		= 'Rechnungsnr. Vorzeichen<span class="help">Hier das Vorzeichen für die Rechnungsnummern angeben, z.B. RE/2010<br />Hinweis: es sind alle Zeichen erlaubt</span>';
$_['entry_customer_group']		= 'Kundengruppe<span class="help">Standard Kundengruppe bei Neuanlage</span>';
$_['entry_customer_price']		= 'Zeige Preise nur eingeloggten Besuchern<span class="help">Preise werden nur dann angezeigt, wenn der Besucher eingeloggt ist</span>';
$_['entry_customer_approval']	= 'Neue Kunden genehmigen<span class="help">Neue Kunden werden vor dem ersten Login vom Admin manuell genehmigt</span>';
$_['entry_guest_checkout']		= 'Gastkauf<span class="help">Erlaube Besuchern zu kaufen auch wenn sie nicht registriert bzw. eingeloggt sind.<br />Hinweis: bei Downloadprodukten muss der Besucher immer registriert und eingeloggt sein!</span>';
$_['entry_account']				= 'Bedingung bei Registrierung<span class="help">Neue Kunden müssen die Bedingungen akzeptieren bevor sie sich registrieren können</span>';
$_['entry_checkout']			= 'Bedingung bei Bezahlung<span class="help">Kunden müssen vor Bezahlung die Bedingungen akzeptieren</span>';
$_['entry_order_status']		= 'Auftragsstatus<span class="help">Hier den Standardstatus definieren wenn ein neuer Auftrag erteilt wird</span>';
$_['entry_stock_display']		= 'Lagerstand<span class="help">Zeige den Lagerstand auf der Produktseite</span>';
$_['entry_stock_warning']		= 'Zeige Hinweis wenn kein Lagerstand<span class="help">Zeigt eine Nachricht im Warenkorb an wenn kein Lagerstand aber man dennoch bestellen kann (Hinweis wird angezeigt wenn keine Bestellung bei fehlendem Lagerstand möglich ist).</span>';
$_['entry_stock_checkout']		= 'Ohne Lagerstand bezahlen<span class="help">Kunden können auch dann bezahlen wenn kein Lagerstand</span>';
$_['entry_stock_status']		= 'Lagerstandsanzeige';
$_['entry_logo']				= 'Store Logo';
$_['entry_icon']				= 'Icon';
$_['entry_image_thumb']			= 'Größe Produktbild Vorschau';
$_['entry_image_popup']			= 'Größe Produktbild Popup';
$_['entry_image_category']		= 'Größe Kategoriebild';
$_['entry_image_product']		= 'Größe Bilder Produktliste';
$_['entry_image_additional']	= 'Größe Bilder weitere Produkte';
$_['entry_image_related']		= 'Größe Bilder ähnliche Produkte';
$_['entry_image_cart']			= 'Größe Einkaufswagen';
$_['entry_alert_mail']			= 'Bestellemails<span class="help">Soll bei neuen Bestellungen per Email eine Benachrichtigung erfolgen</span>';
$_['entry_download']			= 'Downloads erlauben';
$_['entry_download_status']		= 'Status der Downloadbestellung<br /><span class="help">Hier einstellen welchen Bestellstatus ein Kunde haben muss, um den Download der bestellten Ware durchführen zu können.</span>';
$_['entry_mail_protocol']		= 'Emailprotokoll';
$_['entry_smtp_host']			= 'SMTP Host';
$_['entry_smtp_username']		= 'SMTP Benutzername';
$_['entry_smtp_password']		= 'SMTP Passwort';
$_['entry_smtp_port']			= 'SMTP Port';
$_['entry_smtp_timeout']		= 'SMTP Timeout';
$_['entry_ssl']					= 'Verwende SSL<span class="help">SSL benutzen, wenn Zertifikat auf Host installiert ist und in der Konfiguration hier angegeben wurde.</span>';
$_['entry_encryption']			= 'Datenverschlüsselung<span class="help">Bitte einen beliebigen Schlüssel eingeben (Verwendung bei diversen sensiblen Daten)</span>';
$_['entry_seo_url']				= 'Benutze SEO URL\'s<span class="help">Um die SEO URL\'s zu nutzen muss das Apache module mod_rewrite installiert sein und die htaccess.txt in .htaccess umbenannt werden.</span>';
$_['entry_compression']			= 'Ausgabe Kompressionswert<span class="help">GZIP für schnellere Browserausgabe. Wert zwischen 0 - 9</span>';
$_['entry_error_display']		= 'Fehler anzeigen<span class="help">NICHT empfohlen im Live-Betrieb!</span>';
$_['entry_error_log']			= 'Fehler mitloggen';
$_['entry_error_filename']		= 'Fehlerdatei Dateiname';
// new 1.4.7
$_['entry_shipping_session']	= 'Versandkosten in Session<span class="help">Speichert Versandart in einer Sessionvariable (verhindert unnötige Bearbeitung). Ändert sich Warenkorb oder/und Adresse werden die Versandkosten neu berechnet</span>';
$_['entry_catalog_limit']		= 'Standardanzahl pro Seite (Benutzer)<span class="help">Vorgabe wieviele Einträge pro Seite angezeigt werden sollen (z.B. Produkte, Kategorien, usw.)</span>';
$_['entry_admin_limit']			= 'Standardanzahl pro Seite (Admin)<span class="help">Vorgabe wieviele Einträge pro Seite angezeigt werden sollen (z.B. Aufträge, Kunden usw.)</span>';
$_['entry_cart_weight']			= 'Zeige Gewicht im Warenkorb';
// new 1.4.8
$_['entry_review']				= 'Erlaube Beurteilungen<span class="help">Sollen Neue möglich sein, sowie schon Vorhandene anzeigen</span>';
$_['entry_maintenance']			= 'Wartungsmodus<span class="help">Zugang zum Storefrontend nur für Admins möglich, Besucher sehen eine Nachricht zur Wartung.</span>';
$_['entry_token_ignore']		= 'Ignoriere den Sicherheitsmodus bei folgenden Modulen/Seiten<span class="help">Mit OC 1.4.8 wurde ein Sicherheitssystem für den Adminbereich eingeführt. Für ältere Module kann diese Prüfung abgeschaltet werden.</span>';
$_['entry_mail_parameter']		= 'Mail Parameter:<span class="help">Wird php.Mail verwendet, können hier weitere Parameter übergeben werden (z.B. "-femail@storeaddress.com")</span>';

// Button
$_['button_add_store']			= 'Neuer Store';

// Error
$_['error_permission']			= 'Hinweis: keine ausreichenden Rechte für diese Aktion!';
$_['error_name']				= 'Storename muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_url']					= 'Store-URL erforderlich!';
$_['error_title']				= 'Titel muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_owner']                = 'Name des Geschäftsinhabers muss zwischen 3 und 64 Zeichen lang sein!';
$_['error_address']              = 'Geschäftsadresse muss zwischen 10 und 128 Zeichen lang sein!';
$_['error_email']                = 'Emailadresse ungültig!';
$_['error_telephone']            = 'Telefon muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_image_thumb']       = 'Größe Vorschaubilder erforderlich!';
$_['error_image_popup']       = 'Größe Popup Bilder erforderlich!';
$_['error_image_category']    = 'Größe Kategoriebilder erforderlich!';
$_['error_image_product']     = 'Größe Bilder Produktliste erforderlich!';
$_['error_image_additional']  = 'Größe Bilder weitere Produkte erforderlich!';
$_['error_image_related']     = 'Größe Bilder ähnliche Produkte erforderlich!';
$_['error_image_cart']        = 'Größe Einkaufswagen erforderlich!';
$_['error_error_filename']		= 'Name für Fehlerdatei erforderlich!';
// new 1.4.7
$_['error_required_data']		= 'Erforderliche Angaben nicht gemacht. Bitte Felder überprüfen!';
$_['error_limit']				= 'Limit erforderlich!';