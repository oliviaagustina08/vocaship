<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Daftar Beasiswa Internasional</title>
</head>

<body>
    Tanggal Cetak : <?= date('d F Y'); ?>
    <table width="100%" style="border: 0.1mm solid #000000;" cellpaddin="8">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Beasiswa</th>
                <th>Nama</th>
                <th>Kota</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($semuabeasiswai as $beasiswai) : ?>
                <tr>
                    <td>&nbsp;<?= $i ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $beasiswai['nik']; ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $beasiswai['beasiswa']; ?>&nbsp;&nbsp;&nbsp;</td>
                         <td>&nbsp;&nbsp;
                        <?= $beasiswai['nama']; ?></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $beasiswai['kota']; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $beasiswai['jenis_kelamin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= date('d F Y', $beasiswai['date_created']);  ?>&nbsp;&nbsp;&nbsp;</td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>