<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($foto)
	{
		$data = array(
				'KD_OBAT'		=> $this->input->post('kd_obat'),
				'KD_SUPPLIER'	=> $this->input->post('kd_supplier'),
				'NM_OBAT'		=> $this->input->post('nm_obat'),
				'PRODUSEN'		=> $this->input->post('produsen'),
				'HARGA'			=> $this->input->post('harga'),
				'JML_STOK'		=> $this->input->post('jml_stok'),
				'FOTO'			=> $foto['file_name']
			);
		$this->db->insert('obat', $data);

		if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_obat()
	{
		return $this->db->where('JML_STOK > 0')
						->order_by('KD_OBAT', 'ASC')
						->get('obat')
						->result();
	}

	public function delete($kd_obat)
	{
		$this->db->where('KD_OBAT', $kd_obat)
				 ->delete('obat');

		if ($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function supplier()
	{
		return $this->db->order_by('kd_supplier', 'ASC')
						->get('supplier')
						->result();
	}

	public function get_njupuk($kd_obat)
	{
		return $this->db->where('KD_OBAT', $kd_obat)
						->get('obat')
						->row();
	}

	public function update_obat($kd_obat,$foto)
	{
		$data = array(
				'NM_OBAT'	=> $this->input->post('nm_obat'),
				'PRODUSEN'	=> $this->input->post('produsen'),
				'HARGA'		=> $this->input->post('harga'),
				'JML_STOK'	=> $this->input->post('jml_stok'),
				'FOTO'		=> $foto['file_name']
			);
		$this->db->where('KD_OBAT', $kd_obat)
				 ->update('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file obat_model.php */
/* Location: ./application/models/obat_model.php */