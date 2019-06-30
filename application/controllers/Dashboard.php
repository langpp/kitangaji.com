<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('dashboard/template/head', array("title" => $title), true),
			"sidebar" => $this->load->view('dashboard/template/sidebar', false, true),
			"header" => $this->load->view('dashboard/template/header', false, true),
			"main_js" => $this->load->view('dashboard/template/main_js', false, true),
			"footer" => $this->load->view('dashboard/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Dashboard", $path),
			"content" =>$this->load->view('dashboard/index', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}
	
	public function daftarGuru()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Guru", $path),
			"content" =>$this->load->view('dashboard/daftarGuru', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function daftarMurid()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Murid", $path),
			"content" =>$this->load->view('dashboard/daftarMurid', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function daftarDonatur()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Donatur", $path),
			"content" =>$this->load->view('dashboard/daftarDonatur', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function profileGuru()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Guru", $path),
			"content" =>$this->load->view('dashboard/profileGuru', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function profileMurid()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Murid", $path),
			"content" =>$this->load->view('dashboard/profileMurid', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function profileDonatur()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Donatur", $path),
			"content" =>$this->load->view('dashboard/profileDonatur', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function rencanaKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Rencana Kbm", $path),
			"content" =>$this->load->view('dashboard/rencanaKbm', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function progressKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Progress Kbm", $path),
			"content" =>$this->load->view('dashboard/progressKbm', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function finalKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Final Kbm", $path),
			"content" =>$this->load->view('dashboard/finalKbm', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function rencanaProyek()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Rencana Proyek", $path),
			"content" =>$this->load->view('dashboard/rencanaProyek', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function progressProyek()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Progress Proyek", $path),
			"content" =>$this->load->view('dashboard/progressProyek', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function finalProyek()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Final Proyek", $path),
			"content" =>$this->load->view('dashboard/finalProyek', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function keuanganKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Keuangan Kbm", $path),
			"content" =>$this->load->view('dashboard/keuanganKbm', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function keuanganProyek()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Keuangan Proyek", $path),
			"content" =>$this->load->view('dashboard/keuanganProyek', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function Banner()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Banner", $path),
			"content" =>$this->load->view('dashboard/banner', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function Berita()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Berita", $path),
			"content" =>$this->load->view('dashboard/berita', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function Video()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Video", $path),
			"content" =>$this->load->view('dashboard/video', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function kotakSaran()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Kotak Saran", $path),
			"content" =>$this->load->view('dashboard/kotakSaran', false, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

}