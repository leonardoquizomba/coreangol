<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Coreangol';
		$data['social'] = array(
			'facebook' => '',
			'twitter' => '',
			'behance' => '',
			'dribbble' => '',
			'linkedin' => '',
			'youtube' => '',
		);
		$data['contactos'] = array(
			'email' => 'support@Construct.com',
			'horario' => 'Seg - Sab 9:00 - 19:00',
			'telefone' => '(+244) xxx xxx xxx',
		);
		$this->load->view('site/home', $data);
	}
}
