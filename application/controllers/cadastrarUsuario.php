<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarUsuario extends CI_Controller {
	public function checkCadastro()
	{

		 $this->load->model('ModelCadastrarUsuario');
		
		 $nome = $_POST['nome'];
		 $email = $_POST['email'];
		 $sexo = $_POST['sexo'];
		 $CEP = $_POST['cep'];
		 $endereco = $_POST['endereco'];
		 $num = $_POST['num'];
		 $bairro = $_POST['bairro'];
		 $cidade = $_POST['cidade'];
		 $estado = $_POST['uf'];
		 $senha = $_POST['senha'];


		 $this->ModelCadastrarUsuario->cadastrar($nome,$email,$sexo, $CEP, $endereco, $num, $bairro, $cidade, $estado, $senha);
		 $this->load->view('cadastrarUsuario');	
	}
	public function index()
	{
		$this->load->view('cadastrarUsuario');
	}
}