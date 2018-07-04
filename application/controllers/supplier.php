<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='supplier_view';
			$data['supplier']=$this->supplier_model->get_data_supplier();
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
	}

	public function add_view()
	{
		$data['main_view']='supplier_add_view';
		$this->load->view('template', $data);
	}

	public function edit_view()
	{
		$data['main_view']='supplier_edit_view';
		$this->load->view('template', $data);
	}
/*----------------------CRUD----------------------*/
/*----------------------CRUD----------------------*/
/*----------------------CRUD----------------------*/
	public function add()
	{
		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('kd_supplier', 'Kode Supplier', 'trim|required');
			$this->form_validation->set_rules('nm_supplier', 'Nama Supplier', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat Supplier', 'trim|required');
			$this->form_validation->set_rules('kota', 'Kota Supplier', 'trim|required');
			$this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required|min_length[12]|max_length[12]');

			if ($this->form_validation->run() == TRUE) {
				
				if ($this->supplier_model->insert() == TRUE) {
					$data['notif']='Tambah Supplier Berhasil';
					$data['main_view']='supplier_add_view';
					$this->load->view('template', $data);
				} else {
					$data['notif']='Tambah Supplier Gagal';
					$data['main_view']='supplier_add_view';
					$this->load->view('template', $data);
				}

			} else {
				$data['notif']=validation_errors();
				$data['main_view']='supplier_add_view';
				$this->load->view('template', $data);
			}
		}
	}

	public function delete()
	{
		$kd_supplier = $this->uri->segment(3);

		if ($this->supplier_model->delete($kd_supplier) == TRUE) {
			$this->session->set_flashdata('notif', 'Hapus Sukses');
			redirect('supplier');
		} else {
			$this->session->set_flashdata('notif', 'Hapus Gagal');
			redirect('supplier');
		}
	}

	public function lihat()
	{
		$data['main_view']='supplier_edit_view';
		$kd_supplier = $this->uri->segment(3);

		$data['detil'] = $this->supplier_model->get_njupuk($kd_supplier);

		$this->load->view('template', $data);
	}

	public function edit()
	{

		$kd_supplier = $this->uri->segment(3);
		$data['detil'] = $this->supplier_model->get_njupuk($kd_supplier);

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nm_supplier', 'Nama Supplier', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
			$this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required|min_length[12]|max_length[12]');

			if ($this->form_validation->run() == TRUE) {
				if ($this->supplier_model->update_supplier($kd_supplier) == TRUE) {
					redirect('supplier');
					$data['notif'] = 'Update Data Supplier Berhasil';
				} else {
					$data['main_view'] = 'supplier_edit_view';
					$data['notif'] = 'Update Data Supplier Gagal';
					$this->load->view('template', $data);
				}
			} else {
				$data['main_view'] = 'supplier_edit_view';
				$data['notif'] = validation_errors();
				$this->load->view('template', $data);
			}
		}
	}
}

/* End of file supplier.php */
/* Location: ./application/controllers/supplier.php */