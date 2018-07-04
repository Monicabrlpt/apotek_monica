<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view']='dashboard_view';
			$this->load->view('template', $data);	
		} else {
			redirect('admin');
		}
		
	}

}

/* End of file web.php */
/* Location: ./application/controllers/web.php */