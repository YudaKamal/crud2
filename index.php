<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Tampil semua Siswa</title>
</head>

<body>
    <div class="container" style="margin:0 auto; width:50%">
        <a href="tambahSiswa.php">Tambah siswa</a>
        <table border="1" align="center" width="50% ">
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td> Umur</td>
                <td>#</td>
            </tr>
<?php
    include 'koneksi.php';
        $query = mysqli_query($koneksi, 'select * from siswa ');
        while ($siswa = mysqli_fetch_array($query)) {
?>
            <tr>
                <td><?= $siswa['id'] ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['umur'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $siswa['id'] ?>">

                        <button type="submit">Edit</button></a>

                    <a href="hapus.php?nama=<?= $siswa['nama'] ?>">
                        
                        <button type="submit">Hapus</button></a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>

</html>