<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarGerminacao extends CI_Controller {
	public function checkGerminacao()
	{
		$especie = $_POST['especie']; //nome da espécie, descobrir numero
		$temp = $_POST['temp'];
		$subs = $_POST['subs'];
		$descs = $_POST['descs'];
		$peso = $_POST['peso'];
		$repet = $_POST['repet'];
		$qd = $_POST['qd'];
		$dataini = $_POST['dataini'];
		$tempger = $_POST['tempger'];
		$datafim = $_POST['datafim'];
		$tipoluz = $_POST['tipoluz'];
		$umisub = $_POST['umisub'];
		$testegerm = $_POST['testegerm'];
		$fontes = $_POST['fontes'];

	}
	public function index()
	{
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['especies'] = array('esp1', 'esp2', 'esp3');
		$this->load->view('CadastrarGerminacao', $data);
	}
}