<?php

/**
 * 
 */
class Tricks extends CI_Controller{
 public function index()

 {
 	$data['judul']= 'Halaman Home';
 	$this->load->view('template/header2',$data);
 	$this->load->view('tricks/index');
 	$this->load->view('template/footer');	
 }
}
