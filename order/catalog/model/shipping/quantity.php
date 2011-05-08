<?php 
class ModelShippingQuantity extends Model {    
  	public function getQuote($address) {
		$this->load->language('shipping/quantity');
		
		$quote_data = array();

		if ($this->config->get('quantity_status')) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "geo_zone ORDER BY name");
		
			foreach ($query->rows as $result) {
   				if ($this->config->get('quantity_' . $result['geo_zone_id'] . '_status')) {
   					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$result['geo_zone_id'] . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
				
					if ($query->num_rows) {
       					$status = TRUE;
   					} else {
       					$status = FALSE;
   					}
				} else {
					$status = FALSE;
				}
			
				if ($status) {
					$cost = '';
					$quantity = $this->cart->countProducts();
					
					$rates = explode(',', $this->config->get('quantity_' . $result['geo_zone_id'] . '_rate'));
					
					foreach ($rates as $rate) {
  						$data = explode(':', $rate);
  					
						if ($data[0] >= $quantity) {
							if (isset($data[1])) {
    							$cost = $data[1];
							}
					
   							break;
  						}
					}
					
					if ((string)$cost != '') { 
      					$quote_data['quantity_' . $result['geo_zone_id']] = array(
        					'id'           => 'quantity.quantity_' . $result['geo_zone_id'],
        					'title'        => $result['name'] . '  (' . $this->language->get('text_quantity') . ' ' . $quantity . ')',
        					'cost'         => $cost,
							'tax_class_id' => $this->config->get('quantity_tax_class_id'),
        					'text'         => $this->currency->format($this->tax->calculate($cost, $this->config->get('quantity_tax_class_id'), $this->config->get('config_tax')))
      					);	
					}
				}
			}
		}
		
		$method_data = array();
	
		if ($quote_data) {
      		$method_data = array(
        		'id'         => 'quantity',
        		'title'      => $this->language->get('text_title'),
        		'quote'      => $quote_data,
				'sort_order' => $this->config->get('quantity_sort_order'),
        		'error'      => FALSE
      		);
		}
	
		return $method_data;
  	}
}
?>