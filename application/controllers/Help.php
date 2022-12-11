<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Help extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('help_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['help'] = $this->help_model->tampil_data()->result();
        $this->load->view('help/help_add_v', $data);

        
    }



    public function tambah()
    {
        $this->load->view('help/help_add_v');
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

        $this->help_model->input_data($data, 'help');
        redirect('help');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->help_model->hapus_data($where, 'help');
        redirect('help');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['help'] = $this->help_model->edit_data($where, 'help')->result();
        $this->load->view('help/help_edit_v', $data);
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

        $this->help_model->update_data($where, $data, 'help');
        redirect('help');
    }
     
}