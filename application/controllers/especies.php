<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Especies extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelEspecie');
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('especies', $data);
	}
}