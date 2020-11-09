<?php
session_start();
$action = $_GET['action'];
if ($action == 'uwu') {
    if ($_POST["name"] == "") {
        header('../location:home?pesan=gagal');
    }else{
        $name = $_POST['name'];
        $bahasa = $_POST['pilih'];
        $_SESSION['name'] = $name;
        $_SESSION['pilih'] = $bahasa;
        header('location:../uwu');
    }
}
?>