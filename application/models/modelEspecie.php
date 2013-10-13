<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelEspecie extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function checkEspecie($cientifico)
    {
    	$query = $this->db->query('SELECT COUNT( cientifico ) AS total FROM especie WHERE cientifico = \''.$cientifico.'\'');
    	$a = $query->result();
    	return $a[0]->total; //seleciono a Row 0, e o campo Total (que eu usei como "alias" na consulta acima)
    }
    function cadastrar($cientifico,$familia,$popular)
	{
		$pop = "";
		$arrlength=count($popular);
		for($x=0;$x<$arrlength-1;$x++)
		{
			$pop = $pop.$popular[$x].'#';
		}
		$pop = $pop.$popular[$arrlength-1]; //sem o # no final
		$query = $this->db->query('INSERT INTO `sementeseviveiros`.`especie` (`cientifico`, `popular`, `familia`) VALUES (\''.$cientifico.' \', \''. $pop.'\', \''. $familia.'\');');
	}
}
