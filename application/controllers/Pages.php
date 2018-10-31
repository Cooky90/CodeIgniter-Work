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
		$data['content'] = 'Pages/home';

/*		$this->load->view('Pages/Elements/header', $data);
		$this->load->view('Pages/Elements/navigation', $data);
		$this->load->view('Pages/home', $data);
		$this->load->view('Pages/Elements/footer', $data);*/

		$this->load->view('Layouts/master', $data);
	}

	public function about()
	{
		$data['title'] = 'About Page';
		$data['message'] = 'Hello World From The Controller About';
		$data['content'] = 'Pages/about';
		$this->load->view('Layouts/master', $data);
	}

	public function profile()
	{
		$data['title'] = 'Profile';
		$data['message'] = 'Hello World From The Controller Profile';
		$data['content'] = 'Pages/profile';
		$this->load->view('Layouts/master', $data);
	}
}
?>