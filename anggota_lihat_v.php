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
    
     <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/buku') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Pemandu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/anggota') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Wisata</span></a>
      </li>
     
  </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/peminjaman') ?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Destinasi</span></a>
      </li>

        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/peminjaman') ?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Hotel</span></a>
      </li>
  
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/setting') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kuliner</span></a>
      </li>
  
  
  </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Login/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>LogOut</span></a>
      </li>
  
		
    </ul>





 <div id="content-wrapper">
	<div class="col-md-6">
	 <h2>&nbsp;&nbsp;Detail Nama Anggota</h2>
	 <hr>
	 <img src="<?php echo base_url() ?>assets/foto/<?php echo $anggota['foto']?>" style="height: 170px;"></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK</b>     : <?php echo $anggota['nik'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</b> : <?php echo $anggota['nama'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</b>      : <?php echo $anggota['alamat'] ?></p>
	 <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail</b>  : <?php echo $anggota['email'] ?></p>
	 
	 
	 <br>
	 <a href="<?= base_url("Anggota") ?>" class="btn btn-info">Kembali Ke Halaman Anggota</a>
	 
	 </div>


	
	 
	 
</div>	


	<br>	 


<?php
    $this->load->view("template/footer");
?>

