<?php
class ModelShippingfourday extends Model {
	function getQuote($address) {
		$this->load->language('shipping/fourday');
		
		if ($this->config->get('fourday_status')) {
      		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('fourday_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		
      		if (!$this->config->get('fourday_geo_zone_id')) {
        		$status = TRUE;
      		} elseif ($query->num_rows) {
        		$status = TRUE;
      		} else {
        		$status = FALSE;
      		}
		} else {
			$status = FALSE;
		}

		$method_data = array();
	
		if ($status) {
			$quote_data = array();
			
      		$quote_data['fourday'] = array(
        		'id'           => 'fourday.fourday',
        		'title'        => $this->language->get('text_title'),
        		'cost'         => $this->config->get('fourday_cost'),
        		'tax_class_id' => $this->config->get('fourday_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($this->config->get('fourday_cost'), $this->config->get('fourday_tax_class_id'), $this->config->get('config_tax')))
      		);

      		$method_data = array(
        		'id'         => 'fourday',
        		'title'      => $this->language->get('text_title'),
        		'quote'      => $quote_data,
				'sort_order' => $this->config->get('fourday_sort_order'),
        		'error'      => FALSE
      		);
		}
	
		return $method_data;
	}
}
?>