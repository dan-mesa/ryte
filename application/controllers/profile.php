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

		$this->load->model('user_model');

		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		$insert = $this->user_model->insert(array(
			"email" => $email,
			"password" => $password
		));

		$this->session->set_userdata(array(
			"user_id" => $this->db->insert_id(),
			"email" => $email,
			"template" => 0
		));

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