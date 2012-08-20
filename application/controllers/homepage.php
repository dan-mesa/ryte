<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	// Comment

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
	}

	public function sign_up(){

		$this->load->model('user_model');

		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		if(!isset($email) || !isset($password)){
			redirect('/');
		}

		$insert = $this->user_model->insert(array(
			"email" => $email,
			"password" => $password
		));

		$this->session->set_userdata(array(
			"user_id" => $this->db->insert_id(),
			"email" => $email,
			"template_id" => 0
		));

		redirect('/profile/select/new');
	}
}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */