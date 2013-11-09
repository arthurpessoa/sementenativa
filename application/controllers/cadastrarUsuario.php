<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarUsuario extends CI_Controller {
	public function checkCadastro()
	{

		 $this->load->model('ModelUsuario');

		 //recebo os dados do form
		 $nome = $_POST['nome'];
		 $email = $_POST['email'];
		 //$sexo = $_POST['sexo'];
		 $renasem = $_POST['renasem'];
		 $cpfcnpj = $_POST['cpfcnpj'];
		 $CEP = $_POST['cep'];
		 $endereco = $_POST['endereco'];
		 $num = $_POST['num'];
		 $bairro = $_POST['bairro'];
		 $cidade = $_POST['cidade'];
		 $estado = $_POST['uf'];
		 $senha = $_POST['senha'];
		 $tipoUsr = $_POST['tipoUsr'];

		 $tecnico = '0';
		 $produtor = '0';

		 if($tipoUsr=='Tecnico')$tecnico='1';
		 if($tipoUsr=='Produtor')$produtor='1';

		 $emailCheck = $this->ModelUsuario->checkEmail($email);
		 
		 if($emailCheck)
		 {
		 	$data['erro'] = '*Email já cadastrado!';
		 	$data['ok'] = '';
		 	$this->load->view('cadastrarUsuario',$data);	
		 }
		 else
		 {
		 	$this->ModelUsuario->cadastrar($nome,$email, $renasem, $cpfcnpj, $CEP, $endereco, $num, $bairro, $cidade, $estado, $senha,$produtor,$tecnico);
		 	$data['erro'] = '';
		 	$data['ok'] = 'Usuário cadastrado com sucesso!';
		 	$this->load->view('login',$data);
		 	//$redirect =  base_url()."login"; //redireciona
			//header("location:$redirect");
		 }
	}
	public function index()
	{
		$data['erro'] = '';
		$this->load->view('cadastrarUsuario',$data);
	}
}