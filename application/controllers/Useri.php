<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Useri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('useri_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['useri'] = $this->useri_model->tampil_data()->result();
        $this->load->view('useri/useri_list_v', $data);
        
    }


    public function tambah()
    {
        $this->load->view('useri/useri_add_v');
    }

    public function tambah_aksi()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
  
        $nama       = $this->input->post('nama');

        

        $data = array(
            'username' => $username,
            'password' => $password,

            'nama' => $nama
  
        );

        $this->useri_model->input_data($data, 'useri');
        redirect('loginn');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->useri_model->hapus_data($where, 'useri');
        redirect('useri');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['useri'] = $this->useri_model->edit_data($where, 'useri')->result();
        $this->load->view('useri/useri_edit_v', $data);
    }

    public function update()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');


        $data = array(
            'nama'      => $nama,
            'username'  => $username,
            'password'  => $password,

        );

        $where = array(
            'id' => $id
        );

        $this->useri_model->update_data($where, $data, 'useri');
        redirect('useri');
    }
}