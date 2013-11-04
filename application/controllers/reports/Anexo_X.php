<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anexo_X extends CI_Controller {
	public function index()
	{
		$this->load->view('/modules/Reports/X/index');
	}
}