<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarCaracterizacao extends CI_Controller {

	public function buscaEspecie(){
		$q = $_GET['q'];
		$this->load->model('ModelEspecie');
		
		if($q!=""){
			$especies = $this->ModelEspecie->BuscaEspecies($q);
			echo "<h3>Resultados</h3>";
			$c = count($especies);
			for($i = 0; $i < $c; $i++)
			{
				if($i==20)break;
				
				  	echo "<input type='hidden' name='hidenInput".$i."' id='hidenInput".$i."' value='".$especies[$i]."'>";
       				echo "<a id=\"link".$i."\" href=\"#\" onclick=\"BuscaParaTextbox(document.getElementById('hidenInput".$i."').value);\">".$especies[$i]."</a>";
			}
		}


	}
	public function checkCaracterizacao()
	{
		$this->load->model('ModelCaracterizacao');
		
		$especie = $_POST['tboxespecies']; //nome da espécie, descobrir numero
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
		
		
		$this->load->model('ModelEspecie');
		$id = $this->ModelEspecie->getID($especie);
		
		
		$this->ModelCaracterizacao->addCaracterizacao($id, $data, $localOrigem, $matura, $dispersao, $fpk, $pmf, $spf, $spk, $pms, $fs, $tamsem, $tamfruto, $tipofruto, $pureza, $obs, $fontes);
		
		$data['erro'] = '';
		$data['ok'] = "Caracterização cadastrada com sucesso!";
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarCaracterizacao', $data);
		
	}
	public function index()
	{
		$this->load->model('ModelEspecie');
	
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['ok'] = '';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarCaracterizacao', $data);
	}
}