<?php
session_start();
if(isset($_SESSION['sess_uid'])){
    session_destroy();
    header('location:index.php');
}else{
     header('location:index.php');
}