<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Mahasiswa</title>
</head>
<body>
    <h3>Halaman Edit Mahasiswa</h3>
    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" value="<?php echo $queryMhsDetail->nim ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $queryMhsDetail->nama ?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $queryMhsDetail->jurusan ?>"></td>
        </tr>
        <tr>
            <td colspan="3"><button type="submit">Update Mahasiswa</button></td>
        </tr>
    </table>
    </form>
</body>
</html>
