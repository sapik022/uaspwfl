<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Model');
		$data['barang'] = $this->Model->getBarang();
		$this->load->view('welcome_message', $data);

	}
	public function export()
	{
		$this->load->model('Model');
		$data['barang'] = $this->Model->getBarang();
		$this->load->view('export', $data);

	}

}
