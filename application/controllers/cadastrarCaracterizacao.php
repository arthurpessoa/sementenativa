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
				if($i==7)break;
				
				  	echo "<input type='hidden' name='hidenInput".$i."' id='hidenInput".$i."' value='".$especies[$i]."'>";
       				echo "<a id=\"link".$i."\" href=\"#\" onclick=\"BuscaParaTextbox(document.getElementById('hidenInput".$i."').value);\">".$especies[$i]."</a>";
			
       				echo "<br>";
			}
		}


	}
	public function checkCaracterizacao()
	{
		$this->load->model('ModelCaracterizacao');
		
		$especie = $_POST['tboxespecies']; //nome da espécie, descobrir numero
		$data = $this->checar($_POST['data']);
		
		$localOrigem = $this->checar($_POST['localOrigem']);
		
		$matura = $this->checar($_POST['matura']);
		$dispersao = $this->checar($_POST['dispersao']);
		$fpk = $_POST['fpk'];
		$pmf = $_POST['pmf'];
		$spf = $_POST['spf'];
		$spk = $_POST['spk'];
		$pms = $_POST['pms'];
		$fs = $this->checar($_POST['fs']);
		$tamsem = $this->checar($_POST['tamsem']);
		$tamfruto = $this->checar($_POST['tamfruto']);
		$tipofruto = $this->checar($_POST['tipofruto']);
		$pureza = $_POST['pureza'];
		$obs = $_POST['obs'];
		$fontes = $this->checar($_POST['fontes']);
		
		
		$this->load->model('ModelEspecie');
		$id = $this->ModelEspecie->getID($especie);
		
		
		$this->ModelCaracterizacao->addCaracterizacao($id, $data, $localOrigem, $matura, $dispersao, $fpk, $pmf, $spf, $spk, $pms, $fs, $tamsem, $tamfruto, $tipofruto, $pureza, $obs, $fontes);
		
		$hue['erro'] = "";
		$hue['ok'] = "Caracterização cadastrada com sucesso!";
		$hue['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarCaracterizacao', $hue);
		
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
	public function checar($var){
		if(empty(trim($var))){
			$var = "Não Especificado";
		}
		return $var;
	}
}