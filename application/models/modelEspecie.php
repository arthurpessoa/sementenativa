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
		$query = $this->db->query('SELECT * FROM especie where especie.cientifico = "'.$especie.'"');
		$a = $query->result();
    	return $a[0]->id;
	}
	function dadosespecie($id)
	{
		$query = $this->db->query('SELECT * FROM especie where especie.id = '.$id);
		return $query->result();
	}
	function dadoscolheita($id)
	{
		$query = $this->db->query('SELECT * FROM colheita where colheita.idEspecie = '.$id);
		if($query==null)
		{
			return array();
		}
		return $query->result();
	}
	function dadosgerminacao($id)
	{
		$query = $this->db->query('SELECT * FROM germinacao where germinacao.idEspecie = '.$id);
		if($query==null)
		{
			return array();
		}
		return $query->result();
	}
	function dadoscaracterizacao($id)
	{
		$query = $this->db->query('SELECT * FROM caracterizacao where caracterizacao.idEspecie = '.$id);
		if($query==null)
		{
			return array();
		}
		return $query->result();
	}
	function getAllSpecies()
	{
		$query = $this->db->query('SELECT cientifico FROM especie');
		$ans = array();
		$a = $query->result();
		$c = count($a);
		for($i = 0; $i < $c; $i++)
		{
			$ans[$i] = $a[$i]->cientifico;
		}
		return $ans;
	}
	function BuscaEspecies($especie)
	{
		$query = $this->db->query('SELECT cientifico FROM especie WHERE cientifico LIKE \'%'.$especie.'%\' OR popular LIKE \'%'.$especie.'%\'');
		$ans = array();
		$a = $query->result();
		$c = count($a);
		for($i = 0; $i < $c; $i++)
		{
			$ans[$i] = $a[$i]->cientifico;
		}
		return $ans;
	}
}
