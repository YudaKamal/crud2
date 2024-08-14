<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'tgsceud');

    if (!$koneksi) {
        die(mysqli_connect_error($koneksi));
    }
?>