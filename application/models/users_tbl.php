<?php
class Users_tbl extends Model {
	function Users_tbl() {
		parent::Model();
	}
	function doUsersExist() {
		if (!$this->db->table_exists('db_users')) redirect('install');
	}
	function login($username, $password) {
		$query = $this->db->get_where('db_users', array('username'=>$username, 'password'=>$password));
		if ($query->num_rows()==0) return false;
		else {
			$result = $query->result();
			$userid = $result[0]->id;
			return $userid;
		}
	}
	function changepw() {
		$this->password = $_POST['password'];
		$insertNew = $this->db->update('db_users', $this, array('id' => $_POST['id']));
		if ($insertNew) {
			redirect('profile/success');
		} else {
			echo("Fail");
		}
	}
}