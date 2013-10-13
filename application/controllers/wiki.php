<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wiki extends CI_Controller {
	public function index()
	{
		$data['oi'][0] = "teste1";
		$data['oi'][1] = "teste2";
		$this->load->view('contato', $data);
	}
}