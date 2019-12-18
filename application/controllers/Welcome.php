<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home');
	}
	public function index()
	{
		$arr['data'] = $this->home->index();
		$this->load->view('templates/header_home');
		$this->load->view('home_page', $arr);
		$this->load->view('templates/footer');
	}
}
