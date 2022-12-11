<?php
    $this->load->view("template/header");
?>   

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	  
	
	<img src="<?PHP echo base_url(); ?>assets/Background perpus.png" class="pull-right" height="45"> &nbsp; &nbsp; 
	  
    <a class="navbar-brand mr-1" href="index.html">Tamansari</a>

   
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

    <div class="container">
        <div class="row">    
             
            <h2 class="daftar">Daftar Pengaduan</h2>
            
            <div class="table-responsive">
                 <a href="<?= base_url("Pengaduan/tambah/") ?>" class="btn btn-success">
                        <span data-feater="plus-circle" class="fas fa-plus"></span> Tambah Pengaduan</a></span>
				
				<a href="<?= base_url("Pengaduan/cetak_report/") ?>" class="btn btn-primary">
                        <span data-feater="plus-circle" class="fas fa-fw fa-book"></span> Laporan Pengaduan</a></span>
		
				<br>
		       <br>
		
			
                        
						<div class="panel-body">
                            <div class="table-responsive">
                 <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th> 
                            <th>Deskripsi</th>
                          

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengaduan as $baris) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $baris->nik ?></td>
                                <td><?php echo $baris->nama ?></td>
                                <td><?php echo $baris->tgl ?></td>
                                <td><?php echo $baris->tlpn ?></td>
                                
       
                    <td>
                     <a href="<?= base_url('Pengaduan/edit/') . $baris->id_pengaduan ?>" class="btn btn-info"><span class="fas fa-edit">&nbsp;Edit</a></span>
                    
						<a onClick="return confirm('Yakin Dihapus')" 
						 href="<?= base_url('Pengaduan/hapus/') . $baris->id_pengaduan ?>" class="btn btn-danger"><span class="fas fa-eraser">&nbsp;Hapus</a></span>
					 
						<a href="<?= base_url('Pengaduan/lihat/') . $baris->id_pengaduan ?>" class="btn btn-warning"><span class="fas fa-eye">&nbsp;Lihat</a>	</span>
						
                    </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
