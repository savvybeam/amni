<?php
include('includes/conn.php');

if(isset($_POST['submit'])){
    $usern=mysql_real_escape_string(stripslashes($_POST['username']));
    $pass=mysql_real_escape_string(stripslashes($_POST['password']));
    
    $st = mysql_query("select * from employees where username='$usern' and secret = '$pass'");
    echo $rc = mysql_num_rows($st);
    if($rc==1){
        session_start();
        $ss=mysql_fetch_array($st);
        extract($ss);
        $_SESSION['sess_empno'] = $empno;
        $_SESSION['sess_fn'] = $firstname;
        $_SESSION['sess_uid'] = $username;
        $_SESSION['sess_email'] = $email;
        $_SESSION['sess_cadre'] = $cadre;
        
        //echo "<div class='alert alert-success' id='alert'><button type='button' class='close' data-dismiss='alert'>×</button><strong><i class='fa fa-bullhorn'></i></strong>Logged on Successfully, please wait</div>";
        
       header('location:intranet.php');
    }else{
        
        echo "<div class='alert alert-danger' id='alert'><button type='button' class='close' data-dismiss='alert'>×</button><strong><i class='fa fa-bullhorn'></i></strong>Logon Failed!</div>";
        
    }
}


?>