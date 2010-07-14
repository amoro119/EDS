<?php
class Login extends Controller {
	function Login() {
		parent::Controller();
		$this->load->model('users_tbl');
	}
	function index() {
		$this->users_tbl->doUsersExist();
		$this->load->view('login');
	}
	function go() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$results = $this->users_tbl->login($username,$password);
			if ($results == false) {
				redirect('login');
			} else {
				$this->session->set_userdata(array('userid'=>$results));
				redirect('gallery');
			}
		}
	}
	function logout() {
		$this->session->set_userdata(array('userid'=>''));
		$this->session->sess_destroy();
		redirect('login');
	}
}