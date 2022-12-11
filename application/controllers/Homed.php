<?php

/**
 * 
 */
class Homed extends CI_Controller{
 public function index()

 {
 	$data['judul']= 'Halaman Home';
 	$this->load->view('template/header3',$data);
 	$this->load->view('homed/index');
 	$this->load->view('template/footer');	
 }
}
