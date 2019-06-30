<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('home/template/head', array("title" => $title), true),
			"main_js" => $this->load->view('home/template/main_js', false, true),
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
		$this->load->view('home/template/default_template', $data);
	}

	public function detail()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Detail", $path),
			"content" =>$this->load->view('home/detail', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function donasi()
	{
		$path = "";
		$data = array(
			"page" => $this->load("All", $path),
			"content" =>$this->load->view('home/all', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function zakat()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Zakat", $path),
			"content" =>$this->load->view('home/zakat', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function login()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Login", $path),
			"content" =>$this->load->view('home/login', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function registerGuru()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Guru", $path),
			"content" =>$this->load->view('home/registerGuru', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function registerMurid()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Murid", $path),
			"content" =>$this->load->view('home/registerMurid', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function registerDonatur()
	{
		$path = "";
		$data = array(
			"page" => $this->load("Daftar Donatur", $path),
			"content" =>$this->load->view('home/registerDonatur', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}
	
}
