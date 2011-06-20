<?php
//
// 	PHP bridge
//  from textpattern to opencart
//
//
//	Johannes Henseler
//	indiebikes.com
//
//
class ControllerModuleMyModule extends Controller {
	protected function index() {
		//Load the language file for this module - catalog/language/module/my_module.php
		$this->language->load('module/my_module');

		//Get the title from the language file
      	$this->data['heading_title'] = $this->language->get('heading_title');

		//Load any required model files - catalog/product is a common one, or you can make your own DB access
		//methods in catalog/model/module/my_module.php
		$this->load->model('module/my_module');


/*
 * 
 * 
 * What you do here depends on what you want your module to do. You should call your model methods to get some
 * data out of the DB and then make it accessible to your view file by putting it in the $this->data[] array.
 * 
 * 
 * 
 */

//Example functionality: pull through customer firstnames and make them available to the view.

		$this->data['customers'] = $this->model_module_my_module->getCustomerFirstnames();


		$this->id = 'my_module';


		//Choose which view to display this module with - the left and right column use the same file, the home page center
		//column uses its own view file.
		if ($this->config->get('my_module_position') == 'home') {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/my_module_home.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/my_module_home.tpl';
			} else {
				$this->template = 'default/template/module/my_module_home.tpl';
			}
		} else {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/my_module.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/my_module.tpl';
			} else {
				$this->template = 'default/template/module/my_module.tpl';
			}
		}

		$this->render();
	}

	public function bridge() {

		$this->load->model('catalog/product');
		
		// Warenkorb leern
		$this->cart->clear();

		// Bike-Array mit get-Variable füllen
		$bike = $_GET;

//		echo $bike["l10n"];

		// Add all components to opencart basket

		// INDIEBIKE
		// add the indiebike experience first
		$this->cart->add("49",1);

		// FRAME
		$vars = array("wasabi"=>0,
					  "white"=>1,
					  "black"=>2,
					  "skyan"=>3);
		switch ($bike["size"]) {
			case 52:
				// FRAME 52cm
				// #55
				$this->add_product_with_options(55,$vars,$bike["frame"]);
				break;
			case 55:
				// FRAME 55cm
				// #58
				$this->add_product_with_options(58,$vars,$bike["frame"]);
				break;
			case 59:
				// FRAME 59 cm
				// #57
				$this->add_product_with_options(57,$vars,$bike["frame"]);
				break;
		}

		// CRANKS
		// #59
		// black gold silver
		$vars = array("black"=>0,
					  "gold"=>1,
					  "silver"=>2);
		$this->add_product_with_options(59,$vars,$bike["cranks"]);

		// CHAIN
		// #60
		$vars = array("black"=>0,
					  "red"=>1,
					  "white"=>2,
					  "yellow"=>3);
		$this->add_product_with_options(60,$vars,$bike["chain"]);
	
		// SADDLE
		// #62
		$vars = array("brown"=>0,
					  "white"=>1,
					  "black"=>2);
		$this->add_product_with_options(62,$vars,$bike["saddle"]);

		// HANDLEBARS
		switch ($bike["handlebar"]) {
			case "bullhornbar":
				// BULLHORN BAR
				// #64
				$vars = array("chrome"=>0,
							  "black"=>1);
				$this->add_product_with_options(64,$vars,$bike["handlebarcolor"]);
				break;
			case "riserbar":
				// RISER BAR
				// #66
				$vars = array("black"=>0);
				$this->add_product_with_options(66,$vars,$bike["handlebarcolor"]);

				// GRIPS
				// #61
				$vars = array("black"=>0,
							  "white"=>1,
							  "brown"=>2);
				$this->add_product_with_options(61,$vars,$bike["grips"]);
				break;
			case "flatbar":
				// FLAT BAR
				// #65
				$vars = array("chrome"=>0,
							  "black"=>1);
				$this->add_product_with_options(65,$vars,$bike["handlebarcolor"]);
				break;
			case "dropbar":
				// DROP BAR
				// #63
				$vars = array("chrome"=>0,
							  "black"=>1);
				$this->add_product_with_options(63,$vars,$bike["handlebarcolor"]);
				break;
		}

		// TIRES
		// #68
		$vars = array("red"=>0,
					  "black"=>1,
					  "white"=>2,
					  "yellow"=>3);
		$this->add_product_with_options(68,$vars,array($bike["fronttire"],$bike["reartire"]),2);

		// NOTE: maybe it is unelegant to merge this two options into one order,
		// because unsufficent stack message appears if only 1 options is out ot stock

		// RIM
		// #67
		$vars = array("red"=>0,
					  "white"=>1,
					  "black"=>2);
		$this->add_product_with_options(67,$vars,array($bike["frontrim"],$bike["rearrim"]),2);

		// LOGO
		// #69
		$vars = array("black"=>0,
					  "white"=>1);
		$this->add_product_with_options(69,$vars,$bike["logo"]);

		// add bike to session for later reference
		$_SESSION["bike"] = $bike;
//		print_r($_SESSION);

		// everything fine, no other error message? then we tell ajax that we are finished here.
		echo "1";

	}

	//
	//
	// THE BRIDGING
	//
	// this adds a given product with options into the basket
	// $id: product-id
	// $vars: expected options IN ORDER OF OPENCART (!!), javascript-values to array-positions
	// NEVER CHANGE THE ORDER OF OPTIONS IN OPENCART WITHOUT ADJUSTING PARENT FUNCTION!
	//
	function add_product_with_options($id,$vars,$bikesetting,$quantity=1) {
		$this->load->model('catalog/product');

		// get all options from product
		$options = $this->model_catalog_product->getProductOptions($id);

		if (is_array($bikesetting)) {
			$multipleoptions = array();
			$x = 0;
			foreach ($bikesetting as $value) {
				// id of option-set
				$options_id = $options[$x]["product_option_id"];
				// id of picked option (from bike konfigurator)
				$options_picked = $options[$x]["option_value"][$vars[$value]]["product_option_value_id"];
				$x++;
				$multipleoptions[$options_id] = $options_picked;
			}
			// finally, add with options
			$this->cart->add($id,$quantity,$multipleoptions);
		} else {
			// id of option-set
			$options_id = $options[0]["product_option_id"];
			// id of picked option (from bike konfigurator)
			$options_picked = $options[0]["option_value"][$vars[$bikesetting]]["product_option_value_id"];

			// finally, add with options
			$this->cart->add($id,$quantity,array($options_id=>$options_picked));
		}

	}
}
?>