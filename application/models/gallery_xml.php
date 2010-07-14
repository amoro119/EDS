<?php
class Gallery_xml extends Model {
	function Gallery_xml() {
		parent::Model();
	}
	function viewXML() {
		$this->db->select('*');
		$this->db->from('gallery_categories');
		$this->db->order_by('order_id', 'asc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$projArray[] = $row;
				$this->db->select('*');
				$this->db->from('gallery_assets');
				$this->db->order_by('order_num', 'asc');
				$this->db->where('cat_id =', $row->id);
				$query2 = $this->db->get();
				$imgArray = array();
				if ($query2->num_rows() > 0) {
					foreach ($query2->result() as $img) {
						$imgArray[] = $img;
					}
				}
				$row->images = $imgArray;
			}
			$data = $projArray;
			return $data;
		}
	}
}