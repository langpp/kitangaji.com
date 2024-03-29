<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('email') != true || $this->session->userdata('role') != "1") {
			$this->session->set_flashdata('notif_login', '<script>toastr.warning("Anda Tidak Ada Akses ! Silahkan Login Terlebih Dahulu", "Warning !", {"timeOut": "0","extendedTImeout": "0"});</script>');
            redirect('login');
        }
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('home/donatur/template/head', array("title" => $title), true),
			"sidebar" => $this->load->view('home/donatur/template/sidebar', false, true),
			"header" => $this->load->view('home/donatur/template/header', false, true),
			"main_js" => $this->load->view('home/donatur/template/main_js', false, true),
			"footer" => $this->load->view('home/donatur/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{ 
		$path = "";
		$data = array(
			"page" => $this->load("Beranda", $path),
			"content" =>$this->load->view('home/donatur/index', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function kbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("KBM", $path),
			"content" =>$this->load->view('home/donatur/kbm', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function laporanKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Kbm", $path),
			"content" =>$this->load->view('home/donatur/laporanKbm', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function laporanProyek()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Proyek", $path),
			"content" =>$this->load->view('home/donatur/laporanProyek', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function laporanKeuangan()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Keuangan", $path),
			"content" =>$this->load->view('home/donatur/laporanKeuangan', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function profile()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Donatur", $path),
			"content" =>$this->load->view('home/donatur/profile', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function profileGuru()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Guru", $path),
			"content" =>$this->load->view('home/donatur/profileGuru', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function profileGuruDetail()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Guru Detail", $path),
			"content" =>$this->load->view('home/donatur/profileGuruDetail', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function sukarela()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Donasi Sukarela", $path),
			"content" =>$this->load->view('home/donatur/sukarela', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function tetap()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Donasi Tetap", $path),
			"content" =>$this->load->view('home/donatur/tetap', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}

	public function detail()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Detail", $path),
			"content" =>$this->load->view('home/donatur/detail', false, true)
		);
		$this->load->view('home/donatur/template/default_template', $data);
	}
	
}
