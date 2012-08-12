<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
	}

	public function create()
	{
		$this->load->view('header');
		$this->load->view('profile/create');
		$this->load->view('footer');
	}

	public function manage()
	{

	}

	public function view()
	{
		$this->load->view('profile/templates/derek-jeter');
	}

	public function select_template()
	{

		// Get template ID from URL
		// Update user template ID
		// Redirect to user dashboard

	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */