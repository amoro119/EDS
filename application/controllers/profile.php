<?php
class Profile extends Controller {
	function Profile() {
		parent::Controller();
		$loggedin = $this->session->userdata('userid');
		if (!isset($loggedin) or $loggedin=='') redirect('login');
	}
	function index() {
		$this->load->view('change_password');
	}
	function changepw() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('change_password');
		} else {
			$this->load->model('users_tbl');
			$this->users_tbl->changepw();
		}
	}
	function success() {
		$this->load->view('change_password_success');
	}
}