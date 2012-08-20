<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
	}

	public function select()
	{

		$this->output->enable_profiler(TRUE);

		$this->load->view('header');
		$this->load->view('profile/select');
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

		//$this->output->enable_profiler(TRUE);

		$this->load->model('user_model');

		// Update Database
		$template_id = $this->uri->segment(3);
		$data = array(
			'template_id' => $template_id
		);
		$this->user_model->update($data);

		// Update Session Data
		$this->session->set_userdata('template_id', $template_id);

		redirect('/profile/select');
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */