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
	function getID($especie)
	{
		$query = $this->db->query('SELECT id FROM especie where especie.cientifico = '.$especie);
		return $query->result()[0]->id;
	}
	function dadosespecie($id)
	{
		$query = $this->db->query('SELECT * FROM especie where especie.id = '.$id);
		return $query->result();
	}
	function dadoscolheita($id)
	{
		$query = $this->db->query('SELECT * FROM colheita where colheita.idEspecie = '.$id);
		return $query->result();
	}
	function dadosgerminacao($id)
	{
		$query = $this->db->query('SELECT * FROM germinacao where germicanao.idEspecie = '.$id);
		return $query->result();
	}
	function dadoscaracterizacao($id)
	{
		$query = $this->db->query('SELECT * FROM caracterizacao caracterizacao.idEspecie = '.$id);
		return $query->result();
	}
}
