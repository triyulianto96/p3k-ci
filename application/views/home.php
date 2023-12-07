<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Data Mahasiswa Kecoak Sakti</h1>

    <a href="<?php echo base_url('/Home/halaman_tambah') ?>">Tambah Mahasiswa</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Aksi</td>
        </tr>
        <?php 
            $count = 0;
            foreach ($queryAllMhs as $row) {
                $count = $count + 1;
         ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row->nim ?></td>
            <td><?php echo $row->nama ?></td>
            <td><?php echo $row->jurusan ?></td>
            <td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
