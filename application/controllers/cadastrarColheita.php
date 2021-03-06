<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarColheita extends CI_Controller {
	public function checkColheita()
	{
		$especie = $_POST['especie'];

		$nRev = $_POST['nRev'];
		$email = $_POST['email'];
		$titu = $this->checar($_POST['titu']);
		$autores = '';
		$revi = $this->checar($_POST['revi']);
		$ano = $_POST['ano'];
		$volu = $_POST['volu'];
		$pagI = $_POST['pagI'];
		$pagE = $_POST['pagE'];
		$clas = $this->checar($_POST['clas']);
		$loca = $this->checar($_POST['loca']);
		$flor = $this->checar($_POST['flor']);
		$peri = $this->checar($_POST['peri']);
		$metoc = $this->checar($_POST['metoc']);
		$equi = $this->checar($_POST['equi']);
		$tempc = $this->checar($_POST['tempc']);
		$tempsf = $this->checar($_POST['tempsf']);
		$cond = $this->checar($_POST['cond']);
		$metoe = $this->checar($_POST['metoe']);
		$queb = $this->checar($_POST['queb']);
		$tempob = $this->checar($_POST['tempob']);
		$arma = $this->checar($_POST['arma']);
		$subs = $this->checar($_POST['subs']);
		$temper = $this->checar($_POST['temper']);
		$foto = $this->checar($_POST['foto']);
		$trat = $this->checar($_POST['trat']);
		$melh = $_POST['melh'];
		$test = $this->checar($_POST['test']);
		$metod = $this->checar($_POST['metod']);
		$reco = $this->checar($_POST['reco']);
		$obse = $_POST['obse'];
		$font = $this->checar($_POST['font']);
		
		if(!is_numeric($nRev))
		{
			$nRev = 'null';
		}
		if(!is_numeric($ano))
		{
			$ano = 'null';
		}
		if(!is_numeric($volu))
		{
			$volu = 'null';
		}
		if(!is_numeric($pagI))
		{
			$pagI = 'null';
		}
		if(!is_numeric($pagE))
		{
			$pagE = 'null';
		}
		
		
		$i = 1;

		while(isset($_POST['auto'.$i]))
		{
			$autores = $autores.$_POST['auto'.$i].", ";
			$i++;
		}
		
		$autores = substr($autores, 0, -2);
		
		$this->load->model('ModelEspecie');
		$id = $this->ModelEspecie->getID($especie);

		$this->load->model('ModelColheita');
		$this->ModelColheita->addColheita($id, $email, $nRev, $titu, $autores, $revi, $ano, $volu, $pagI, $pagE, $clas, $loca, $flor, $peri, $metoc, $equi, $tempc, $tempsf, $cond, $metoe, $queb, $tempob, $arma, $subs, $temper, $foto, $trat, $melh, $test, $metod, $reco, $obse, $font);
		
		$data['erro'] = '';
		$data['ok'] = 'Colheita cadastrada com sucesso!';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarColheita', $data);

	}
	public function index()
	{
		$this->load->model('ModelEspecie');
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['ok'] = '';
		$this->load->view('CadastrarColheita', $data);
	}

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



	public function checar($var){
		if(empty(trim($var))){
			$var = "Não Especificado";
		}
		return $var;
	}
}