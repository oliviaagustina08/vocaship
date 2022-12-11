 <?php
    $this->load->view("template/header");
?> 

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	  
	
	<img src="<?PHP echo base_url(); ?>assets/Background perpus.png" class="pull-right" height="45"> &nbsp; &nbsp; 
	  
    <a class="navbar-brand mr-1" href="index.html">Perpustakaan</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
   
	<ul class="navbar-nav ml-auto ml-md-0">
     
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Setting') ?>">Settings</a>
         
         
        </div>
      </li>
    </ul>
    <!-- Navbar -->
    

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Pengaduan') ?>">
          <i class="fas fa-blind"></i>
          <span>Pemandu</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Buku') ?>">
          <i class="fas fa-mountain"></i>
          <span>Wisata</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Anggota') ?>">
          <i class="fas fa-city"></i>
          <span>Destinasi</span></a>
      </li>
         
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Peminjaman') ?>">
          <i class="fa fa-hotel"></i>
          <span>Hotel</span></a>
      </li>
  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Setting') ?>">
          <i class="fas fa-mortar-pestle"></i>
          <span>Kuliner</span></a>
      </li>
    
	
	</li>
         
	<li class="nav-item">
		<br>  
		 &nbsp;&nbsp;&nbsp; 
        <a href="<?php echo base_url('Login/logout') ?>" class="btn btn-danger"><span class="fas fa-sign-out-alt">&nbsp;LogOut</a></span>
      </li>
  
  
		
    </ul>



 <div id="content-wrapper">
	<div class="col-md-6">
	 <h2>&nbsp;&nbsp;Detail Data Tanggapan</h2>
	 <hr>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp;<?php echo $pengaduan['nik'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengaduan</b> &nbsp;: &nbsp;<?php echo $pengaduan['judul'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</b>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $pengaduan['tgl'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tlpone</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp;<?php echo $pengaduan['tlpn'] ?></p>


	 <br>
	 <a href="<?= base_url("Pengaduan") ?>" class="btn btn-info">Kembali</a>
	 
	 </div>	 
</div>	 
	<br>	 


<?php
    $this->load->view("template/footer");
?>

