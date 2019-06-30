<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('home/donatur/template/head', array("title" => $title), true),
			"main_js" => $this->load->view('home/donatur/template/main_js', false, true),
		);
		return $page;
	}

	public function index()
	{ 
		$path = "";
		$data = array(
			"page" => $this->load("Beranda", $path),
			"content" =>$this->load->view('home/index', false, true)
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
