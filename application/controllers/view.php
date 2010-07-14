<?php
class View extends Controller {
	function View() {
		parent::Controller();
		$this->load->model('gallery_xml');
	}
	function index() {
		$data['row'] = $this->gallery_xml->viewXML();
		$this->load->model('settings_tbl');
		$data['settings'] = $this->settings_tbl->viewSettings();
		$this->load->view('view_xml', $data);
	}
	function xml() {
		$data['row'] = $this->gallery_xml->viewXML();
		$this->load->model('settings_tbl');
		$data['settings'] = $this->settings_tbl->viewSettings();
		$this->load->view('view_xml', $data);
	}
	function json() {
		$data['row'] = $this->gallery_xml->viewXML();
		$this->load->model('settings_tbl');
		$data['settings'] = $this->settings_tbl->viewSettings();
		$this->load->view('view_json', $data);
	}
}