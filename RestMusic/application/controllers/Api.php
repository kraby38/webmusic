<?php

require(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller
{
	function music_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function next_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_next( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function previous_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_previous( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function all_get() {
		$music = $this->music_model->get_all();

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function playlist_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_playlist( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function album_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_album( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function artist_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_artist( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

	function genre_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_genre( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}
	
	function artisteAlbum_get() {
		if(!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$music = $this->music_model->get_album_artiste( $this->get('id') );

		if($music) {
			$this->response($music, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}
	
}
?>