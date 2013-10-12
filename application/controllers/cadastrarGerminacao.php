<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarGerminacao extends CI_Controller {
	public function checkGerminacao()
	{

	}
	public function index()
	{
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['especies'] = array('esp1', 'esp2', 'esp3');
		$this->load->view('CadastrarGerminacao', $data);
	}
}