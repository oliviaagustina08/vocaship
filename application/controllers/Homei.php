<?php

/**
 * 
 */
class Homei extends CI_Controller{
 public function index()

 {
 	$data['judul']= 'Halaman Home';
 	$this->load->view('template/header2',$data);
 	$this->load->view('homei/index');
 	$this->load->view('template/footer');	
 }
}
