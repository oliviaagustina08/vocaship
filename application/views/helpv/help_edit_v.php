<?php
    $this->load->view("template/header");
?>   
    <div class="container">              
        <h2>Update Help</h2>
        <?php foreach ($help as $baris) { ?>
        <?php echo form_open_multipart('help/update');?>    

            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $baris->id; ?>">
            </div>        
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name" value="<?php echo $baris->name; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $baris->email; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Subject</label>
                <input type="text" class="form-control" name="subject" value="<?php echo $baris->subject; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Pesan</label>
                <input type="text" class="form-control" name="npesa" value="<?php echo $baris->pesan; ?>">
            </div>
           
            
            <button type="submit" class="btn btn-primary">Perbaharui</button>
            <a href="<?= base_url();?>help" class="btn btn-success">Kembali</a>

       <?php  echo form_close(); ?>

    <?php } ?>
        <br>
        <br>
    </div>

<?php
    $this->load->view("template/footer");
?>

