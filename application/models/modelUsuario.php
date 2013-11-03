<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelUsuario extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function checkEmail($email)
    {
    		$query = $this->db->query('SELECT COUNT( email ) AS total FROM usuarios WHERE email = \''.$email.'\'');
    		$a =$query->result();
    		return $a[0]->total; //seleciono a Row 0, e o campo Total (que eu usei como "alias" na consulta acima)
    }
    function cadastrar($nome,$email,$renasem, $cpfcnpj, $CEP, $endereco, $num, $bairro, $cidade, $estado, $senha)
	{
	   	$query = $this->db->query('INSERT INTO `sementeseviveiros`.`usuarios` (`email`, `nome`, `senha`, `renasem`, `cpfcnpj`, `CEP`, `endereco`, `numero`, `bairro`, `cidade`, `estado`) VALUES (\''.$email.' \', \''. $nome.'\', \''. $senha.'\', \''.$renasem.'\', \''.$cpfcnpj.'\', \''.$CEP.'\', \''.$endereco.'\', \''.$num.'\', \''.$bairro.'\', \''.$cidade.'\', \''. $estado.'\');');
	}
}