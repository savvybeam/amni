<?php
//include('includes/session.php');
include('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <title>Login | Amni International Petroleum Development Company</title>
        <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i%7CMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i%7COpen+Sans:300,300i,400,400i%7COswald:300,400,500&amp;subset=latin-ext' type='text/css' media='all' />
          <link property="stylesheet" rel='stylesheet' href='bootstrap/bootstrap.css' type='text/css' media='all' />
          <link property="stylesheet" rel='stylesheet' href='css/custom.css' type='text/css' media='all' />
          <link rel="icon" href="images/amni-Logo.png" sizes="32x32" />
       </head>
       <body class="">
           <div class="row">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12" style="border:1px solid lightgrey"><!--head for the body-->
                            <div class="row">
                                <div class="col-lg-offset-8 col-lg-4 col-md-offset-8 col-md-4"style="border:1px solid lightgrey"> 
                                    <img src="images/amni-Logo.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col-lg-12 col-md-12 col-xs-12" style="border:1px solid lightgrey">
                            &nbsp;
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12 col-md-12"><!--wrap for the body-->
                            <div class="row">
                                <div class="col-lg-7 col-md-7" style="border:1px solid lightgrey">
                                    <img class="" src="images/amni-vessel.jpg" height="500" width="590">
                                </div>
                                <div class="col-lg-offset-1 col-lg-4 col-md-4" style="border:1px solid lightgrey"> 
                                   <div class="login">
                                        <form id="myForm" action="loginScript.php" name="myForm" method="post">
                                            <span id="feedback" class="badge"></span>
                                            <div class="form-group">
                                                <input type="text" name="username" placeholder="username" required class="form-control" size="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="password" required class="form-control" size="">
                                            </div>
                                            <div class="form-group">
                                                <button id="submit" name="submit" class="btn btn-md btn-primary">Login</button>
                                            </div>
                                        </form>
                                   </div>
                                </div>
                            </div>
                        </div>       
                   </div>
                </div>
            </div>
           <script type="text/javascript" src='bootstrap/bootstrap.js' ></script>
           <script type="text/javascript" src='js/vendor/jquery/jquery.min.js'></script>
           <script type="text/javascript" src='js/vendor/cform/jquery.form.min.js'></script>
           <script type="text/javascript" src='js/myajax.js'></script>
    </body>   
</html>