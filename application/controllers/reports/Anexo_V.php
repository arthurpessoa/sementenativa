<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anexo_V extends CI_Controller {
	public function index()
	{
		$this->load->view('/modules/Reports/Anexo_V/index');
	}
}