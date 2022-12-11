<?php
    $this->load->view("template/header");
?>   
    <div class="container">
        <div class="row mt-3">
            <div>
            <h2>Pesan Dari User</h2>    
            </div>
            
          
            <div class="table-responsive">
                   <div class="table-responsive">
                 
                        <div class="mt-3">    

  </div>
</div>
</div>
<br>
                <table class="table table-striped table-sm mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                  
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($help as $baris) {
                            ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $baris->name ?></td>
                                <td><?php echo $baris->email ?></td>
                                <td><?php echo $baris->subject ?></td>
                                <td><?php echo $baris->pesan ?></td>

                            
       
                                <td>
                                
                                    <a href="<?= base_url('helpv/hapus/') . $baris->id ?>" class="btn btn-danger">Hapus</a>
                                    
                                </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
               
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
