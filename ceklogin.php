<?php

require 'koneksi.php';

if(isset($_SESSION['login'])){
    //udah
} else {
    //belum
    header('location:index.php');
}


?>