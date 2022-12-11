<?php
    $this->load->view("template/header");
?>   

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      
    
    <img src="<?PHP echo base_url(); ?>assets/Background perpus.png" class="pull-right" height="45"> &nbsp; &nbsp; 
      
    <a class="navbar-brand mr-1" href="index.html">Perpustakaan</a>

   
    </button>

    <!-- Navbar Search -->
   
    <ul class="navbar-nav ml-auto ml-md-20">
     
     
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
        <a class="nav-link" href="<?php echo base_url('Pemandu') ?>">
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

      <div class=""> 

    <div class="" style="margin: 50px;">
        <div class="row">    
             
            <h2>Hotel</h2><br>
            
            <div class="table-responsive">
                 <a href="<?= base_url("Anggota/tambah/") ?>" class="btn btn-success">
                        <span data-feater="plus-circle" class="fas fa-plus"></span> Tambah Anggota</a></span>
                
                <a href="<?= base_url("Anggota/cetak_report/") ?>" class="btn btn-primary">
                        <span data-feater="plus-circle" class="fas fa-fw fa-book"></span> Laporan Anggota</a></span>
        
                <br>
               <br>

                        
                        <div class="panel-body">
                            <div class="table-hover">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                       
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($anggota as $baris) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $baris->nama ?></td>
                       
                                <td><?php echo $baris->alamat ?></td>
                                <td><?php echo $baris->email ?></td>
                                <td><img src="<?php echo base_url('assets/foto/');?><?php echo $baris->foto ?>" width="70" height="70">  </td>
       
                    <td>
                     <a href="<?= base_url('Anggota/edit/') . $baris->id_anggota ?>" class="btn btn-info"><span class="fas fa-edit">&nbsp;Edit</a></span>
                    
                        <a onClick="return confirm('Yakin Dihapus')" 
                         href="<?= base_url('Anggota/hapus/') . $baris->id_anggota ?>" class="btn btn-danger"><span class="fas fa-eraser">&nbsp;Hapus</a></span>
                        <br>
                        <br>
                        <a href="<?= base_url('Anggota/lihat/') . $baris->id_anggota ?>" class="btn btn-warning"><span class="fas fa-eye">&nbsp;Lihat</a>   </span>
                        
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
