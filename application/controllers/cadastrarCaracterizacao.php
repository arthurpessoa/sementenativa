<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarCaracterizacao extends CI_Controller {
	public function checkCaracterizacao()
	{
		$especie = $_POST['especie']; //nome da espécie, descobrir numero
		$data = $_POST['data'];
		$localOrigem = $_POST['localOrigem'];
		$matura = $_POST['matura'];
		$dispersao = $_POST['dispersao'];
		$fpk = $_POST['fpk'];
		$pmf = $_POST['pmf'];
		$spf = $_POST['spf'];
		$spk = $_POST['spk'];
		$pms = $_POST['pms'];
		$fs = $_POST['fs'];
		$tamsem = $_POST['tamsem'];
		$tamfruto = $_POST['tamfruto'];
		$tipofruto = $_POST['tipofruto'];
		$pureza = $_POST['pureza'];
		$obs = $_POST['obs'];
		$fontes = $_POST['fontes'];
	}
	public function index()
	{
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['especies'] = array('esp1', 'esp2', 'esp3');
		$this->load->view('CadastrarCaracterizacao', $data);
	}
}