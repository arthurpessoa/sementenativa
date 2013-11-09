<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelUsuario extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

     function checkProdutor($email)
    {
        $query = $this->db->query('SELECT produtor FROM usuarios WHERE email = \''.$email.'\'');
        $ans = array();
        $a = $query->result();
        $c = count($a);
        for($i = 0; $i < $c; $i++)
        {
            $ans[$i] = $a[$i]->produtor;
        }
        return $ans[0];    

    }

    function checkTecnico($email)
    {
        $query = $this->db->query('SELECT tecnico FROM usuarios WHERE email = \''.$email.'\'');
        $ans = array();
        $a = $query->result();
        $c = count($a);
        for($i = 0; $i < $c; $i++)
        {
            $ans[$i] = $a[$i]->tecnico;
        }
        return $ans[0];    
    }

    function checkAdmin($email)
    {
        $query = $this->db->query('SELECT admin FROM usuarios WHERE email = \''.$email.'\'');
        $ans = array();
        $a = $query->result();
        $c = count($a);
        for($i = 0; $i < $c; $i++)
        {
            $ans[$i] = $a[$i]->admin;
        }
        return $ans[0];
    }

    function checkEmail($email)
    {
    		$query = $this->db->query('SELECT COUNT( email ) AS total FROM usuarios WHERE email = \''.$email.'\'');
    		$a =$query->result();
    		return $a[0]->total; //seleciono a Row 0, e o campo Total (que eu usei como "alias" na consulta acima)
    }
    function cadastrar($nome,$email,$renasem, $cpfcnpj, $CEP, $endereco, $num, $bairro, $cidade, $estado, $senha, $produtor ,$tecnico)
	{
	   	$query = $this->db->query('INSERT INTO `sementeseviveiros`.`usuarios` (`email`, `nome`, `senha`, `CEP`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cpfcnpj`, `renasem`, `admin`, `produtor`, `tecnico`) VALUES (\''.$email.'\', \''.$nome.'\', \''.$senha.'\', \''.$CEP.'\', \''.$endereco.'\', \''.$num.'\', \''.$bairro.'\', \''.$cidade.'\', \''.$estado.'\', \''.$cpfcnpj.'\', \''.$renasem.'\', \'0\', \''.$produtor.'\',\''.$tecnico.'\');');
	}
}