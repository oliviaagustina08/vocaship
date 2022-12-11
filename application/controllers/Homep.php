<?php

/**
 * 
 */
class Homep extends CI_Controller{
 public function index()

 {
 	$data['judul']= 'Halaman Home';
 	$this->load->view('homep/index');
 	$this->load->view('template/footer');	
 }
}
