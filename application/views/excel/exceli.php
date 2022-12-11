<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Beasiswa Internasional Masuk Tanggal : <?= date('d F Y'); ?> </h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Beasiswa</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Masuk Data</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($semuabeasiswai as $beasiswai) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $beasiswai['nik']; ?></td>
                <td><?= $beasiswai['beasiswa']; ?></td>
                <td><?= $beasiswai['nama']; ?></td>
                <td><?= $beasiswai['kota']; ?></td>
                <td><?= $beasiswai['jenis_kelamin']; ?></td>
                <td><?= date('d F Y', $beasiswai['date_created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>