<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Mahasiswa_model'); // Memuat model Mahasiswa_model
	}
	public function index() {
		$data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa(); // Mendapatkan datamahasiswa dari model
		$this->load->view('mahasiswa_view', $data); // Menampilkan data mahasiswa ke view
	}
	public function search() {
		$keyword = $this->input->post('keyword'); // Ambil kata kunci pencarian dari form
		$data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa($keyword); // Carimahasiswa berdasarkan nama
		$this->load->view('mahasiswa_view', $data); // Menampilkan hasil pencarian ke view
	}

	public function input_data() {
		$this->load->view('input_data');
	}
	public function tampilkan_data() {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
		$this->form_validation->set_rules('angkatan', 'Angkatan', 'required|numeric|max_length[4]|min_length[4]');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|alpha|max_length[1]|regex_match[/[A-Z]/]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[20]');
		$this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah Favorit', 'required');
		$this->config->set_item('language', 'id');
		// Jalankan validasi
		if ($this->form_validation->run() == false) {
			// Jika validasi gagal, tampilkan kembali form inputdata
			$this->load->view('input_data');
		} else {

			// Ambil data dari form jika validasi berhasil
			$data['nama'] = $this->input->post('nama');
			$data['npm'] = $this->input->post('npm');
			$data['angkatan'] = $this->input->post('angkatan');
			$data['kelas'] = $this->input->post('kelas');
			$data['alamat'] = $this->input->post('alamat');
			$data['mata_kuliah'] = $this->input->post('mata_kuliah');
			// Tampilkan data di halaman lain
			$this->load->view('hasil_data', $data);
		}
	}
}