<?php
class Install extends Controller {
	function Install() {
		parent::Controller();
		if ($this->db->table_exists('db_users')) redirect('login');
	}
	function index() {
		$this->load->view('install');
	}
	function gentables() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('install');
		} else {		
			$us = $_POST['username'];
			$pw = $_POST['password'];
			
			$this->load->dbforge();
			$db_users_fields = array(
		                        'id' => array(
		                                                 'type' => 'INT',
		                                                 'auto_increment' => TRUE,
		                                          ),
		                        'username' => array(
		                                                 'type' => 'VARCHAR',
		                                                 'constraint' => '255',
		                                          ),
		                        'password' => array(
		                                                 'type' =>'VARCHAR',
		                                                 'constraint' => '255',
		                                          ),
		                );
			$this->dbforge->add_field($db_users_fields);
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('db_users', TRUE);
		
		
			$gallery_categories_fields = array(
		                        'id' => array(
		                                                 'type' => 'INT',
		                                                 'auto_increment' => TRUE,
		                                          ),
		                        'title' => array(
		                                                 'type' => 'VARCHAR',
		                                                 'constraint' => '255',
		                                          ),
		                        'description' => array(
		                                                 'type' =>'TEXT',
		                                          ),
		                        'order_id' => array(
		                                                 'type' => 'INT',
		                                          ),
		                );
			$this->dbforge->add_field($gallery_categories_fields);
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('gallery_categories', TRUE);
		
		
			$gallery_assets_fields = array(
		                        'img_id' => array(
		                                                 'type' => 'INT',
		                                                 'auto_increment' => TRUE,
		                                          ),
		                        'cat_id' => array(
		                                                 'type' => 'INT',
		                                          ),
		                        'order_num' => array(
														'type' =>'INT',
		                                          ),
		                        'filename' => array(
		                                                'type' => 'VARCHAR',
														'constraint' => '255',
		                                          ),
								'thumbnail' => array(
					                                    'type' => 'VARCHAR',
														'constraint' => '255',
					                                          ),
								'caption' => array(
					                                    'type' => 'TEXT',
					                                          ),
		                );
		
			$this->dbforge->add_field($gallery_assets_fields);
			$this->dbforge->add_key('img_id', TRUE);
			$this->dbforge->create_table('gallery_assets', TRUE);
		
		
			$settings_fields = array(
		                        'id' => array(
		                                                 'type' => 'INT',
		                                                 'auto_increment' => TRUE,
		                                          ),
		                        'thumb_width' => array(
		                                                 'type' => 'INT',
		                                          ),
		                        'thumb_height' => array(
														'type' =>'INT',
		                                          ),
		                );
			$this->dbforge->add_field($settings_fields);
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('settings', TRUE);
		
			$sett->thumb_width = 100;
			$sett->thumb_height = 75;
		
			$createSampleSettings = $this->db->insert('settings', $sett);
		
			$this->username = $us;
			$this->password = $pw;
			$insertNew = $this->db->insert('db_users', $this);
			if ($insertNew) {
				$this->_created($us,$pw);
			} else {
				echo("Fail");
			}
		}	
	}
	function _created($us, $pw) {
		$this->load->model('users_tbl');
		$results = $this->users_tbl->login($us,$pw);
		if ($results == false) redirect('login');
		else {
			$this->session->set_userdata(array('userid'=>$results));
			redirect('gallery');
		}
	}
}