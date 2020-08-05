<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Coreangol';
		$data['portfolios'] = array(
			base_url('assets/images/3.1.jpg'),
			base_url('assets/images/3.2.jpg'),
			base_url('assets/images/4.2.jpg'),
			base_url('assets/images/4.4.jpg'),
			base_url('assets/images/4.6.jpg'),
			base_url('assets/images/5.4.jpg'),
			base_url('assets/images/7.1.jpg'),
			base_url('assets/images/7.2.jpg'),
		);
		$data['social'] = array(
			'facebook' => '',
			'twitter' => '',
			'behance' => '',
			'dribbble' => '',
			'linkedin' => '',
			'youtube' => '',
		);
		$data['contactos'] = array(
			'email' => 'geral@coreangol.co.ao',
			'horario' => 'Seg - Sab 9:00 - 19:00',
			'morada' => 'Rua Rainha Ginga n 35, 3 Andar<br/> Luanda, Angola',
			'telefone' => '(+244) 222392601/332612',
		);
		$this->load->view('site/home', $data);

	}
}
