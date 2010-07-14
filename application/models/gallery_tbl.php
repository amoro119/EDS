<?php
class Gallery_tbl extends Model {
	function Gallery_tbl() {
		parent::Model();	
	}
	function viewCategories() {
		$this->db->select('id, title, order_id');
		$this->db->from('gallery_categories');
		$this->db->order_by('order_id', 'asc');	
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function viewParticular($catID) {
		$this->db->select('id, title, order_id, description');
		$this->db->from('gallery_categories');
		$this->db->where('id', $catID);	
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function insertCategory() {
		if (isset($_POST['title'])) {
			$this->title = $_POST['title'];
			$this->order_id = $_POST['order_id'];
			$this->description = $_POST['description'];
			$insertNew = $this->db->insert('gallery_categories', $this);
			if ($insertNew) {
				redirect('gallery');
			} else {
				echo("Fail");
			}
		}
	}
	function updateCategory() {
		if (isset($_POST['title'])) {
			$this->title = $_POST['title'];
			$this->order_id = $_POST['order_id'];
			$this->description = $_POST['description'];
			$insertNew = $this->db->update('gallery_categories', $this, array('id' => $_POST['id']));
			if ($insertNew) {
				redirect('gallery');
			} else {
				echo("Fail");
			}
		}
	}
	function deleteCategory() {
		$deleteRow =  $this->uri->segment(3);
		if (isset($deleteRow)) {
			$this->db->where('id', $deleteRow);
			$del = $this->db->delete('gallery_categories');
			if ($del) {
				$delImages = $this->db->get_where('gallery_assets',array('cat_id'=>$deleteRow));
				if ($delImages->num_rows() > 0) {
					foreach ($delImages->result() as $img) {
						unlink('./uploads/'.$img->filename);
						unlink('./uploads/'.$img->thumbnail);
					}
				}
				$delImg = $this->db->delete('gallery_assets' , array('cat_id' => $deleteRow));
				redirect('gallery');
			} else {
				echo("Fail");
			}
		}
	}
	function showImages($catID) {
		$this->db->select('*');
		$this->db->from('gallery_assets');
		$this->db->where('cat_id', $catID);
		$this->db->order_by('gallery_assets.order_num', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function particularImage($id) {
		$this->db->select('img_id, filename, thumbnail, order_num, caption, cat_id');
		$this->db->from('gallery_assets');
		$this->db->where('img_id', $id);	
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function insertImage($catId, $filename, $thumbname) {
		if (isset($_POST['id'])) {
			$this->cat_id = $catId;
			$this->caption = $_POST['caption'];
			$this->order_num = $_POST['order_num'];
			$this->filename = $filename;
			$this->thumbnail = $thumbname;
			$insertNew = $this->db->insert('gallery_assets', $this);
			if ($insertNew) {
				redirect('gallery/images/'.$_POST['id']);
			} else {
				echo("Fail");
			}
		}
	}
	function updateImage() {
		if (isset($_POST['img_id'])) {
			$this->caption = $_POST['caption'];
			$this->order_num = $_POST['order_num'];
			$insertNew = $this->db->update('gallery_assets', $this, array('img_id' => $_POST['img_id']));
			if ($insertNew) {
				redirect('gallery/images/'.$_POST['cat_id']);
			} else {
				echo("Fail");
			}
		}
	}
	function deleteImage() {
		$deleteRow =  $this->uri->segment(3);
		if (isset($deleteRow)) {
			$this->db->where('img_id', $deleteRow);
			$insertNew = $this->db->delete('gallery_assets');
			if ($insertNew) {
				redirect('gallery');
			} else {
				echo("Fail");
			}
		}
	}
	function imgToDelete($fileid){
		$query = $this->db->get_where('gallery_assets',array('img_id'=>$fileid));
		$result = $query->result();
		return $result[0]->filename;
	}
	function thumbToDelete($fileid){
		$query = $this->db->get_where('gallery_assets',array('img_id'=>$fileid));
		$result = $query->result();
		return $result[0]->thumbnail;
	}
}