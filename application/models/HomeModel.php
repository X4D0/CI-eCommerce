<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	// Get semua data dari sebuah tabel
	public function get_data($table){
		return $this->db->get($table)->result_array();
	}
}
?>