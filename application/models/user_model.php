<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    private $CI;

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        if($this->db->insert('users', $data)){
            return true;
        }
    }

    public function update($data)
    {
        $user_id = $this->session->userdata('user_id');
        $this->db->update('users', $data, "user_id = $user_id"); // SQL INJECTION
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