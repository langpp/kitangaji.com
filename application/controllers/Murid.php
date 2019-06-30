<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('home/murid/template/head', array("title" => $title), true),
			"main_js" => $this->load->view('home/murid/template/main_js', false, true),
		);
		return $page;
	}

	public function index()
	{ 
		$path = "";
		$data = array(
			"page" => $this->load("Beranda", $path),
			"content" =>$this->load->view('home/murid/index', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function invoice()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Invoice", $path),
			"content" =>$this->load->view('home/murid/invoice', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function jadwalKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Jadwal Kbm", $path),
			"content" =>$this->load->view('home/murid/jadwalKbm', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function laporan()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan", $path),
			"content" =>$this->load->view('home/murid/laporan', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function laporanKbm()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Kbm", $path),
			"content" =>$this->load->view('home/murid/laporanKbm', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function laporanKeuangan()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Laporan Keuangan", $path),
			"content" =>$this->load->view('home/murid/laporanKeuangan', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function profile()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Profile Murid", $path),
			"content" =>$this->load->view('home/murid/profile', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}

	public function detail()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Detail Kegiatan", $path),
			"content" =>$this->load->view('home/murid/detail', false, true)
		);
		$this->load->view('home/murid/template/default_template', $data);
	}
	
}
