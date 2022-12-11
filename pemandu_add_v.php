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

      <div class="container-fluid">
  <div class="row">
    

    <main role="main" class="col-md-6">
      
        

      <h2>Tambah Pengaduan</h2>
           
   <form method="post" action="<?= base_url('pengaduan/tambah_aksi') ?>">
          <div class="form-group has-success">
          
		<div class="form-group has-warning">
          <input type="hidden" class="form-control" name="id_pengaduan">
            </div>	  
			  
		<div class="form-group has-warning">
          <label class="control-label" for="nik">NIK</label>
           <input type="text" class="form-control" name="nik" placeholder="NIK">

            </div>

                 <div class="form-group has-warning">
          <label class="control-label" for="judul">Masukan Pengaduan</label>
           <textarea class="form-control" name="judul" rows="5"></textarea>
            </div>
			  
		<div class="form-group has-warning">
          <label class="control-label" for="tgl">Tanggal Pengaduan</label>
           <input type="date" class="form-control" name="tgl" placeholder="nik">
            </div>
			  
		<div class="form-group has-warning">
          <label class="control-label" for="tlpn">Telepon</label>
           <input type="text" class="form-control" name="tlpn" placeholder="Nomor Telepon">
            </div>
			  
			  
  
                                        
        </form>
                        
   
  
	
 <button type="submit" class="btn btn-success" value="tambah">Tambah</button>
   
    </main>
  </div>
</div>


<?php
    $this->load->view("template/footer");
?>
		  
		  <script type="text/javascript">

    $(document).ready( function () {
        $('.table').DataTable();
    } );

</script>
