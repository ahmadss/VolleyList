<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header("Content-type:application/json");

class ApiBerita extends CI_Controller {

	public function get_berita() {
		$q = $this -> db -> query("SELECT judul, gambar FROM berita");
		$data["data"] = $q ->result_array();

		echo json_encode($data);
	}

}
