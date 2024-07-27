<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
    
    public function index()
    {
        $this->load->view('layouts/top');
        $this->load->view('index');
        $this->load->view('layouts/footer');
    }

    public function tampilAduan()
    {
        $this->load->view('layouts/top');
        $this->load->view('users/tampiladuan');
        $this->load->view('layouts/footer');
    }

    public function tambahAduan()
    {
        
    }
    

}

/* End of file Pengaduan.php */

 ?>