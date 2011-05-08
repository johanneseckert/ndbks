<?php
class ControllerModuleNdbks extends Controller {
	private $error = array(); 
	public function index() {   

		$this->load->language('module/ndbks');

		$this->document->title = $this->language->get('heading_title');
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate())) {
			$this->model_setting_setting->editSetting('ndbks', $this->request->post);		
					
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->redirect(HTTPS_SERVER . 'index.php?route=extension/module&token=' . $this->session->data['token']);
		}
				
		$this->data['heading_title'] = $this->language->get('heading_title');

		$this->data['text_enabled'] = $this->language->get('text_enabled');
		$this->data['text_disabled'] = $this->language->get('text_disabled');
		
		$this->data['entry_code'] = $this->language->get('entry_code');
		$this->data['entry_status'] = $this->language->get('entry_status');
		
		$this->data['button_save'] = $this->language->get('button_save');
		$this->data['button_cancel'] = $this->language->get('button_cancel');

 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}
		
 		if (isset($this->error['code'])) {
			$this->data['error_code'] = $this->error['code'];
		} else {
			$this->data['error_code'] = '';
		}
		



		
		$this->data['action'] = HTTPS_SERVER . 'index.php?route=module/ndbks&token=' . $this->session->data['token'];
		
		$this->data['cancel'] = HTTPS_SERVER . 'index.php?route=extension/module&token=' . $this->session->data['token'];

		if (isset($this->request->post['ndbks_code'])) {
			$this->data['ndbks_code'] = $this->request->post['ndbks_code'];
		} else {
			$this->data['ndbks_code'] = "trlalaa";
		}	
		
		if (isset($this->request->post['ndbks_status'])) {
			$this->data['ndbks_status'] = $this->request->post['ndbks_status'];
		} else {
			$this->data['ndbks_status'] = $this->config->get('ndbks_status');
		}
		
		$this->template = 'module/ndbks.tpl';
		$this->children = array(
			'common/header',	
			'common/footer'	
		);
		
		$this->response->setOutput($this->render(TRUE), $this->config->get('config_compression'));
	}
	
	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/ndbks')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->request->post['ndbks_code']) {
			$this->error['code'] = $this->language->get('error_code');
		}
		
		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}
?>