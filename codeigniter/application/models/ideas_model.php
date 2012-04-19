<?php

class Ideas_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_ideas( $id = false ) {
		if ($id === false) {
			$query = $this->db->get('ideas');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('ideas', array('id' => $id));
		return $query->row_array();
	}
	
	public function get_idea( $slug = false ) {
		$query = $this->db->get_where('ideas', array('slug' => $slug));
		return $query->row_array();		
	}

	public function update_idea() {
		$data = array(
			'name'         => $this->input->post('name'),
			'description'  => $this->input->post('description'),
			'details'      => $this->input->post('details'),
			'instructions' => $this->input->post('instructions'),
			'url'          => $this->input->post('url'),
			'credits'      => $this->input->post('credits'),
		);

		if( $_FILES['image']['name'] ) {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	     = '100';
			$config['max_width']     = '1024';
			$config['max_height']    = '768';
			$config['overwrite']     = true;
	
			$this->load->library('upload', $config);
	
			if ( ! $this->upload->do_upload('image') )
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$upload = $this->upload->data();
	
				$data['image'] = $upload['file_name'];
			}
		}

		if ( $this->input->post('slug') ) {
			$data['slug'] = $this->input->post('slug');
		}
		else
		{
			$this->load->helper(array('form', 'url'));
			$data['slug'] = strtolower(url_title($this->input->post('name')));
		}

		$where = array(
			'id' => $this->input->post('id'),
		);

		if ( $this->db->update('ideas', $data, $where) ) {
			return $data['slug'];
		}
		return false;
	}
}



?>