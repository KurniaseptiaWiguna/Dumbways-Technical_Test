<?php
    include 'koneksi.php';
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,"delete from type_tb where id='$id'");
    header("location:index.php");
?>