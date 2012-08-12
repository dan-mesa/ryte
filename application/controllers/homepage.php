<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage', $data);
		$this->load->view('footer');
	}
}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */