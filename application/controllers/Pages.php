<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Home Page';
		$data['message'] = 'Hello World From The Controller';

/*		$this->load->view('Pages/Elements/header', $data);
		$this->load->view('Pages/Elements/navigation', $data);
		$this->load->view('Pages/home', $data);
		$this->load->view('Pages/Elements/footer', $data);*/

		$this->load->view('Layouts/master', $data);
	}
}
?>