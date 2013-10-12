<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarCaracterizacao extends CI_Controller {
	public function checkCaracterizacao()
	{

	}
	public function index()
	{
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['especies'] = array('esp1', 'esp2', 'esp3');
		$this->load->view('CadastrarCaracterizacao', $data);
	}
}