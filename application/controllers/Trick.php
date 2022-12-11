<?php

/**
 * 
 */
class Trick extends CI_Controller{
 public function index()

 {
 	$data['judul']= 'Halaman Home';
 	$this->load->view('template/header3',$data);
 	$this->load->view('trick/index');
 	$this->load->view('template/footer');	
 }
}
