<?php
class Settings_tbl extends Model {
	function Settings_tbl() {
		parent::Model();
	}
	function viewSettings() {
		$query = $this->db->get('settings');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $sett) {
				$data[] = $sett;
			}
			return $data;
		}
	}
	function updateSettings() {
		if (isset($_POST['thumb_width'])) {
			$this->thumb_width = $_POST['thumb_width'];
			$this->thumb_height = $_POST['thumb_height'];
			$insertNew = $this->db->update('settings', $this);
			if ($insertNew) {
				redirect('settings');
			} else {
				echo("Fail");
			}
		}
	}
}