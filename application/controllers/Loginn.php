<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_loginn');
        
    }

    public function index()
    {
        $this->load->view('loginn/v_loginn');
       
    }

    function aksi_loginn()
    {
        $useri = $this->input->post('username');
        $pass = $this->input->post('password');

        $username = $useri;
        $password = md5($pass);
       
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->M_loginn->cek_loginn("useri", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "loginn"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("homei"));
        } else {
            echo "<script type ='text/JavaScript'>";  
            echo "alert('Email atau password salah')";
            echo "</script>";  
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('loginn'));
    }
}
