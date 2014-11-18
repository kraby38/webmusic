<?php

/**
* Class pour recup les infos depuis la bdd
* @author Guillaume B.
* @version 1.0.0
*/

class music_model extends CI_Model {

	public function get($id) {
		$this->db->select('Noms_Musique, Fichier_Musique');
		$this->db->where('ID_Musique', $id);
		$query = $this->db->get('musique');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$query = $query[0];
			$array = array(
				'Nom' => $query['Noms_Musique'],
				'Musique' => $query['Fichier_Musique']
			);
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_next($id) {
		$id += 1;
		$this->db->select('Noms_Musique, Fichier_Musique');
		$this->db->where('ID_Musique', $id);
		$query = $this->db->get('musique');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$query = $query[0];
			$array = array(
				'Nom' => $query['Noms_Musique'],
				'Musique' => $query['Fichier_Musique']
			);
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_previous($id) {
		$id -= 1;
		$this->db->select('Noms_Musique, Fichier_Musique');
		$this->db->where('ID_Musique', $id);
		$query = $this->db->get('musique');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$query = $query[0];
			$array = array(
				'Nom' => $query['Noms_Musique'],
				'Musique' => $query['Fichier_Musique']
			);
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_all() {
		$this->db->select('Noms_Musique, Fichier_Musique');
		$query = $this->db->get('musique');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			for ($i=0; $i < count($query); $i++) {
				$array[$i] = array(
				'Nom' => $query[$i]['Noms_Musique'],
				'Musique' => $query[$i]['Fichier_Musique']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_playlist($id) {
		$this->db->select('Nom_Playliste, Noms_Musique, Fichier_Musique');
		$this->db->join('playliste', 'ID_Pla = ID_Playliste');
		$this->db->join('musique', 'ID_Mus = ID_Musique');
		$this->db->where('ID_Pla', $id);
		$query = $this->db->get('lmp');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			for ($i=0; $i < count($query); $i++) {
				$array[$i] = array(
				'Playlist' => $query[$i]['Nom_Playliste'],
				'Nom' => $query[$i]['Noms_Musique'],
				'Musique' => $query[$i]['Fichier_Musique']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_album($id) {
		$this->db->select('Nom_Album, Image_Album, Noms_Musique, Fichier_Musique');
		$this->db->join('album', 'ID_Alb = ID_Album');
		$this->db->join('musique', 'ID_Mus = ID_Musique');
		$this->db->where('ID_Alb', $id);
		$query = $this->db->get('lmaa');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			$array[0] = array(
				'Album' => $query[0]['Nom_Album'],
				'Image' => $query[0]['Image_Album']
			);
			for ($i=1; $i < count($query)+1; $i++) {
				$array[$i] = array(
				'Nom' => $query[$i-1]['Noms_Musique'],
				'Musique' => $query[$i-1]['Fichier_Musique']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_artist($id) {
		$this->db->select('Nom_Artiste, Noms_Musique, Fichier_Musique');
		$this->db->join('artiste', 'ID_Art = ID_Artiste');
		$this->db->join('musique', 'ID_Mus = ID_Musique');
		$this->db->where('ID_Art', $id);
		$query = $this->db->get('lmaa');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			$array[0] = array(
				'Artiste' => $query[0]['Nom_Artiste']
			);
			for ($i=1; $i < count($query)+1; $i++) {
				$array[$i] = array(
				'Nom' => $query[$i-1]['Noms_Musique'],
				'Musique' => $query[$i-1]['Fichier_Musique']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}

	public function get_genre($id) {
		$this->db->select('Genre_Genre, Noms_Musique, Fichier_Musique');
		$this->db->join('genre', 'ID_GEN = ID_Genre');
		$this->db->join('musique', 'ID_MUS = ID_Musique');
		$this->db->where('ID_GEN', $id);
		$query = $this->db->get('lmg');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			$array[0] = array(
				'Genre' => $query[0]['Genre_Genre']
			);
			for ($i=1; $i < count($query)+1; $i++) {
				$array[$i] = array(
				'Nom' => $query[$i-1]['Noms_Musique'],
				'Musique' => $query[$i-1]['Fichier_Musique']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}
	
	public function get_album_artiste($id) {
		$this->db->select('Nom_Album, Image_Album, Id_Album, Nom_Artiste');
		$this->db->where('ID_Artiste', $id);
		$query = $this->db->get('vueartalb');
		if ($query->num_rows() > 0) {
			$query = $query->result_array();
			$array = NULL;
			$array[0] = array(
				'Artiste' => $query[0]['Nom_Artiste']
			);
			for ($i=1; $i < count($query)+1; $i++) {
			
				$array[$i] = array(
				'Nom_Album' => $query[$i-1]['Nom_Album'],
				'Id_Album' => $query[$i-1]['Id_Album'],
				'Image_Album' => $query[$i-1]['Image_Album']
				);
			};
		} else {
			$array = NULL;
		}
		return $array;
	}

}

?>