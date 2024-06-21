<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	// Method untuk mengambil semua data mahasiswa
	public function get_all_barang() {
		$query = $this->db->get('barang');
		return $query->result_array();
	}
	// Method untuk mengambil data mahasiswa sesuai pencarian
	public function search_data_barang($keyword) {
		$this->db->like('Kode_Barang', $keyword);
		$this->db->or_like('Nama_Barang', $keyword);
		$this->db->or_like('Kategori_Barang', $keyword);
		$this->db->or_like('Deskripsi_Barang', $keyword);
		$this->db->or_like('Harga_Beli', $keyword);
		$this->db->or_like('Harga_Jual', $keyword);
		$this->db->or_like('Stok_Barang', $keyword);
		$this->db->or_like('Supplier_Barang', $keyword);
		$this->db->or_like('Tanggal_Masuk', $keyword);
		$query = $this->db->get('tbarang');
		return $query->result_array();
	}

	// Method untuk mengambil data barang berdasarkan ID
	public function get_barang_by_id($id)
	{
		$query = $this->db->get_where('barang', ['id_barang' => $id]);
		return $query->row_array();
	}

	// Method untuk menambah data barang
	public function insert_barang($data)
	{
		return $this->db->insert('barang', $data);
	}

	// Method untuk mengupdate data barang
	public function update_barang($id, $data)
	{
		$this->db->where('id_barang', $id);
		return $this->db->update('barang', $data);
	}

	// Method untuk menghapus data barang
	public function delete_barang($id)
	{
		$this->db->where('id_barang', $id);
		return $this->db->delete('barang');
	}
}
