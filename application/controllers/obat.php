<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='obat_view';
			$data['obat']=$this->obat_model->get_data_obat();
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}	
	}

	public function add_view()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='obat_add_view';
			$data['sup']=$this->obat_model->supplier();
			$this->load->view('template', $data);	
		} else {
			redirect('admin');
		}
	}
/*----------------------CRUD----------------------*/
/*----------------------CRUD----------------------*/
/*----------------------CRUD----------------------*/
	public function add()
	{
		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('kd_obat', 'Kode Obat', 'trim|required');
			$this->form_validation->set_rules('kd_supplier', 'Kode Supplier', 'trim|required');
			$this->form_validation->set_rules('produsen', 'Produsen', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']  = '2000';
				
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')){

					if ($this->obat_model->insert($this->upload->data()) == TRUE) {
						$data['notif']='Tambah Obat Berhasil';
						$data['main_view']='obat_add_view';
						$data['sup']=$this->obat_model->supplier();
						$this->load->view('template', $data);
					} else {
						$data['notif']='Tambah Obat Gagal';
						$data['main_view']='obat_add_view';
						$data['sup']=$this->obat_model->supplier();
						$this->load->view('template', $data);
					}

				} else {
					$data['main_view'] = 'obat_add_view';
					$data['notif'] = $this->upload->display_errors();
					$data['sup']=$this->obat_model->supplier();
					$this->load->view('template', $data);
				}

			} else {
				$data['notif']=validation_errors();
				$data['main_view']='obat_add_view';
				$data['sup']=$this->obat_model->supplier();
				$this->load->view('template', $data);
			}
		}
	}

	public function delete()
	{
		$kd_obat = $this->uri->segment(3);

		if ($this->obat_model->delete($kd_obat) == TRUE) {
			$this->session->set_flashdata('notif', 'Hapus Sukses');
			redirect('obat');
		} else {
			$this->session->set_flashdata('notif', 'Hapus Gagal');
			redirect('obat');
		}
	}

	public function lihat()
	{
		$data['main_view']='obat_edit_view';
		$kd_obat = $this->uri->segment(3);
		$data['detil'] = $this->obat_model->get_njupuk($kd_obat);
		$this->load->view('template', $data);
	}

	public function edit()
	{

		$kd_obat = $this->uri->segment(3);
		$data['detil'] = $this->obat_model->get_njupuk($kd_obat);

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nm_obat', 'Nama Obat', 'trim|required');
			$this->form_validation->set_rules('produsen', 'Produsen', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('jml_stok', 'Jumlah Stok', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';
				
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('foto')){
					if ($this->obat_model->update_obat($kd_obat,$this->upload->data()) == TRUE) {
						redirect('obat');
					} else {
						$data['main_view'] = 'obat_edit_view';
						$data['notif'] = 'Update Data Obat Gagal';
						$this->load->view('template', $data);
					}
				} else{
					$data['main_view'] = 'obat_edit_view';
					$data['notif'] = $this->upload->display_errors();
					$this->load->view('template', $data);
				}
				
			} else {
				$data['main_view'] = 'obat_edit_view';
				$data['notif'] = validation_errors();
				$this->load->view('template', $data);
			}
		}
	}
}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */