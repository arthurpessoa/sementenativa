<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editarUsuario extends CI_Controller {
	public function checkCadastro()
	{

		 $this->load->model('ModelCadastrarUsuario');

		 //recebo os dados do form
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

		 $emailCheck = $this->ModelCadastrarUsuario->checkEmail($email);
		 
		 if($emailCheck)
		 {
		 	$data['erro'] = '*Email já cadastrado!';
		 	$this->load->view('editarUsuario',$data);	
		 }
		 else
		 {
		 	$this->ModelCadastrarUsuario->cadastrar($nome,$email,$sexo, $CEP, $endereco, $num, $bairro, $cidade, $estado, $senha);
		 }


	}
	public function index()
	{
		$data['erro'] = '';
		$this->load->view('cadastrarUsuario',$data);
	}
}