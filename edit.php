<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses-edit.php" method="post">
        <?php
        include 'koneksi.php';
        $id  = $_GET['id'];
        $query = mysqli_query($koneksi,"select * from siswa WHERE id='$id'");
        $siswa = mysqli_fetch_array($query);
        ?>
        <p>id <input type="text" name="id" id="" value="<?=$siswa['id']?>"></p>
        <p>Nama <input type="text" name="nama" id="" value="<?=$siswa['nama']?>"></p>
        <p>Umur <input type="number" name="umur" id="" value="<?=$siswa['umur']?>"></p>
        <button type="submit" >Edit</button>

    </form>
</body>
</html>