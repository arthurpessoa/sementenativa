<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GerarDocumentos extends CI_Controller {
	public function index()
	{
		$this->load->view('gerarDocumentos');
	}
}