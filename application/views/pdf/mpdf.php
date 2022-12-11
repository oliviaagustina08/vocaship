<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Daftar Beasiswa Nasional</title>
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
            foreach ($semuabeasiswan as $beasiswan) : ?>
                <tr>
                    <td>&nbsp;<?= $i ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $beasiswan['nik']; ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $beasiswan['beasiswa']; ?>&nbsp;&nbsp;&nbsp;</td>
                         <td>&nbsp;&nbsp;
                        <?= $beasiswan['nama']; ?></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $beasiswan['kota']; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $beasiswan['jenis_kelamin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= date('d F Y', $beasiswan['date_created']);  ?>&nbsp;&nbsp;&nbsp;</td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>