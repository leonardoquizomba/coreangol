<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Coreangol | Dashboard';
		$this->load->view('admin/partes/header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('admin/partes/footer', $data);
	}
}
