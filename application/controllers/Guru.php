<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('email') != true || $this->session->userdata('role') != "2") {
			$this->session->set_flashdata('notif_login', '<script>toastr.warning("Anda Tidak Ada Akses ! Silahkan Login Terlebih Dahulu", "Warning !", {"timeOut": "0","extendedTImeout": "0"});</script>');
            redirect('login');
        }
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('home/guru/template/head', array("title" => $title), true),
			"sidebar" => $this->load->view('home/guru/template/sidebar', false, true),
			"header" => $this->load->view('home/guru/template/header', false, true),
			"main_js" => $this->load->view('home/guru/template/main_js', false, true),
			"footer" => $this->load->view('home/guru/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{ 
		$path = "";
		$data = array(
			"page" => $this->load("Beranda", $path),
			"content" =>$this->load->view('home/guru/index', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}

	public function invoice()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Invoice", $path),
			"content" =>$this->load->view('home/guru/invoice', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}

	public function jadwalKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Jadwal Kbm", $path),
			"content" =>$this->load->view('home/guru/jadwalKbm', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}

	public function laporanKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Kbm", $path),
			"content" =>$this->load->view('home/guru/laporanKbm', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}

	public function laporanKeuangan()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Keuangan", $path),
			"content" =>$this->load->view('home/guru/laporanKeuangan', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}

	public function profile()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Guru", $path),
			"content" =>$this->load->view('home/guru/profile', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}
	
	public function detail()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Detail Kegiatan", $path),
			"content" =>$this->load->view('home/guru/detail', false, true)
		);
		$this->load->view('home/guru/template/default_template', $data);
	}
}
