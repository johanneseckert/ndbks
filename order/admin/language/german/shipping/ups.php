<?php
/**
 * @version		$Id: ups.php 655 2010-03-09 17:22:01Z mic $
 * @package		OpenCart
 * @subpackage	Language Admin German
 */
// Heading
$_['heading_title']    				= 'UPS';

// Text
$_['text_shipping']    				= 'Versand';
$_['text_success']     				= 'UPS Versand erfolgreich geändert!';
$_['text_regular_daily_pickup']    = 'Immer tägliche Abholung';
$_['text_customer_counter']        = 'Kundenschalter';
$_['text_daily_pickup']            = 'Tägliche Abholung';
$_['text_one_time_pickup']         = 'Einmalige Abholung';
$_['text_on_call_air_pickup']      = 'Auf Abruf Luftversand';
$_['text_letter_center']           = 'Briefzentrum';
$_['text_air_service_center']      = 'Luftschalter';
$_['text_suggested_retail_rates']  = 'Vorgegebene Raten (UPS Geschäft)';
$_['text_package']                 = 'Packet';
$_['text_ups_letter']              = 'UPS Brief';
$_['text_ups_tube']                = 'UPS Schlauch';
$_['text_ups_pak']                 = 'UPS Paket';
$_['text_ups_express_box']         = 'UPS Express Box';
$_['text_ups_25kg_box']            = 'UPS 25kg Box';
$_['text_ups_10kg_box']            = 'UPS 10kg Box';
$_['text_us']                      = 'US Versand';
$_['text_ca']                      = 'Kanada Versand';
$_['text_eu']                      = 'EU Versand';
$_['text_pr']                      = 'Puerto Rico Versand';
$_['text_mx']                      = 'Mexiko Versand';
$_['text_other']                   = 'Alle anderen Länder';
$_['text_test']                    = 'Test';
$_['text_production']              = 'Live';
$_['text_residential']             = 'Privat';
$_['text_commercial']              = 'Kommerziell';
$_['text_next_day_air']            = 'Nächster Tag Luft';
$_['text_2nd_day_air']             = 'Übernächster Tag Luft';
$_['text_ground']                  = 'Eben';
$_['text_worldwide_express']       = 'Worldwide Express';
$_['text_worldwide_express_plus']  = 'Worldwide Express Plus';
$_['text_worldwide_expedited']     = 'Worldwide Expedited';
$_['text_express']                 = 'Express';
$_['text_standard']                = 'Standard';
$_['text_3_day_select']            = '3 Tage';
$_['text_next_day_air_saver']      = 'Nächster Tag Spartarif';
$_['text_next_day_air_early_am']   = 'Nächster Tag Vormittag';
$_['text_expedited']               = 'Beschleunigt';
$_['text_2nd_day_air_am']          = 'Übernächster Tag Vormittag';
$_['text_saver']                   = 'Spartarif';
$_['text_express_early_am']        = 'Express früher Vormittag';
$_['text_express_plus']            = 'Express Plus';
$_['text_today_standard']          = 'Heute Standard';
$_['text_today_dedicated_courier'] = 'Heute Expresskurier';
$_['text_today_intercity']         = 'Heute Innerstädtisch';
$_['text_today_express']           = 'Heute Express';
$_['text_today_express_saver']     = 'Heute Express Spartarif';

// Entry
$_['entry_key']                    = 'Berechtigung<span class="help">Hier den von UPS vergebenen Berechtigungscode angeben.</span>';
$_['entry_username']               = 'Benutzername<span class="help">Hier UPS Service Benutzername angeben.</span>';
$_['entry_password']               = 'Passwort<span class="help">Hier UPS Benutzerpasswort angeben.</span>';
$_['entry_pickup']                 = 'Abholmethode<span class="help">Wie soll UPS das Paket abholen (nur wenn Lieferung innerhalb USA)?</span>';
$_['entry_packaging']              = 'Packetart<span class="help">Welche Art von Paket wird verwendet?</span>';
$_['entry_classification']         = 'Kundenklassencode<span class="help">01 - Wenn Rechnung über UPS-Konto und tägl. Abholung, 03 - Kein UPS-Konto oder Rechnung über UPS-Konto aber keine tägl. Abholung, 04 - Wenn Versand über UPS-Geschäft (nur wenn Ursprung in USA)</span>';
$_['entry_origin']                 = 'Lieferherkunftscode<span class="help">Welches Herkunftsland soll verwendet werden (diese Einstellung dient nur dem Kunden die UPS-Produktnamen zu zeigen)</span>';
$_['entry_city']                   = 'Herkunftsstadt<span class="help">Name der Herkunftsstadt.</span>';
$_['entry_state']                  = 'Herkunft Staat<span class="help">2-Zeichenabkürzung des Herkunftsstaates (nur US).</span>';
$_['entry_country']                = 'Herkunft Land<span class="help">2-Zeichenabkürzung des Herkunftslandes.</span>';
$_['entry_postcode']               = 'Herkunft PLZ<span class="help">Postleitzahl der Herkunft.</span>';
$_['entry_test']                   = 'Test oder Livemodus<span class="help">Soll dieses Modul im Test oder Live verwendet werden?</span>';
$_['entry_quote_type']             = 'Notiz<span class="help">Notiz bei privater oder geschäftlicher Lieferung.</span>';
$_['entry_negotiated_rates']       = 'Spezielle Konditionen<span class="help">Falls mit UPS spezielle Konditionen ausverhandelt sind, sollen diese verwendet werden (dafür muss auch nachstehend die UPS-Kundennummer angegeben werden.</span>';
$_['entry_account_number']         = 'UPS Kundennummer<span class="help">Hier die UPS-Kundennummer angeben wenn spezielle Konditionen verrechnet werden sollen.</span>';
$_['entry_manual_rate']            = 'Individuelle Konditionen<span class="help">Hier den Prozentsatz angeben welcher verrechnet werden soll. Hinweis: wurde bei \'Speziellen Konditionen\' oben Ja angeführt, wird dieser Wert hier nicht berücksichtigt. Anwendung: z.B. bedeutet 57 dass anstatt der normalen UPS-Gebühr nur 57% verrechnet werden.</span>';
$_['entry_insurance']              = 'Versicherung<span class="help">Soll die Lieferung versichert werden?</span>';
$_['entry_service']                = 'Dienste<span class="help">Welche UPS-Dienste werden angeboten.</span>';
$_['entry_display_time']           = 'Zeige Lieferzeit<span class="help">Soll die Lieferzeit angezeigt werden (z.B. Lieferung innerhalb 3-5 Tagen)</span>';
$_['entry_display_weight']         = 'Zeige Liefergwicht<span class="help">Soll das Liefergwicht angezeigt werden (z.B. 4.27 kg)</span>';
$_['entry_tax']                    = 'Steuerklasse';
$_['entry_geo_zone']               = 'Geo Zone';
$_['entry_status']                 = 'Status';
$_['entry_sort_order']             = 'Reihenfolge';

// Error
$_['error_key']                    = 'Berechtigungsschlüssel erforderlich!';
$_['error_username']               = 'Benutzername erforderlich!';
$_['error_password']               = 'Passwort erforderlich!';
$_['error_city']                   = 'Herkunftsstadt erforderlich!';
$_['error_state']                  = 'Herkunftsstaat erforderlich!';
$_['error_country']                = 'Herkunftsland erforderlich!';