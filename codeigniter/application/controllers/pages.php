<?php

class Pages extends CI_Controller {

	public function view($page)
	{
		global $application_folder;
		if ( !file_exists("$application_folder/views/pages/$page.php") )
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}

?>