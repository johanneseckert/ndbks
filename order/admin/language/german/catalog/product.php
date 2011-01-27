<?php
/**
 * @version		$Id: product.php 1515 2010-09-21 21:09:04Z mic $
 * @package		OCIE
 * @subpackage	Language Admin German
 */
// Heading
$_['heading_title']				= 'Produkte';
// Tab
$_['tab_shipping']				= 'Versand';
$_['tab_links']					= 'Links';

// Text
$_['text_success']				= 'Produkt erfolgreich geändert!';
$_['text_plus']					= '+';
$_['text_minus']				= '-';
$_['text_default']           	= 'Vorgabestore';
$_['text_image_manager']		= 'Bildverwaltung';
$_['text_option']				= 'Option';
$_['text_option_value']			= 'Optionswert';

// Column
$_['column_name']				= 'Produktname';
$_['column_model']				= 'Modell';
$_['column_image']				= 'Bild';
$_['column_quantity']			= 'Menge';
$_['column_status']				= 'Status';
$_['column_action']				= 'Aktion';

// Entry
$_['entry_name']				= 'Produktname';
$_['entry_meta_keywords']		= 'Meta Tag Schlüsselwörter';
$_['entry_meta_description']	= 'Meta Tag Beschreibung';
$_['entry_description']			= 'Beschreibung';
$_['entry_store']            	= 'Stores';
$_['entry_keyword']          	= 'SEO Schlüsselwort';
$_['entry_model']				= 'Modell';
$_['entry_sku']					= 'SKU';
$_['entry_location']			= 'Ort';
$_['entry_manufacturer']		= 'Hersteller';
$_['entry_shipping']			= 'Erfordert Versand';
$_['entry_date_available']		= 'Verfügbarkeitsdatum';
$_['entry_quantity']			= 'Lagerstand';
$_['entry_minimum']				= 'Mindestbestellmenge<span class="help">Mindestanzahl welche bestellt werden muss</span>';
$_['entry_stock_status']		= 'Status bei nicht lagernd';
$_['entry_status']				= 'Status';
$_['entry_tax_class']			= 'Steuerklasse';
$_['entry_cost']				= 'Wareneinsatz<span class="help">Nettowarenwert (Verwendung bei der Profitberechnung)</span>';
$_['entry_price']				= 'Nettopreis';
$_['entry_subtract']			= 'Von Lagerstand abziehen';
$_['entry_weight_class']		= 'Gewichtsklasse';
$_['entry_weight']				= 'Gewicht';
$_['entry_length']           	= 'Längenklasse';
$_['entry_dimension']			= 'Abmessungen (L x B x H)';
$_['entry_image']				= 'Bild<span class="help">Zum ändern bitte auf Bild klicken</span>';
$_['entry_customer_group']		= 'Kundengruppe';
$_['entry_date_start']			= 'Startdatum';
$_['entry_date_end']			= 'Ablaufdatum';
$_['entry_priority']			= 'Priorität';
$_['entry_option']				= 'Option';
$_['entry_option_value']		= 'Optionswert';
$_['entry_sort_order']			= 'Reihenfolge';
$_['entry_prefix']				= 'Vorzeichen';
$_['entry_category']			= 'Kategorie';
$_['entry_download']			= 'Downloads';
$_['entry_related']				= 'Ähnliche Produkte';
$_['entry_tags']				= 'Tags<span class="help">Begriffe für Tagmodul (jeweils getrennt durch Komma)</span>';

// Error
$_['error_name']				= 'Produktname muss zwischen 3 und 255 Buchstaben lang sein!';
$_['error_model']				= 'Herstellernummer muss zwischen 3 und 24 Zeichen lang sein!';
$_['error_required_data']		= 'Erforderliche Daten nicht angegeben! Bitte Felder überprüfen.';

// new mic
$_['entry_maximum']				= 'Maximalbestellmenge<span class="help">Wird hier ein Wert GLEICH der Mindestbestellmenge eingetragen, wird kein Eingabefeld angezeigt. Der Kunde kann jedoch mehrmals den Button anklicken</span>';
// OCIE 1.2.3
$_['entry_show_if_no_stock']	= 'Zeige Produkt ohne Lagerstand<span class="help">Zeigt dieses Produkt auch dann an wenn kein Lagerstand vorhanden<br />Hinweis: Als Ausverkauft kann keine Bestellung getätigt werden</span>';
$_['entry_assign_to_cat']		= 'Automatisch zuwiesen<span class="help">Soll dieses Produkt wenn der Lagerstand Null ist automatisch in eine andere Kategorie verschoben werden</span>';
$_['entry_top_product']			= 'Topprodukt<span class="help">Wird diese Einstellung aktiviert, kann das Produkt sowohl mit dem betreffenden Modul als auch der unten definierte Banner angezeigt werden</span>';
$_['entry_banner']				= 'Banner<span class="help">Optionales Bild welches dann angezeigt wird wenn Produkt als Topprodukt markiert ist<br />Zum ändern bitte auf Bild klicken</span>';
$_['entry_bannercode']			= 'Bannercode<span class="help">Individueller Bannercode. Wenn angegeben Verwendung anstatt des Bannerbildes</span>';
$_['sel_text_defined']			= 'Text wie definiert';
$_['sel_as_sold_out']			= 'Als Ausverkauft';
$_['entry_template']			= 'Vorlage<span class="help">Name der Vorlagen muss mit \'product\' beginnen</span>';