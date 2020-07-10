<?php


class Idioma_model extends CI_Model
{
	public function getIdiomaInfo($desc, $idioma = 'pt')
	{

//		$query = $this->db->get('idioma');
//		$this->db->where('option_name', $desc);
//		return $query->result();


		$query = $this->db->select('*')->from('idioma')
			->where('option_name', $desc)
			->get();
		return $query;
	}
}
