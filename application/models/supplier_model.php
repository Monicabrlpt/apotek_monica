<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$data = array(
				'KD_SUPPLIER'	=> $this->input->post('kd_supplier'),
				'NM_SUPPLIER'	=> $this->input->post('nm_supplier'),
				'ALAMAT'		=> $this->input->post('alamat'),
				'KOTA'			=> $this->input->post('kota'),
				'TELP'			=> $this->input->post('telp'),
			);
		$this->db->insert('supplier', $data);

		if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_supplier()
	{
		return $this->db/*->where('JML_STOK < 0')*/
						->order_by('KD_SUPPLIER', 'ASC')
						->get('supplier')
						->result();
	}

	public function delete($kd_supplier)
	{
		$this->db->where('KD_SUPPLIER', $kd_supplier)
				 ->delete('obat');
		$this->db->where('KD_SUPPLIER', $kd_supplier)
				 ->delete('supplier');

		if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_njupuk($kd_supplier)
	{
		return $this->db->where('KD_SUPPLIER', $kd_supplier)
						->get('supplier')
						->row();
	}

	public function update_supplier($kd_supplier)
	{
		$data = array(
				'NM_SUPPLIER' => $this->input->post('nm_supplier'),
				'ALAMAT' => $this->input->post('alamat'),
				'KOTA' => $this->input->post('kota'),
				'TELP' => $this->input->post('telp')
			);
		$this->db->where('KD_SUPPLIER', $kd_supplier)
				 ->update('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file supplier_model.php */
/* Location: ./application/models/supplier_model.php */