<?php

/**
*
*/
class User_model extends CI_Model
{

	public function get($id)
	{
		$this->db->select('id, nom, prenom, semestre_moyenne, ue1_moyenne, ue2_moyenne, ue3_moyenne');
		$this->db->where('id', $id);
		$query = $this->db->get('Users');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$query = $query[0];
			$array = array(
				'Prenom' => $query['id'],
				'Nom' => $query['nom'],
				'NumeroEtudiant' => $query['id'],
				'Image' => 'http://placekitten.com/180/180',
				'Stats' => array(
					'Semestre' => array(
						'Moyenne' => $query['semestre_moyenne']
						 ),
					'UE1' => array(
						'Moyenne' => $query['ue1_moyenne']
						 ),
					'UE2' => array(
						'Moyenne' => $query['ue2_moyenne']
						 ),
					'UE3' => array(
						'Moyenne' => $query['ue3_moyenne']
						 )
				 )
			 );
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_all()
	{
		$this->db->select('id, nom, prenom');
		$query = $this->db->get('Users');
		$query = $query->result_array();
		return $query;
	}
}

?>