    <?php
    $this->load->view("/template/header");
?> 
<!doctype html>
<html lang="en">

<head>
   

</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= form_open_multipart('beasiswan/uploaddata') ?>
                        <div class="form-row">
                            <div class="col-4">
                                <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                            <div class="col">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <form class="mb-4" method="GET" action="">
                            <div class="row">
                                
                            </div>
                        </form>
                        <?php
                        $tanggalwal = $this->input->get('tanggalawal');
                        $tanggakhir = $this->input->get('tanggalakhir');
                        ?>

                        <?php if (!$tanggalwal && !$tanggakhir) : ?>
                            <a href="<?= base_url('beasiswan/mpdf'); ?>" class="btn btn-danger">Export as Pdf</a>
                            <a href="<?= base_url('beasiswan/excel'); ?>" class="btn btn-success">Export as Excel</a>
                            <a href="<?= base_url('beasiswan/highchart'); ?>" class="btn btn-info">Lihat Grafik</a>
                            <br><br>
                            <h4 class="text-center mt-2"> Informasi Beasiswa Nasional <?= date('d F Y'); ?> </h4>
                          
                        <?php else : ?>
                            <a href="<?= base_url('beasiswan/mpdf?tanggalawal=' . $tanggalwal . '&tanggalakhir=' . $tanggakhir); ?>" class="btn btn-danger">Export Pdf</a>
                            <a href="<?= base_url('beasiswan/excel?tanggalawal=' . $tanggalwal . '&tanggalakhir=' . $tanggakhir); ?>" class="btn btn-success">Export Excel</a>
                            <a href="<?= base_url('beasiswan/highchart?tanggalawal=' . $tanggalwal . '&tanggalakhir=' . $tanggakhir); ?>" class="btn btn-info">Export Grafik</a>
                            <h4 class="text-center mt-2"> Laporan Daftar Beasiswa Nasional masuk tanggal <?= $tanggalwal . ' s/d' . $tanggakhir ?> </h4>
                        <?php endif; ?>


                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Beasiswa</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Tanggal Masuk Data</th>
                                    <th scope="col">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($semuabeasiswan as $beasiswan) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $beasiswan['nik']; ?></td>
                                        <td><?= $beasiswan['beasiswa']; ?></td>
                                        <td><?= $beasiswan['nama']; ?></td>
                                        <td><?= $beasiswan['jenis_kelamin']; ?></td>
                                        <td><?= $beasiswan['kota']; ?></td>
                                        <td><?= date('d F Y', $beasiswan['date_created']);  ?></td>

                                        <td>    
                                            <a href="<?= base_url(); ?>beasiswan/hapus/<?= $beasiswan ['id']; ?>" 
                                            class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                                        </td>

                                        </td>
                                    </tr> <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>





<?php
    $this->load->view("template/footer");
?>