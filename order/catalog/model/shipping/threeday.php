<?php
class ModelShippingthreeday extends Model {
	function getQuote($address) {
		$this->load->language('shipping/threeday');
		
		if ($this->config->get('threeday_status')) {
      		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('threeday_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		
      		if (!$this->config->get('threeday_geo_zone_id')) {
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
			
      		$quote_data['threeday'] = array(
        		'id'           => 'threeday.threeday',
        		'title'        => $this->language->get('text_title'),
        		'cost'         => $this->config->get('threeday_cost'),
        		'tax_class_id' => $this->config->get('threeday_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($this->config->get('threeday_cost'), $this->config->get('threeday_tax_class_id'), $this->config->get('config_tax')))
      		);

      		$method_data = array(
        		'id'         => 'threeday',
        		'title'      => $this->language->get('text_title'),
        		'quote'      => $quote_data,
				'sort_order' => $this->config->get('threeday_sort_order'),
        		'error'      => FALSE
      		);
		}
	
		return $method_data;
	}
}
?>