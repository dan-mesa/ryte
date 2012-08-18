<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    private $CI;

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
    }
 
    public function is_logged_in()
    {
        // TBD
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }

    public function send_password_reset_email($email, $first_name, $password)
    {
        // TBD
    }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */