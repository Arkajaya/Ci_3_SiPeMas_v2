<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
        
    }
    

    public function authentification()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        
        $ref = $this->db->get('user')->result_array();
        
        if($data['username'] == $ref['username']){
            if($this->encrypt->encode( $data['password']) == $ref['password']){
                return $ref;
            }
        }
    }
    

}

/* End of file Auth_model.php */
 ?>