<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('page');
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

	public function forms()
	{
		echo base_url();
		$data['title'] = 'CI | Forms';
		$data['content'] = 'Pages/forms';
		$this->load->view('Layouts/master', $data);
	}

	public function form_submitted()
	{
		echo 'form submitted';
	}

	public function add_posts()
	{
		$data['title'] = 'CI | Add Post';
		$data['content'] = 'Pages/add_posts';
		$this->load->view('Layouts/master', $data);
	}

	public function form_posted()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required|callback_title_check');
		$this->form_validation->set_rules('body', 'Body', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'CI | Add Post';
			$data['content'] = 'Pages/add_posts';
			$this->load->view('Layouts/master', $data);
		}
		else
		{
			$title = $this->input->post('title');
			$body = $this->input->post('body');
			$data = array(
				'title' => $title,
				'body' => $body
			);

			if($this->page->create($data))
			{
			$data['title'] = 'CI | Form Posted';
			$data['content'] = 'Pages/form_posted';
			$this->load->view('Layouts/master', $data);
			}
			else
			{
				echo 'no data';
			}
		}		
	}

	public function title_check($str)
	{
		if($str == 'test')
		{
			$this->form_validation->set_message('title_check','The title should not be test');
			return false;
		}
		else
		{
			return true;
		}
	}

	public function posts()
	{
		$data['title'] = 'CI | All Posts';
		$data['content'] = 'Pages/posts';
		$data['get_posts'] = $this->page->get_posts();
		$this->load->view('Layouts/master', $data);
	}

	public function view_post()
	{
		$id = $this->uri->segment(3);
		if(empty($id))
		{
			show_404();
		}
		$data['title'] = 'CI | View Post';
		$data['content'] = 'Pages/view_post';
		$data['get_posts'] = $this->page->view_post($id);
		$this->load->view('Layouts/master', $data);
	}

	public function edit_post()
	{
		$id = $this->uri->segment(3);
		if(empty($id))
		{
			show_404();
		}
		$data['title'] = 'CI | Edit Post';
		$data['content'] = 'Pages/edit_post';
		$data['get_posts'] = $this->page->view_post($id);
		$this->load->view('Layouts/master', $data);

	}

	public function update_post()
	{
		$id = $this->input->post('post_id');
		$title = $this->input->post('title');
		$body = $this->input->post('body');

		$data = array(
			'title' => $title,
			'body' => $body
		);
		if($this->page->update_post($data, $id))
		{
			redirect('pages/posts');
		}
	}

		public function delete_post()
	{
		$id = $this->uri->segment(3);
		if($this->page->delete_post($id))
		{
			redirect('pages/posts');
		}
	}


}
?>