<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anexo_IX extends CI_Controller {
	public function index()
	{
		$this->load->view('/modules/Reports/IX/index');
	}
}