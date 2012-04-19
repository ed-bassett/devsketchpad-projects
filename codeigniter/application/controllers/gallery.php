<?php

class Gallery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ideas_model');
	}
	
	function index()
	{
		$data['title'] = 'Projects';
		$data['ideas'] = $this->ideas_model->get_ideas();

		$this->load->view('templates/header', $data);
		$this->load->view('gallery_view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function idea($slug = false)
	{
		$idea = $this->ideas_model->get_idea($slug);

		$this->load->view('templates/header', Array(
			'title' => $idea['name'],
		));
		$this->load->view('ideas/view', Array(
			'idea' => $idea,
		));
		$this->load->view('templates/footer');
	}
	public function idea_edit($id = false)
	{
		$data['idea'] = $this->ideas_model->get_ideas($id);

		$data['title'] = 'Edit ' . $data['idea']['name'];

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');		
	
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('ideas/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$slug = $this->ideas_model->update_idea();
			if ( $slug ) {
				redirect("gallery/$slug/");
			} else {
				$data['error'] = 'An error occured while updating ' . $data['idea']['name'];
				$this->load->view('templates/header', $data);
				$this->load->view('ideas/edit', $data);
				$this->load->view('templates/footer');
			}
		}
	}	
}

?>
