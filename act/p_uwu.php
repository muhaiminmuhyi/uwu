<?php
session_start();
$action = $_GET['action'];
if ($action == 'uwu') {
    if ($_POST["name"] == "") {
        header('location:index');
    }else{
        $name = $_POST['name'];
        $_SESSION['name'] = $name;
        header('location:../uwu');
    }
}
?>