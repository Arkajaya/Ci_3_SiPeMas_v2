<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }
    
    
    public function index()
    {
        $data['title'] = 'Login';
        
        // $this->form_validation->set_rules('username', 'Username', 'trim|required');
        // $this->form_validation->set_rules('password', 'Password', 'required');

        // if ($this->form_validation->run() == TRUE) {
        //     $data = $this->Auth_model->authentification();
            
        //     $sesion = array(
        //         'nama' => $data['nama_lengkap'],
        //         'nik' => $data['kode_akun'],
        //         'level' => $data['level']
        //     );
            
        //     $this->session->set_userdata( $sesion );
        //     redirect('Pengaduan','refresh');
        // } 

        $this->load->view('layouts/top', $data);
        $this->load->view('users/login');
        $this->load->view('layouts/bottom');

    }

    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        $this->load->view('layouts/top', $data);
        $this->load->view('users/registrasi');
        $this->load->view('layouts/footer');
    }


}

/* End of file Controllername.php */

 ?>