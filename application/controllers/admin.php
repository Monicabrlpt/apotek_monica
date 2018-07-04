<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE)
		{
			redirect(base_url('index.php/web'));
		} else {
			$this->load->view('login_view');
		}
	}

	public function masuk()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->admin_model->cek_user() == TRUE) {
					redirect(base_url('index.php/web'));
				} else {
					$data['notif'] = 'Login Gagal';
					$this->load->view('login_view');
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view');
			}
		}
	}

	public function logout()
	{
		$data = array(
				'username'	=> '',
				'logged_in'	=> FALSE
			);
		$this->session->sess_destroy();
		redirect('admin');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */