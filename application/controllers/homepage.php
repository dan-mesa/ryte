<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//test
class Homepage extends CI_Controller {

	// Comment

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
	}
}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */