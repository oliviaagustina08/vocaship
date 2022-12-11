<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helpv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('helpv_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['help'] = $this->helpv_model->tampil_data()->result();
        $this->load->view('helpv/help_list_v', $data);
        
        
    }



    public function tambah()
    {
        $this->load->view('helpv/help_add_v');
    }

    public function tambah_aksi()
    {
        $name   = $this->input->post('name');
        $email   = $this->input->post('email');
        $subject   = $this->input->post('subject');
        $pesan   = ($this->input->post('pesan'));


        

        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'pesan' => $pesan
  
        );

        $this->helpv_model->input_data($data, 'helpv');
        redirect('helpv');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->helpv_model->hapus_data($where, 'help');
        redirect('helpv');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['helpv'] = $this->helpv_model->edit_data($where, 'helpv')->result();
        $this->load->view('helpv', $data);
    }

    public function update()
    {
        $id         = $this->input->post('id');
        $name       = $this->input->post('name');
        $email   = $this->input->post('email');
        $subject   = $this->input->post('subject');
        $pesan   = $this->input->post('pesan');


        $data = array(
            'name'      => $name,
            'email'  => $email,
            'subject'  => $subject,
            'pesan'  => $pesan

        );

        $where = array(
            'id' => $id
        );

        $this->helpv_model->update_data($where, $data, 'helpv');
        redirect('helpv');
    }
     
}