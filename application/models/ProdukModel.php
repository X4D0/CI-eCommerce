<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	// Get semua data dari tabel prduk
	public function get_all(){
		return $this->db->get('produk')->result_array();
	}

	// Get suatu data pada tabel produk berdasarkan id
	public function get_produk($id_produk){
		$this->db->where('id_produk', $id_produk);
		return $this->db->get('produk')->row_array();
	}

	// Memasukkan sebuah data ke tabel produk
	public function insert_produk($data){
		return $this->db->insert('produk',$data);
	}

	//Mengubah sebuah data pada tabel berdasarkan id
	public function update_produk($id_produk, $data){
		$this->db->where('id_produk', $id_produk);
		return $this->db->update('produk',$data);
	}

	// Menghapus sebuah data pada tabel produk berdasarkan id
	public function delete_produk($id_produk){
		$this->db->where('id_produk', $id_produk);
		return $this->db->delete('produk');
	}
}
?>