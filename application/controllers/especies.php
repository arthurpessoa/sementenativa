<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Especies extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelEspecie');
		$this->load->view('especies');
	}
}