<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='transaksi_view';
			$data['obat']=$this->obat_model->get_data_obat();
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
	}

	public function add_view()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='transaksi_add_view';
			$data['obat']=$this->obat_model->get_data_obat();
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
	}

	public function beli_view()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='transaksi_beli_view';
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
	}

}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */