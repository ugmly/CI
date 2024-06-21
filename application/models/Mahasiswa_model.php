<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model {
public function __construct() {
parent::__construct();
}
// Data array data_mahasiswa
private $data_mahasiswa = array(
array('id' => 1, 'nama' => 'Agus Santoso', 'npm' => '1412130011', 'angkatan' =>'2020', 'kelas' => 'A', 'alamat' => 'Jl. Contoh No. 1', 'mata_kuliah_favorit' =>'Pemrograman Web'),
array('id' => 2, 'nama' => 'Budi Raharjo', 'npm' => '1412130022', 'angkatan' =>'2019', 'kelas' => 'B', 'alamat' => 'Jl. Contoh No. 2', 'mata_kuliah_favorit' => 'Basis Data'),
array('id' => 3, 'nama' => 'Citra Dewi', 'npm' => '1412130033', 'angkatan' => '2021', 'kelas' => 'C', 'alamat' => 'Jl. Contoh No. 3', 'mata_kuliah_favorit' => 'Pemrograman Lanjut'),
array('id' => 4, 'nama' => 'Dian Nugraha', 'npm' => '1412130044', 'angkatan' => '2020', 'kelas' => 'A', 'alamat' => 'Jl. Contoh No. 4', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
array('id' => 5, 'nama' => 'Eka Sari', 'npm' => '1412130055', 'angkatan' => '2019', 'kelas' => 'B', 'alamat' => 'Jl. Contoh No. 5', 'mata_kuliah_favorit' => 'Sistem Operasi')
);
// Fungsi untuk mendapatkan data mahasiswa
public function get_mahasiswa() {
	return $this->data_mahasiswa;
}
public function search_mahasiswa($keyword) {
	$result = array();
	foreach ($this->data_mahasiswa as $mahasiswa) {
		$keyword = strtolower($keyword);
		$nama = strtolower($mahasiswa['nama']);
		$npm = strtolower($mahasiswa['npm']);
		$angkatan = strtolower($mahasiswa['angkatan']);
		$alamat = strtolower($mahasiswa['alamat']);
		$mata_kuliah_favorit = strtolower($mahasiswa['mata_kuliah_favorit']);
		if (strpos($nama, $keyword) !== false) {
			$result[] = $mahasiswa;
		} if (strpos($npm, $keyword) !== false) {
			$result[] = $mahasiswa;
		} if (strpos($angkatan, $keyword) !== false) {
			$result[] = $mahasiswa;
		} if (strpos($alamat, $keyword) !== false) {
			$result[] = $mahasiswa;
		} if (strpos($mata_kuliah_favorit, $keyword) !== false) {
			$result[] = $mahasiswa;
		} 




		}
		return $result;
	}
}