<?php
class Settings extends Controller {
	function Settings() {
		parent::Controller();
		$this->load->model('settings_tbl');
		$loggedin = $this->session->userdata('userid');
		if (!isset($loggedin) or $loggedin=='') redirect('login');
	}
	function index() {
		$data['rows'] = $this->settings_tbl->viewSettings();
		$this->load->view('settings_view', $data);
	}
	function update() {
		$this->settings_tbl->updateSettings();
	}
}