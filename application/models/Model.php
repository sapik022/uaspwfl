<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	
	public function getBarang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori','kategori.id_kategori = barang.id_kategori' );
		return $this->db->get()->result_object();

	}
}