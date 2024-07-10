<?php
session_start();
if(isset($_SESSION)){
        $empno = $_SESSION['sess_empno'];
        $firstname = $_SESSION['sess_fn'];
        $username = $_SESSION['sess_uid'];
        $email = $_SESSION['sess_email'];
        $cadre = $_SESSION['sess_cadre'];
}
?>