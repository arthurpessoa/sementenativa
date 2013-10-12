<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelLogin extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function checkLogin($email,$senha)
    {
            //evitar o sql injection
            $email = stripslashes($email);
            $senha = stripslashes($senha);

    		$query = $this->db->query('SELECT COUNT( email ) AS total FROM usuarios WHERE email = \''.$email.'\' AND senha = \''.$senha.'\'');
    		$a =$query->result();
    		return $a[0]->total; //seleciono a Row 0, e o campo Total (que eu usei como "alias" na consulta acima)
    }
    function getNome($email)
    {
        $query = $this->db->query('SELECT `nome` FROM usuarios WHERE `email` = \''.$email.'\'');
        $a =$query->result();
        return $a[0]->nome; //seleciono a Row 0
    }
}