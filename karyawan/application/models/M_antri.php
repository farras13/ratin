<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_antri extends CI_Model
{

	public function get_no_antri()
	{
		$this->db->select('DATE_FORMAT(tanggal, "%d/%m/%Y %H:%i:%s") as tanggal, no_antri');		
		$query = $this->db->get('antrian')->result();
		// if ($query->num_rows() > 0) {
		// 	foreach ($query->result() as $data) {
		// 		$hasil = array(
		// 			'no_antri' => $data->no_antri,
		// 			'tanggal' => $data->tanggal
		// 		);
		// 	}
		// }
		return $query;
	}

	public function get_no_antrib()
	{
		return $this->db->get('antrianb')->result_array();
	}

	public function get_no_antric()
	{
		return $this->db->get('antrianc')->result_array();
	}

	public function get_no_antrid()
	{
		return $this->db->get('antriand')->result_array();
	}

	public function reset_no()
	{
		$this->db->empty_table('antrian');
	}

	public function reset_nob()
	{
		$this->db->empty_table('antrianb');
	}

	public function reset_noc()
	{
		$this->db->empty_table('antrianc');
	}

	public function reset_nod()
	{
		$this->db->empty_table('antriand');
	}
}

/* End of file antrian_model.php */
