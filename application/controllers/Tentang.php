<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Tentang';
		$data['active_menu'] = 'Tentang';
		$data['content'] = $this->load->view('tentang/tentang', '', true);

		$this->load->view('template/template', $data);
	}
}