<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('/dashboard/dashboard');
		$this->load->view('footer');

		//Hello! This was edited by Al
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */